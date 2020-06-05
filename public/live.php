<?php
session_start();

require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Rendez-vous: Live']);?>

<style>
    .video{
    margin: auto; 
    display: block;
}
</style>
    
    <nav>
        <div class="container">
            <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a>
        </div>
    </nav>
<div> 
    <iframe width="560" height="315" class="video" src="https://www.youtube.com/embed/qXo3NFqkaRM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<a href="home.php"> <button type="button" class="btn btn-outline-danger" style= "margin-top:32px; margin:auto; display:block;">Arrêter le live</button>
</a>

<?php render('footer'); ?>