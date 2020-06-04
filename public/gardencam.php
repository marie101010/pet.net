<?php
session_start();

require "../src/bootstrap.php";


render('header',['title' => 'Jardin']);

?>

<nav>
    <div class="container">
        <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a>
    </div>
</nav>
    
<iframe width="560" height="315" src="https://www.youtube.com/embed/J11uu8L8FTY?start=8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    <a href="boxcam.php"><input type="button" class="button_nav" value="Retour à la chambre"input></a>
    <a href="home.php"><input type="button" class="button_nav" value="Retour à l'accueil"input></a>


<?php render('footer'); ?>