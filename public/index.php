<?php

/**
 * @author Marie MSB
 * Projet Pet.net
 * Début 25 Mai 2020
 */
require "../src/bootstrap.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- couleur orange/violet-->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/united/bootstrap.min.css" rel="stylesheet" integrity="sha384-bzjLLgZOhgXbSvSc5A9LWWo/mSIYf7U7nFbmYIB2Lgmuiw3vKGJuu+abKoaTx4W6" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <title><?= isset($title) ? h($title): 'Pet.net'; ?></title>
</head>
<body>
    <nav>
        <div class="container">        
            <div class="row">
                <img src="../public/Pictures/logoO.png" padding-left="11px" width="64px" height="69px" alt="logo pattes">
                <h1>Pet.net</h1>
            </div>
        </div>
    </nav>
    <style>
        .button_co{
            align-self:center;
            width: 172px;
            height: 41px;
            padding: 0px 11px;
            border-radius: 4px;
            background-color: #17a2b8;
            font-family: Roboto;
            font-size: 18px;
            color: #ffffff;
            text-decoration: none solid rgb(255, 255, 255);
            text-align: center;
            margin: auto;
            display: block;
        }
    </style>

        <div class="container">  
        <form action="ajax.php" method="post">
            <div class="column">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input id="email" type="email" required class="form-control" name="email">
                        <?php if (isset($errors['email'])): ?>
                            <small class="form-text text-muted"><?= $errors['name']; ?></small>
                        <?php endif ?>
                    </div>    
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input id="mdp" type="password" required class="form-control" name="mdp">
                        <?php if (isset($errors['mdp'])): ?>
                            <small class="form-text text-muted"><?= $errors['mdp']; ?></small>
                        <?php endif ?>
                    </div>    
                </div>
            </div>
                <div class="col-sm-6">
                    <button class="button_co" type="submit" id="envoi">Se connecter</button>
                </div>           
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $("#envoi").click(function(){
            var email = $("#email").val();
            var mdp = $("#mdp").val();
            $.ajax({
                // La ressource ciblée
                url : 'ajax.php', 
                // Le type de la requête HTTP.
                type : 'POST',
                // La donnée a envoyer
                data : 'email='+email+'&mdp='+mdp, //+ password, 
                // en cas de succés code_html contient le json renvoyé
                success: function(response)
                {
                    var jsonData = JSON.parse(response);
                    
                    // user is logged in successfully in the back-end
                    // let's redirect
                    if (jsonData.success == "1")
                    {
                        location.href = 'home.php';
                    }
                    else if (jsonData.success == "0")
                    {
                        alert('Identifiants invalides!');
                    }
                    else{
                        alert('erreur du back-end');
                    }
                },
            });
        }); 
    </script>