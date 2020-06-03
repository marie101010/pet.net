<?php

require '../manager/PetManager.php';

$pet = new PetManager();
$pets = $pet->selectAllName($_SESSION['id_user']); ?>


<a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a>

    <?php foreach ($pets as $key=>$value){?>
<a class="dropdown-item" > <?= $value=implode($value) ?> </a>
<?php }
