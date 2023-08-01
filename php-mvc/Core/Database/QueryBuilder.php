<?php

namespace Core\Databases;
use PDO;

class QueryBuilder
{
    private $pdo;
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function insert($table , $paramerts)
    {
        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",  $table ,
            implode(',' , array_keys($paramerts)) ,
            ':'.implode(',:' , array_keys($paramerts))
        );
        try
        {
            $statment = $this->pdo->prepare($sql);
            $statment->execute($paramerts);
        }
        catch (\PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    public function selectAll($table)
    {
        $sql = "SELECT * FROM {$table}";
        try
        {
            $statment = $this->pdo->prepare($sql);
            $statment->execute();
            return $statment->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (\PDOException $e)
        {

            echo $e->getMessage();
        }
    }
    public function selectRow($table ,$where, $value)
    {
        $sql = sprintf("SELECT * FROM %s WHERE {$where}" , $table );
        try
        {
            $stament = $this->pdo->prepare($sql);
            $stament->execute($value);
            return $stament->fetch(PDO::FETCH_ASSOC);
        }
        catch (\PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function update($table , $column , $where , $values)
    {
        $sql = sprintf(
            "UPDATE %s SET %s WHERE %s" ,
            $table , $column , $where
        );

        try
        {
            $stament = $this->pdo->prepare($sql);
            $stament->execute($values);
            $stament->fetch(PDO::FETCH_ASSOC);
        }
        catch (\PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function delete($table , $condition , $values)
    {
        $sql = sprintf("DELETE FROM %s WHERE %s" , $table , $condition );
        try
        {
            $stament = $this->pdo->prepare($sql);
            $stament->execute($values);
            $stament->fetch(PDO::FETCH_ASSOC);
        }
        catch (\PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}