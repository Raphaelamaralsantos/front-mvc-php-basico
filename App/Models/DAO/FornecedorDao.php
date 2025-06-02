<?php
namespace App\Models\DAO;
use App\Models\Entidades\Fornecedor;

class FornecedorDAO extends BaseDAO{
    public function salvar(Fornecedor $fornecedor) {
        try {
            $nome = $fornecedor->getNome();
            $telefone = $fornecedor->getTelefone();
            $endereco = $fornecedor->getEndereco();
            $cnpj = $fornecedor->getCnpj();

            return $this->insert(
                'fornecedor', ":nome, :telefone, :endereco, :cnpj",
                [
                    ':nome' => $nome,
                    ':telefone' => $telefone,
                    ':endereco' => $endereco,
                    ':cnpj' => $cnpj
                ]
            );
        } catch (\Exception $e) {
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function verificaCNPJ($cnpj)
    {
        try {
            $query = $this->select(
                "SELECT * FROM fornecedor WHERE cnpj = '$cnpj' "
            );

            return $query->fetch();

        } catch (\Exception $e) {
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }
}