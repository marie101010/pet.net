<?php

session_start();

use PetManager;


require ('../manager/PetManager.php');

$pet = new PetManager();
$pets=$pet->selectAllPet($_SESSION['id_u']);
