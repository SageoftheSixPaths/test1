<?php
namespace App\Core;
class Router{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file){
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controllers){
        $this->routes['GET'][$uri] = $controllers;
    }
   
    public function post($uri, $controllers){
        $this->routes['POST'][$uri] = $controllers;
    }

    public function direct($uri, $requestMethod){
        if(array_key_exists($uri, $this->routes[$requestMethod])){
            return $this->callAction(...explode('@', $this->routes[$requestMethod][$uri]));
        }

        throw new Exception('Twas an error');
    }

    protected function callAction($controller, $action){
        $controller = "App\\Controllers\\$controller";
        $controller = new $controller;
        if(!method_exists($controller, $action)){
            throw new Exception('Method doesn\'t exist');
        }
        return $controller->$action();
    }
}