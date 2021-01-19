<?php
class HeroModel{
    protected $pdo;

    public function __construct(){
        try{
            return $this->pdo = new PDO('mysql:host=some-mysql;dbname=mydatabase', 'root', 'password');
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getHeroes($table){
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function storeHero($table, $parameter){
        $statement = $this->pdo->prepare("insert into $table(name,class,`rank`) values(:name, :class, :rank)");
        $statement->execute($parameter);
    }
}