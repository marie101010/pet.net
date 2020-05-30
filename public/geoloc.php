<?php
require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Où est-il?']);

?>




<?php render('footer'); ?>