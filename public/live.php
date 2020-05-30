<?php
require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Rendez-vous: Live']);

?>




<?php render('footer'); ?>