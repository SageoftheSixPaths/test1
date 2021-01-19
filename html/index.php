<?php
switch(trim($_SERVER['REQUEST_URI'], '/')){
    case '':
        require 'app/views/index.view.php';
        break;
    case 'hero':
        require 'app/controllers/heroes.controller.php';
        if($_POST){
            Heroes::store('heroes', ['name' => $_POST['heroName'], 'class' => $_POST['heroClass'], 'rank' => $_POST['heroRank']]);
        }
        Heroes::getHeroes();
        break;
}