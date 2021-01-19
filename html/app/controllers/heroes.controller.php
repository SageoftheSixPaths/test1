<?php
require 'app/models/hero.model.php';
class Heroes{
    public static function getHeroes(){
        $database = new HeroModel();
        $heroes = $database->getHeroes('heroes');
        return require 'app/views/heroes.view.php';
    }

    public static function store($table, $parameter){
        $database = new HeroModel();
        $database->storeHero($table, $parameter);
        Header('Location: /hero');
    }
}