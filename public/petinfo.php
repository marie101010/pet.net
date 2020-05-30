<?php
require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Ses informations']);

?>




<?php render('footer'); ?>