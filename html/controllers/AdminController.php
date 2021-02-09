<?php
class AdminController{
    public function checkout(){
        $bookDatabase = new BookDatabase();
        $bookDatabase->checkout();
        return require 'views/checkout.view.php';
    }

    public function add(){
        $bookDatabase = new BookDatabase();
        $bookDatabase->insertBook();
        header('Location: /book/add');
    }

    public function delete(){
        $bookDatabase = new BookDatabase();
        $bookDatabase->deleteBook();
        header('Location: /book/delete');
    }

    public function signUp(){
        $userDatabase = new UserDatabase();
        $userDatabase->signUp();
        header('Location: /signUp');
    }

    public function logIn(){
        $userDatabase = new UserDatabase();
        var_dump($userDatabase->logIn());
    }
}