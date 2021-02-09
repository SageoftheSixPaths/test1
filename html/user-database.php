<?php
class UserDatabase{
    private $pdo;
    public function __construct(){
        $this->pdo = new PDO('mysql:host=php_database_1;dbname=users', 'root', 'password');
    }

    public function getUser(){
        $statement = $this->pdo->prepare('select * from user');
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function signUp(){
        $statement = $this->pdo->prepare('insert into user(username, email, password) values(:username, :email, :password)');
        $statement->execute($_POST);
    }

    public function logIn(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $statement = $this->pdo->prepare("select * from user where username=$username and password='$password'");
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }
}