<?php
session_start();

$id_user=$_SESSION['id_user'];

require "../src/bootstrap.php";
//require "../views/dropdownlist.php";
require "../src/class/events.php";
require "../manager/PetManager.php";

$pet = new PetManager();
$pets = $pet->selectAllName($_SESSION['id_user']);

$nom_p=$_GET['nom'];

$animal=new PetManager();
$animaux=$animal->selectOnePet($nom_p);
$nom_p= $animaux['nom_p'];

render('header',['title' => 'Modifier ses informations']);?>

<style>
    .button_menu{
    width: 176px;
    height: 56px;
    padding: 0px 5px;
    border-radius: 4px;
    background-color: #17a2b8;
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
            <a href="../public/home.php"><img src="../public/Pictures/logoO.png" width="64px" height="69px" alt="logo pattes"></a></div></div></div>
        <fieldset>
            <div class="container"> 
                <div class="column">
                    <div class="alert alert-dismissible alert-warning">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4 class="alert-heading">Attention!</h4>
                        <p class="mb-0">Des coûts supplémentaires peuvent s'appliquer.<a href="#" class="alert-link"> Consulter la grille tarifaire.</a></p>
                        </div>
                    <form action="../controller/edit_pet.php" method="post">                      
                    <label for="">Modifier les informations de:</label>
                    <div class="col-sm-6">  
                    <div class="btn btn-info">
                        <?php foreach ($pets as $key=>$value){?>
                        <a class="dropdown-item" href="../public/edit.php?nom=<?=implode($value) ?>" > <?= $value=implode($value) ?> </a>
                        <?php } ?>
                    </div>
                        <br>
                            <input id="nom_p" name="nom_p", value="<?=$nom_p;?>" placeholder="Choisir au dessus l'animal" readonly>
                        <br>
                        <br>
                        <label for="">Eau:</label>
                            <div><input type="text" name="eau" required></div>
                        <label for="">Nourriture:</label>
                            <div><input type="text" name="nourriture" required></div>
                        <label for="">Nombre de toilettage prévu:</label>
                            <input type="number" min="0" max="10" required name="toilettage" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <label for="">Nombre de sortie par jour:</label>
                            <input type="number" min="0" max="10" required name="frequence_sortie" id="" class="form-control" placeholder="Entre 0-10" aria-describedby="helpId">
                        <label for="">Soins particuliers:</label>
                            <input type="text" name="soins" id="" required class="form-control" placeholder="Soins spécifiques" aria-describedby="helpId">
                        <label for="">Chambre<small> (selon disponibilité)</small></label>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <select class="custom-select" name= "box" id ="box">
                                    <option value="Chambre simple">Chambre simple</option>
                                    <option value="Chambre de luxe">Chambre de luxe<small>(+10€)</small></option>
                                    <option value="Duplex">Duplex <small>(+15€)</small></option>
                                </select>
                            </li>
                        </ul> 
                        <br>
                        <a href="home.php"><input type="submit" class="button_menu" value="Modifier"input></a>
                        <br>
                        <br>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>


    <?php render('footer'); ?>



