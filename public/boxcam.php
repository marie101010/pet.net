<?php
session_start();

require "../src/bootstrap.php";
//require "../views/dropdownlist.php";
require '../manager/PetManager.php';
require "../src/class/pet.php";

$pet = new PetManager();
$pets = $pet->selectAllName($_SESSION['id_user']);

$nom_p=$_GET['nom'];

$animal=new PetManager();
$animaux=$animal->selectOnePet($nom_p);

render('header',['title' => 'Chambre']);?>

<style>
.button_nav{
    width: 150px;
    height: 43px;
    padding: 0px 5px;
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

<div class="container" border-top="3px">
    <div class="row">
        <div class="col-sm-6">
            <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a></div>
        <div class="col-sm-6">    
            <?php foreach ($pets as $key=>$value){?>
            <a class="dropdown-item" href="../public/boxcam.php?nom=<?=implode($value) ?>" > <?= $value=implode($value) ?>  </a>
            <?php } ?>
        </div>
    </div>
</div>


<div class="container">
    <h3 style="text-align: center;"> Chambre de <?= $animaux['nom_p'] ?></h3>
    <iframe width="560" height="315" class="video" src="https://www.youtube.com/embed/_5t2-_pPdH0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <div class="row" style="justify-content:space-around;">
        <a href="gardencam.php"><input type="button" class="button_nav" value="Voir le jardin"input></a>
        <a href="petinfo.php"><input type="button" class="button_nav" value="Ses informations"input></a>
        <br>
        <br>
        <br>
    </div>
</div>

<?php render('footer'); ?>