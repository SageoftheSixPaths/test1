<?php
class Router{
    private $routes;

    public function __construct($bookID){
        $this->routes = [
            'GET' => [
                '' => 'PagesController@index',
                "book/$bookID" => 'PagesController@book',
                'book/add' => 'PagesController@add',
                'book/delete' => 'PagesController@delete',
                'signUp' => 'PagesController@signUp',
                'logIn' => 'PagesController@logIn'
            ],
            'POST' => [
                'checkout' => 'AdminController@checkout',
                'book/add' => 'AdminController@add',
                'book/delete' => 'AdminController@delete',
                'signUp' => 'AdminController@signUp',
                'logIn' => 'AdminController@logIn'
            ]
        ];
    }

    public function redirect($uri, $method){
        if(array_key_exists($uri, $this->routes[$method])){
            return $this->idk(...explode('@',$this->routes[$method][$uri]));
        }
        throw new Exception('Cant find the given URI');
    }

    private function idk($controller, $action){
        return (new $controller)->$action();
    }
}