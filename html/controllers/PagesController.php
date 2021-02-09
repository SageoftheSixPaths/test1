<?php
require './book-database.php';
require './user-database.php';
class PagesController{
    public function index(){
        $bookDatabase = new BookDatabase();
        $books = $bookDatabase->getAllBooks();
        $userDatabase = new UserDatabase();
        $user = $userDatabase->getUser();
        if($user->username === 'user' && $user->password === 'password'){
            return require 'views/index.view.php';
        }else{
            echo 'DO NOT ENTER';
        }
    }

    public function book(){
        $bookID = explode('/', $_SERVER['REQUEST_URI']);
        $bookDatabase = new BookDatabase();
        $book = $bookDatabase->getOneBookInformation($bookID[count($bookID) - 1]);
        return require 'views/book.view.php';
    }
    
    public function add(){
        return require 'views/add-book.view.php';
    }

    public function delete(){
        $bookDatabase = new BookDatabase();
        $books = $bookDatabase->getAllBooks();
        return require 'views/delete.view.php';
    }

    public function signUp(){
        return require 'views/signUp.view.php';
    }

    public function logIn(){
        return require 'views/logIn.view.php';
    }
}