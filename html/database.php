<?php
class Database{
    private $pdo;
    public function __construct(){
        $this->pdo = new PDO('mysql:host=php_database_1;dbname=database', 'root', 'password');
    }

    public function getAllBooks(){
        $statement = $this->pdo->prepare('select * from books where checkedOut=0');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function getOneBookInformation($bookID){
        $statement = $this->pdo->prepare("select * from books where id=$bookID");
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function checkout(){
        $items = implode(',', $_POST);
        $statement = $this->pdo->prepare("update books set checkedOut=1 where id in ($items)");
        $statement->execute();
    }

    public function insertBook(){
        $statement = $this->pdo->prepare("insert into books(author, title, genre) values(:author, :title, :genre)");
        $statement->execute($_POST);
    }

    public function deleteBook(){
        $items = implode(',', $_POST);
        $statement = $this->pdo->prepare("delete from books where id in($items)");
        $statement->execute();
    }

    public function getUser(){
        $statement = $this->pdo->prepare('select * from users');
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function signUp(){
        $statement = $this->pdo->prepare('insert into users(username, email, password) values(:username, :email, :password)');
        $statement->execute($_POST);
    }

    public function logIn(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $statement = $this->pdo->prepare("select * from users where username='$username' and password='$password'");
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }
}