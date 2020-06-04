<?php
session_start();

require "../src/bootstrap.php";
require "../views/dropdownlist.php";


render('header',['title' => 'Chambre']);
?>

<h1> Chambre de <?php  echo 'nom_p' ?></h1>

<div class="container">
    <div class="row">
        <a href="gardencam.php"><input type="button" class="button_nav" value="Voir le jardin"input></a>
        <a href="petinfo.php"><input type="button" class="button_nav" value="Ses informations"input></a>
    </div>
</div>

<?php render('footer'); ?>