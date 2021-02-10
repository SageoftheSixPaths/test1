<?php
class AdminController{
    public function checkout(){
        $database = new Database();
        $database->checkout();
        return require 'views/checkout.view.php';
    }

    public function add(){
        $database = new Database();
        $database->insertBook();
        header('Location: /book/add');
    }

    public function delete(){
        $database = new Database();
        $database->deleteBook();
        header('Location: /book/delete');
    }

    public function signUp(){
        $database = new Database();
        $database->signUp();
        header('Location: /signUp');
    }

    public function logIn(){
        $database = new Database();
        var_dump($database->logIn());
    }
}