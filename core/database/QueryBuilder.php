<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {
            echo 'erro ao cadastrar';
            die();
        }
    }

    public function update($tabela, $dados, $where)
    {
        $dados = (array)$dados;
        $campos = '';
        foreach ($dados as $key => $valor) {
            $campos .= "\n $key=:$key,";
        }
        $campos = rtrim($campos, ",");
        $sql = sprintf(
            "UPDATE %s \n SET %s \n WHERE id = %s",
            $tabela,
            $campos,
            implode(" = ", $where)
        );
        try {
            $statement = $this->pdo->prepare($sql)->execute($dados);
            return $where;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }
    }

    public function atualiza($tabela, $dados, $where)
    {
        $dados = (array)$dados;
        $campos = '';
        foreach ($dados as $key => $valor) {
            $campos .= "\n $key=:$key,";
        }
        $campos = rtrim($campos, ",");
        $sql = sprintf(
            "UPDATE %s \n SET %s \n WHERE pedidoId = %s",
            $tabela,
            $campos,
            implode(" = ", $where)
        );
        try {
            $statement = $this->pdo->prepare($sql)->execute($dados);
            return $where;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();

        }
    }

    public function selectWhere($table, $dados)
    {

        $query = "select * from `{$table}` where 1 ";

        foreach($dados as $dado => $valor)
        {
            if(!empty($valor))
            {
            $query .= "AND `{$dado}` = '{$valor}' ";
            }
        }
            
        try 
        {
            $resultado = $this->pdo->prepare(utf8_decode($query));
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_CLASS);

        } 
        catch (PDOException $exception)
        {
            die($exception->getMessage());
        }

    }

    public function selectWhereNot($table, $dados)
    {

        $query = "select * from `{$table}` where 1 ";

        foreach($dados as $dado => $valor)
        {
            if(!empty($valor))
            {
            $query .= "AND `{$dado}` != '{$valor}' ";
            }
        }
            
        try 
        {
            $resultado = $this->pdo->prepare(utf8_decode($query));
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_CLASS);

        } 
        catch (PDOException $exception)
        {
            die($exception->getMessage());
        }

    }

}
