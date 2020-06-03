<?php
session_start();

require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Rendez-vous: Live']);

?>
    <nav>
        <div class="container">
            <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a>
        </div>
    </nav>



<?php render('footer'); ?>