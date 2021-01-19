<?php
class QueryCreation{
    public $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $columns){
        $sql = sprintf('insert into %s(%s) values(%s)', $table, implode(', ', array_keys($columns)), implode(', ', array_map(function($column){
            return ":$column";
        }, array_keys($columns))));

        $statement = $this->pdo->prepare($sql);
        $statement->execute($columns);
    }
}