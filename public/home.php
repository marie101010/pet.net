<?php
session_start();
require "../src/bootstrap.php";



$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Accueil']); ?>


<style>
    .button_menu{
    width: 176px;
    height: 56px;
    padding: 0px 5px;
    border-radius: 4px;
    background-color: #17a2b8;
    font-family: Roboto;
    font-size: 18px;
    color: #ffffff;
    text-decoration: none solid rgb(255, 255, 255);
    text-align: center;
    display: block;
    margin: auto;
    margin-bottom: 32px;

}
.center{
    justify-content: center;
    text-align: center;
    float: center;
    margin: auto;
    display: flex;
}
.button_menu:hover{
    text-decoration: none;
    color: #138496;
}
</style>
        
<div class="container">
    <div class="row">
        <div class="col-sm-6" display:flex;>
            <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a></div>
            <h1 class="center">Pet.net</h1>
        </div>
    </div>
</div>

        <div class="succes">
            <?php if (isset($_GET['success'])) : ?>
            <div class="container">
                <div class="alert alert-success">
                    Le rendez-vous a bien été enregistré.
                </div>
        </div>
            <?php endif; ?>

<div class="container">
        <div class="column">
            
            <a href="boxcam.php"><input type="button"  class="button_menu" style= "margin-top:32px;" value="Camera"input></a>
            <a href="rdv.php"><input type="button" class="button_menu" value="Rendez-vous"input></a>
            <a href="geoloc.php"><input type="button" class="button_menu" value="Géolocalisation"input></a>
            <a href="petinfo.php"><input type="button" class="button_menu" value="Mes animaux"input></a>
        </div>
    </div>
</div>

<?php render('footer'); ?>