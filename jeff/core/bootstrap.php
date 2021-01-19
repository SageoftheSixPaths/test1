<?php
use App\Core\App;

App::bind('config', require 'config.php');
App::bind('database', new QueryCreation(Connection::create(App::get('config')['database'])));

function view($name, $data = []){
    extract($data);
    return require "app/views/$name.view.php";
}