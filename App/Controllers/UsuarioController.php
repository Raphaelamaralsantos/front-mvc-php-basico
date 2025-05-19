<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\UsuarioDAO;
use App\Models\Entidades\Usuario;

class UsuarioController extends Controller
{
    public function cadastro()
    {
        $this->render('/usuario/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
    }

    public function salvar()
    {
        $usuario = new Usuario();
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);

        Sessao::gravaFormulario($_POST);

        $usuarioDAO = new UsuarioDAO();

        if ($usuarioDAO->verificaEmail($_POST['email'])) {
            Sessao::gravaMensagem("Email existente");
            $this->redirect('/usuario/cadastro');
            return;
        }

        if ($usuarioDAO->salvar($usuario)) {
            $this->redirect('/usuario/sucesso');
        } else {
            Sessao::gravaMensagem("Erro ao gravar");
            $this->redirect('/usuario/cadastro');
        }
    }

    public function sucesso()
    {
        if (Sessao::retornaValorFormulario('nome')) {
            $this->render('/usuario/sucesso');

            Sessao::limpaFormulario();
            Sessao::limpaMensagem();
        } else {
            $this->redirect('/');
        }
    }

    public function index()
    {
        $this->redirect('/usuario/cadastro');
    }

    public function listar()
    {
        $usuarioDAO = new UsuarioDAO();
        $usuarios = $usuarioDAO->listarTodos();

        $this->setViewParam('usuarios', $usuarios);

        $this->render('/usuario/listar');
    }

    public function edicao($id)
    {
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->buscar($id);

        if ($usuario) {
            $this->setViewParam('usuario', $usuario);
            $this->render('/usuario/edicao');
        } else {
            Sessao::gravaMensagem("Usuário não encontrado.");
            $this->redirect('/usuario/listar');
        }
    }

    public function excluir($id)
    {
        if (!$id) {
            Sessao::gravaMensagem("ID do usuário não informado.");
            $this->redirect('/usuario/listar');
            return;
        }

        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->buscar($id);

        if (!$usuario) {
            Sessao::gravaMensagem("Usuário não encontrado.");
            $this->redirect('/usuario/listar');
            return;
        }

        if ($usuarioDAO->excluir($id)) {
            Sessao::gravaMensagem("Usuário excluído com sucesso.");
        } else {
            Sessao::gravaMensagem("Erro ao excluir o usuário.");
        }

        $this->redirect('/usuario/listar');
    }
}
