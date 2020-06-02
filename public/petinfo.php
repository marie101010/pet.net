<?php
require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Ses informations']);?>


<form>
<fieldset>
    <div class="container">
        <div class="form-group">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <select class="custom-select" id ="nom_p">
                    <option class="dropdown-item" value="1">Monsieur Moustache</option>
                    <option class="dropdown-item" value="2">Bosco</option>
                </select>
            </li>
        </ul>                        
            <label for="">Eau:</label>
                <div><input type="text" name="eau"></div>
            <label for="">Nourriture:</label>
                <div><input type="text" name="nourriture"></div>
                <label for="">Date de fin:</label>
                <input type="date" name="soins" id="" class="form-control" placeholder="fin_sejour" aria-describedby="helpId">
            <label for="">Nombre de toilettage prévu:</label>
                <input type="number" min="0" max="10" name="toilettage" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <label for="">Nombre de sortie par jour:</label>
                <input type="number" min="0" max="10" name="frequence_sortie" id="" class="form-control" placeholder="Entre 0-10" aria-describedby="helpId">
            <label for="">Soins particuliers:</label>
                <input type="text" name="soins" id="" class="form-control" placeholder="Soins spécifiques" aria-describedby="helpId">
            <label for="">Chambre</label>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <select class="custom-select" id ="box">
                        <option class="dropdown-item" value="1">Chambre simple</option>
                        <option class="dropdown-item" value="2">Chambre de luxe<small>(+10€)</small></option>
                        <option class="dropdown-item" value="3">Duplex <small>(+15€)</small></option>
                    </select>
                </li>
            </ul> 

            <a href="edit.php"><input type="button" class="button_menu" value="Modfier ses informations"input></a>

        </div>
    </div>
</fieldset>
</form>



<?php render('footer'); ?>