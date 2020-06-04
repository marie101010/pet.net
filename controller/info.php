<?php

session_start();

use PetManager;


require ('../manager/PetManager.php');

$pet = new PetManager();
$pets=$pet->selectAllPets($_SESSION['id_user']);
