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


<?php render('footer'); ?>