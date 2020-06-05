<?php
session_start();

require "../src/bootstrap.php";


render('header',['title' => 'Jardin']);?>

<style>
.button_nav{
    width: 175px;
    height: 43px;
    padding: 0px 5px;    
    display: block;
    margin: auto;
    border-radius: 4px;
    background-color: #17a2b8;
    font-size: 18px;
    color: #ffffff;
    text-decoration: none solid rgb(255, 255, 255);
    text-align: center;
    display: block;
    margin: auto;


}
.video{
    margin: auto; 
    display: block;
}
</style>

<nav>
<div class="container" border-top="3px">
    <div class="row">
        <div class="col-sm-6">
            <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a></div>

    </div>
</nav>
    
<div class="container">
    <h3 style="text-align: center;">Jardin</h3>
    <iframe width="560" height="315" class="video" src="https://www.youtube.com/embed/J11uu8L8FTY?start=8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="row" style="justify-content:space-around;">
        <a href="boxcam.php"><input type="button" class="button_nav" value="Retour à la chambre"input></a>
        <a href="home.php"><input type="button" class="button_nav" value="Retour à l'accueil"input></a>
    </div>
</div>

<?php render('footer'); ?>