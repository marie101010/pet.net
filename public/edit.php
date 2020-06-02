<?php
require "../src/bootstrap.php";


$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Modifier ses informations']);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- couleur orange/violet-->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/united/bootstrap.min.css" rel="stylesheet" integrity="sha384-bzjLLgZOhgXbSvSc5A9LWWo/mSIYf7U7nFbmYIB2Lgmuiw3vKGJuu+abKoaTx4W6" crossorigin="anonymous">
    <link rel="stylesheet" href="./pet_net/public/css/style.css">
    <title><?= isset($title) ? h($title): 'Pet.net!'; ?></title>
</head>
<body>

<h1>Modifier les informations</h1>

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
                        <label for="">Chambre<small> selon disponibilité</small></label>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <select class="custom-select" id ="box">
                                    <option class="dropdown-item" value="1">Chambre simple</option>
                                    <option class="dropdown-item" value="2">Chambre de luxe<small>(+10€)</small></option>
                                    <option class="dropdown-item" value="3">Duplex <small>(+15€)</small></option>
                                </select>
                            </li>
                        </ul> 

                        <a href="home.php"><input type="button" class="button_menu" value="Modifier"input></a>

                    </div>
                </div>
            </fieldset>
        </form>


    <?php render('footer'); ?>



