<?php

namespace App\Models\DAO;

use App\Lib\Conexao;
use PDOException;

abstract class BaseDAO
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::getConnection();
    }

    /**
     * SELECT com suporte a parâmetros nomeados (:id, :email, etc)
     */
    public function select($sql, $params = [])
    {
        try {
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            throw new \Exception("Erro ao executar SELECT: " . $e->getMessage(), 500);
        }
    }

    /**
     * INSERT usando placeholders nomeados (:campo)
     */
    public function insert($table, $cols, $values)
    {
        if (!empty($table) && !empty($cols) && !empty($values)) {
            $colunas = str_replace(":", "", $cols);

            $sql = "INSERT INTO {$table} ({$colunas}) VALUES ({$cols})";

            try {
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute($values);
                return $stmt->rowCount();
            } catch (PDOException $e) {
                throw new \Exception("Erro ao executar INSERT: " . $e->getMessage(), 500);
            }
        }

        return false;
    }

    /**
     * UPDATE com suporte a WHERE e placeholders
     */
    public function update($table, $cols, $values, $where = null)
    {
        if (!empty($table) && !empty($cols) && !empty($values)) {
            $sql = "UPDATE {$table} SET {$cols}";
            if ($where) {
                $sql .= " WHERE {$where}";
            }

            try {
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute($values);
                return $stmt->rowCount();
            } catch (PDOException $e) {
                throw new \Exception("Erro ao executar UPDATE: " . $e->getMessage(), 500);
            }
        }

        return false;
    }

    /**
     * DELETE com suporte a WHERE e parâmetros
     */
    public function delete($table, $where = null, $params = [])
    {
        if (!empty($table)) {
            $sql = "DELETE FROM {$table}";
            if ($where) {
                $sql .= " WHERE {$where}";
            }

            try {
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute($params);
                return $stmt->rowCount();
            } catch (PDOException $e) {
                throw new \Exception("Erro ao executar DELETE: " . $e->getMessage(), 500);
            }
        }

        return false;
    }

    /**
     * EXECUTE genérico para qualquer comando com placeholders
     */
    protected function execute($sql, $params = [])
    {
        try {
            $stmt = $this->conexao->prepare($sql);
            return $stmt->execute($params);
        } catch (PDOException $e) {
            throw new \Exception("Erro ao executar comando: " . $e->getMessage(), 500);
        }
    }
}
