<?php
require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Rendez-vous']);

?>




<?php render('footer'); ?>