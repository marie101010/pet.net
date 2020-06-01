<?php

$email=htmlspecialchars($_POST['email']);
$mdp=htmlspecialchars($_POST['mdp']);

require ('../manager/UserManager.php');

$user = new UserManager();
$users=$user->getUser($email);
$email_db=$user['email'];
$mdp_db=$users['mdp'];
$id_udb=$users['id_u'];

    if($email && $mdp){


        if ($verif->rowcount() > 0){
        session_start();
        $_SESSION['id_u']=$id_udb;
        $_SESSION['email']=$email_db;
        $_SESSION['mdp']=$mdp_db;

    header('Location:../public/home.php');
        }
        
    }
