<?php
session_start();

$id_user=$_SESSION['id_user'];

require "../src/bootstrap.php";
require "../src/class/pet.php";
require '../manager/PetManager.php';

$pet = new PetManager();
$pets = $pet->selectAllName($_SESSION['id_user']);


$nom_p=$_GET['nom'];

$animal=new PetManager();
$animaux=$animal->selectOnePet($nom_p);



//$Oneanimal= new Pet($animaux);

render('header',['title' => 'Ses informations']);?>


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
    float: right;
    justify-content: flex-end;
}

</style>

<div class="container" style="margin-top:10px;">
    <div class="row">
        <div class="col-sm-6">
            <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a></div>
        <div class="col-sm-6">  
            <div class="btn btn-info dropdown-toggle">Vos animaux
                <?php foreach ($pets as $key=>$value){?>
                <a class="dropdown-item" button="btn btn-info dropdown-toggle" href="../public/petinfo.php?nom=<?=implode($value) ?>" > <?= $value=implode($value) ?> </a>
                <?php } ?>
            </div>
    </div>
    </div>

    <div class="alert alert-success" role="alert" style="width: fit-content;">
        <p>Dernière visite faite à 14h16 par Roger:</p>
        <hr>
        <p><?="". $animaux['nom_p'];?> était en train de dormir dans sa couverture. 
    </div>
</div>

    <div class="Succes">
            <?php if (isset($_GET['success'])) : ?>
            <div class="container">
                <div class="alert alert-success">
                    Les informations ont été envoyées à notre équipe soignante.
                </div>
            </div>
            <?php endif; ?> 


<div class="container"> 
        <label for=""><b>Nom:</b> <?="". $animaux['nom_p'];?>
    <br>
        <label for=""><b>Eau:</b> <?="". $animaux['eau']; ?></label>
    <br>
        <label for=""><b>Nourriture:</b> <?="". $animaux['nourriture'];?></label>
    <br>
        <label for=""><b>Nombre de toilettage prévu:</b> <?="". $animaux['toilettage'];?></label>
    <br>
        <label for=""><b>Nombre de sortie par jour:</b> <?="". $animaux['frequence_sortie'] ;?></label>
    <br>
        <label for=""><b>Soins particuliers: </b><?="". $animaux['soins'];?></label>
    <br>
        <label for=""><b>Chambre: </b><?="". $animaux['box'];?></label> 
    <br>
    <a href="edit.php"><input type="button" class="button_menu" value="Modifier ses informations"input></a>
</div>
<br>





<?php render('footer'); ?>