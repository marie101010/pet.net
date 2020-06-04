<?php

//session_start();

require ('../src/class/pet.php');
require ();

$nom_p=$_GET['nom'];

$animal=new PetManager();
$animaux=$animal->updatePet($eau, $nourriture, $fin_sejour, $toilettage, $frequence_sortie, $soins, $box, $update_by, $update_at);
