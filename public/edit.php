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


    <div class="container">
        <h1>Modifier les informations</h1>
    </div>
</nav>
            <fieldset>
                <div class="container"> 
                    <form action="../controller/edit_pet.php" method="post">                      
                    <?php foreach ($pets as $key=>$value){?>
                        <a class="dropdown-item" href="../public/edit.php?nom=<?=implode($value) ?>" > <?= $value=implode($value) ?> </a>
                        <?php } ?>
                            <input id="nom_p" name="nom_p", value="<?=$nom_p;?>">
                        <br>
                        <label for="">Eau:</label>
                            <div><input type="text" name="eau"></div>
                        <label for="">Nourriture:</label>
                            <div><input type="text" name="nourriture"></div>
                        <label for="">Nombre de toilettage prévu:</label>
                            <input type="number" min="0" max="10" name="toilettage" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <label for="">Nombre de sortie par jour:</label>
                            <input type="number" min="0" max="10" name="frequence_sortie" id="" class="form-control" placeholder="Entre 0-10" aria-describedby="helpId">
                        <label for="">Soins particuliers:</label>
                            <input type="text" name="soins" id="" class="form-control" placeholder="Soins spécifiques" aria-describedby="helpId">
                        <label for="">Chambre<small> (selon disponibilité)</small></label>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <select class="custom-select" name= "box" id ="box">
                                    <option value="1">Chambre simple</option>
                                    <option value="2">Chambre de luxe<small>(+10€)</small></option>
                                    <option value="3">Duplex <small>(+15€)</small></option>
                                </select>
                            </li>
                        </ul> 

                        <a href="home.php"><input type="submit" class="button_menu" value="Modifier"input></a>

                    </div>
                </div>
            </fieldset>
        </form>


    <?php render('footer'); ?>



