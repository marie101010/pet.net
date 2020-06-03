<?php
session_start();

require "../src/bootstrap.php";
require "../views/dropdownlist.php";


render('header',['title' => 'Chambre']);
?>

<h1> Chambre de <?php  echo ($_SESSION['nom_p'] ?></h1>

<?php render('footer'); ?>