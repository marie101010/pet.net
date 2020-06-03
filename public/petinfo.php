<?php
require "../src/bootstrap.php";

//$pdo = get_pdo();
//$errors = [];

render('header',['title' => 'Ses informations']);?>


<form>
<fieldset>
    <div class="container">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <select class="custom-select" id ="nom_p">
                    <option class="dropdown-item" value="id_pet"><? echo '$nom_p' ?></option>
                    <option class="dropdown-item" value="id_pet">Bosco</option>
                </select>
            </li>
        </ul>      
            <br>
            <label for="">Eau: <? echo '$eau';?></label>
            <br>
            <label for="">Nourriture: <? echo '$nourriture';?></label>
            <br>
            <label for="">Date de fin: <? echo '$fin_sejour';?></label>
            <br>
            <label for="">Nombre de toilettage prévu: <? echo '$toilettage';?></label>
            <br>
            <label for="">Nombre de sortie par jour: <? echo '$frequence_sortie';?> par jour</label>
            <br>
            <label for="">Soins particuliers: <? echo '$soins';?></label>
            <br>
            <label for="">Chambre <? echo '$box';?></label> 
            <br>
            <a href="edit.php"><input type="button" class="button_menu" value="Modfier ses informations"input></a>

        </div>
    </div>
</fieldset>
</form>



<?php render('footer'); ?>