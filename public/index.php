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
        <form action="../controller/connexion.php" method="post">
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