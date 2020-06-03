<?php
session_start();

require "../src/bootstrap.php";
require "../views/dropdownlist.php";
//$pdo = get_pdo();
//$errors = [];

render('header',['title' => 'Ses informations']);?>


    <div class="container"> 
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
        <label for="">Chambre: <? echo '$box';?></label> 
        <br>
        <a href="edit.php"><input type="button" class="button_menu" value="Modifier ses informations"input></a>
    </div>




<?php render('footer'); ?>