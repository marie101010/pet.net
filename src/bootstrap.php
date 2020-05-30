<?php
require '../autoload.php';

function get_pdo(){
    return new \PDO('mysql:host=localhost;dbname=pet_net;charset=utf8','msb','stagiaire');
}

function dd (...$vars){
    foreach($vars as $var){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}

function render ($view, $parameters =[]){
    extract($parameters);
    include "../views/{$view}.php";
}

function h(?string $value){
    if($value === null){
        return '';
    }
    return htmlentities($value);
}