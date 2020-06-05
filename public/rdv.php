<?php
session_start();

$id_user=$_SESSION['id_user'];

require "../src/bootstrap.php";
//require "../views/dropdownlist.php";
require "../src/class/pet.php";
require "../manager/EventsManager.php";
require '../manager/PetManager.php';

$pet = new PetManager();
$pets = $pet->selectAllName($_SESSION['id_user']); 


$nom_p=$_GET['nom'];

$animal=new PetManager();
$animaux=$animal->selectOnePet($nom_p);
$nom_p= $animaux['nom_p'];

render('header',['title' => 'Rendez-vous']);?>

<div class="container">
    <style>
        .button_live{
            width: 206px;
            height: 43px;
            padding: 0px 5px;
            border-radius: 4px;
            background-color: #17a2b8;
            font-family: Roboto;
            font-size: 18px;
            color: #ffffff;
            text-decoration: none solid rgb(255, 255, 255);
            text-align: center;
        }
        .button_validate{
            float: right;
            width: 100px;
            height: 43px;
            padding: 0px 5px;
            border-radius: 4px;
            background-color: #17a2b8;
            font-family: Roboto;
            font-size: 18px;
            color: #ffffff;
            text-decoration: none solid rgb(255, 255, 255);
            text-align: center;

        }
        .navbarrdv{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        
        }
    </style>
<div class="container">
    <div class="navbarrdv">
            <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a>
            <a href="live.php"><input type="button" class="button_live" value="Accéder au live"input></a>
    </div>
</div>

<div class="container">
    <form action="../controller/add_event.php" method="post">

        <p><strong>Je souhaite prendre un rendez-vous avec:</strong></p>
        <?php foreach ($pets as $key=>$value){?>
                        <a class="dropdown-item" href="../public/rdv.php?nom=<?=implode($value) ?>" > <?= $value=implode($value) ?> </a>
            <?php } ?>
                <input id="nom_p" name="nom_p", value="<?=$nom_p;?>">
            <br>
            <label for="date"><strong>Date du rendez-vous:</strong></label>
                <input id="debut_rdv" type="date" required class="form-control" name="debut_rdv" value="">
            <br>
            <label for="start"><strong>Heure de début:</strong></label>
                <input id="start_h" type="time" required class="form-control" name="start_h" placeholder="HH:mm" value="">
                <br>
            
</div>
                <button class="button_validate" type="submit" id="envoi">Valider</button>
            <br>

    </form>
</div>




<?php render('footer'); ?>