<?php
session_start();

$id_user=$_SESSION['id_user'];

require "../src/bootstrap.php";
require "../views/dropdownlist.php";
require "../src/class/pet.php";

$nom_p=$_GET['nom'];

$animal=new PetManager();
$animaux=$animal->selectOnePet($nom_p);

//$Oneanimal= new Pet($animaux);

render('header',['title' => 'Ses informations']);?>


    <div class="container"> 
        <br>
        <label for=""><b>Eau:</b> <?="". $animaux['eau']; ?></label>
        <br>
        <label for=""><b>Nourriture:</b> <?="". $animaux['nourriture'];?></label>
        <br>
        <label for=""><b>Date de fin:</b> <?="". $animaux['fin_sejour'];?></label>
        <br>
        <label for=""><b>Nombre de toilettage prévu:</b> <?="". $animaux['toilettage'];?></label>
        <br>
        <label for=""><b>Nombre de sortie:</b> <?="". $animaux['frequence_sortie'] ;?> par jour</label>
        <br>
        <label for=""><b>Soins particuliers: </b><?="". $animaux['soins'];?></label>
        <br>
        <label for=""><b>Chambre: </b><?="". $animaux['box'];?></label> 
        <br>
        <a href="edit.php"><input type="button" class="button_menu" value="Modifier ses informations"input></a>
    </div>
    <br>
    <div class="container">

    </div>




<?php render('footer'); ?>