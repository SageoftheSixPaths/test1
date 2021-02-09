<?php
require 'Router.php';
require 'controllers/PagesController.php';
require 'controllers/AdminController.php';
$bookID = explode('/', $_SERVER['REQUEST_URI']);
$router = new Router($bookID[count($bookID) - 1]);
$router->redirect(trim($_SERVER['REQUEST_URI'], '/'), $_SERVER['REQUEST_METHOD']);