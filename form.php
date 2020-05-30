<?php

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Pet_Accueil</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <form>
            <fieldset>
                <legend>Connexion:</legend> <!-- TO DO: A retirer en front-->
                <div class="container">
                    <div class="form-group">
                    <label for="">E-mail:</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="ex: abc@def.com" aria-describedby="helpId">
                        <label for="">Mot de passe:</label>
                        <input type="password" name="mdp" id="" class="form-control" placeholder="Mot de passe" aria-describedby="helpId">
                        <input type="submit"></input>
                        </div>
                </fieldset>
            </form>
        </div>
        <div class="container">
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

                        <input type="submit"></input>
                    </div>
                </div>
            </fieldset>
        </form>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>