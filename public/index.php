<?php

/**
 * @author Marie MSB
 * Projet Pet.net
 * Début 25 Mai 2020
 */
require "../src/bootstrap.php";

$pdo = get_pdo();
$errors = [];

render('header',['title' => 'Accueil']);
?>
    <style>
        .button_co{
    width: 172px;
    height: 41px;
    padding: 0px 11px;
    border-radius: 4px;
    background-color: #17a2b8;
    font-family: Roboto;
    font-size: 16px;
    color: #ffffff;
    text-decoration: none solid rgb(255, 255, 255);
    text-align: center;
}
    </style>
        <h1>Pet.net</h1>
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
                    <button class="button_co" type="submit">Me connecter</button>
                </div>           
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $("#envoi").click(function(){
            var email = $("#email").val();
            var mdp = $("#password").val();
            $.ajax({
                // La ressource ciblée
                url : 'ajax.php', 
                // Le type de la requête HTTP.
                type : 'POST',
                // La donnée a envoyer
                data : 'email='+email+'&keypass='+mdp, //+ password, 
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