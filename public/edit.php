<?php
require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Modifier ses informations']);

?>




<?php render('footer'); ?>