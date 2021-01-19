<?php
namespace App\Controllers;
use App\Core\App;
class TodosController{
    public function todos(){
        $tasks = App::get('database')->selectAll('todos');
        return view('todos', compact('tasks'));
    }

    public function store(){
        App::get('database')->insert('todos', ['description' => $_POST['task'], 'completed' => 0]);
        header('Location: /todos');
    }
}