<?php

require "../src/bootstrap.php";
session_start();

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Accueil']);?>

<h1> OUIIIIIIIIIIIIIIIIII </h1>


<?php render('footer'); ?>