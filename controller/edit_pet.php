<?php

//session_start();

require ('../src/class/pet.php');
require ('../manager/PetManager.php');

$nom_p=$_POST['nom_p'];
$eau=htmlspecialchars($_POST['eau']);
$nourriture=htmlspecialchars($_POST['nourriture']);
$toilettage=htmlspecialchars($_POST['toilettage']);
$frequence_sortie=htmlspecialchars($_POST['frequence_sortie']);
$soins=htmlspecialchars($_POST['soins']);
$box=($_POST['box']);

$animal=new PetManager();
$animal2=$animal->selectOnePet($nom_p);
$id_pet=$animal2['id_pet'];


$animaux=$animal->updatePet($eau, $nourriture, $toilettage, $frequence_sortie, $soins, $box, $id_pet);

