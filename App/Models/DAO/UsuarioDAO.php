<?php

namespace App\Models\DAO;

use App\Models\Entidades\Usuario;
use Exception;

class UsuarioDAO extends BaseDAO
{
    public function verificaEmail($email)
    {
        try {
            $query = $this->select(
                "SELECT * FROM usuario WHERE email = :email",
                [':email' => $email]
            );

            return $query->fetch();
        } catch (Exception $e) {
            throw new Exception("Erro no acesso aos dados: " . $e->getMessage(), 500);
        }
    }

    public function salvar(Usuario $usuario)
    {
        try {
            $nome = $usuario->getNome();
            $email = $usuario->getEmail();

            return $this->insert(
                'usuario',
                ':nome, :email',
                [
                    ':nome' => $nome,
                    ':email' => $email
                ]
            );
        } catch (Exception $e) {
            throw new Exception("Erro na gravação de dados: " . $e->getMessage(), 500);
        }
    }

    public function listar()
    {
        try {
            $query = $this->select("SELECT * FROM usuario");

            return $query->fetchAll();
        } catch (Exception $e) {
            throw new Exception("Erro no acesso aos dados: " . $e->getMessage(), 500);
        }
    }

    public function buscar($id)
    {
        try {
            $query = $this->select(
                "SELECT * FROM usuario WHERE id = :id",
                [':id' => $id]
            );

            return $query->fetch();
        } catch (Exception $e) {
            throw new Exception("Erro no acesso aos dados: " . $e->getMessage(), 500);
        }
    }

    public function listarTodos()
    {
        try {
            $query = $this->select("SELECT * FROM usuario");

            $usuarios = [];
            while ($linha = $query->fetch(\PDO::FETCH_ASSOC)) {
                $usuario = new Usuario();
                $usuario->setId($linha['id']);
                $usuario->setNome($linha['nome']);
                $usuario->setEmail($linha['email']);

                $usuarios[] = $usuario;
            }

            return $usuarios;
        } catch (Exception $e) {
            throw new Exception("Erro no acesso aos dados: " . $e->getMessage(), 500);
        }
    }

    public function atualizar(Usuario $usuario)
    {
        try {
            $sql = "UPDATE usuario SET nome = :nome, email = :email WHERE id = :id";
            $params = [
                ':nome' => $usuario->getNome(),
                ':email' => $usuario->getEmail(),
                ':id' => $usuario->getId()
            ];

            return $this->execute($sql, $params);
        } catch (Exception $e) {
            throw new Exception("Erro ao atualizar o usuário: " . $e->getMessage(), 500);
        }
    }

    public function excluir($id)
    {
        try {
            return $this->delete('usuario', 'id = :id', [':id' => $id]);
        } catch (Exception $e) {
            throw new Exception("Erro ao excluir o usuário: " . $e->getMessage(), 500);
        }
    }
}
