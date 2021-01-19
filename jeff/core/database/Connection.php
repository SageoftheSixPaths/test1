<?php
class Connection{
    public static function create($config){
        try{
            return new PDO($config['connection'].';dbname='.$config['name'], $config['user'], $config['password']);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}