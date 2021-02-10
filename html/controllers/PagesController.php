<?php
class PagesController{
    public function index(){
        $database = new Database();
        $books = $database->getAllBooks();
        $user = $database->getUser();
        if($user->username === 'test' && $user->password === 'test'){
            return require 'views/index.view.php';
        }else{
            echo 'DO NOT ENTER';
        }
    }

    public function book(){
        $bookID = explode('/', $_SERVER['REQUEST_URI']);
        $database = new Database();
        $book = $database->getOneBookInformation($bookID[count($bookID) - 1]);
        return require 'views/book.view.php';
    }

    public function checkout(){
        $database = new Database();
        $database->checkout();
        return require 'views/checkout.view.php';
    }
    
    public function add(){
        return require 'views/add-book.view.php';
    }

    public function delete(){
        $database = new Database();
        $books = $database->getAllBooks();
        return require 'views/delete.view.php';
    }

    public function signUp(){
        return require 'views/signUp.view.php';
    }

    public function logIn(){
        return require 'views/logIn.view.php';
    }
}