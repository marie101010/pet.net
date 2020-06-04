<?php
session_start();

require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Rendez-vous: Live']);?>
    <nav>
        <div class="container">
            <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a>
        </div>
    </nav>
<div class="videolive" style="box-align: center;">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/qXo3NFqkaRM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<a href="home.php"><input type="button"  class="button_menu" style= "margin-top:32px; margin:auto; display:block;" value="Arrêter le live"input></a>

<?php render('footer'); ?>