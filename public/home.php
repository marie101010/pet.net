<?php

require "../src/bootstrap.php";
session_start();

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Accueil']);?>

<style>
    .button_menu{
    width: 176px;
    height: 56px;
    padding: 0px 5px;
    border-radius: 4px;
    background-color: #17a2b8;
    font-family: Roboto;
    font-size: 16px;
    color: #ffffff;
    text-decoration: none solid rgb(255, 255, 255);
    text-align: center;
    display: block;
    margin: auto;
    margin-bottom: 32px;
}
</style>
<h1>Pet.net</h1>
<div class="container">
        <div class="column">
            <a href="boxcam.php"><input type="button"  class="button_menu" style= "margin-top:32px;" value="Camera"input></a>
            <a href="rdv.php"><input type="button" class="button_menu" value="Rendez-vous"input></a>
            <a href="geoloc.php"><input type="button" class="button_menu" value="Géolocalisation"input></a>
            <a href="petinfo.php"><input type="button" class="button_menu" value="Mes informations"input></a>
        </div>
    </div>
</div>

<?php render('footer'); ?>