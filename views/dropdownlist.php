<?php

require '../manager/PetManager.php';

$pet = new PetManager();
$pets = $pet->selectAllName($_SESSION['id_user']); ?>

<div class="container" border-top="3px">
    <div class="row">
        <div class="col-sm-6">
            <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a></div>
        <div class="col-sm-6">    
            <?php foreach ($pets as $key=>$value){?>
            <a class="dropdown-item" href="../public/petinfo.php?nom=<?=implode($value) ?>" > <?= $value=implode($value) ?> </a>
            <?php } ?>
        </div>
    </div>
</div>
