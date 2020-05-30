<?php
require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Accueil']);

?>




<?php render('footer'); ?>