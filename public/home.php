<?php
session_start();
require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Accueil']);

?>

<h1> OUIIIIIIIIIIIIIIIIII </h1>


<?php render('footer'); ?>