<?php

if (isset($_POST['email']) && isset($_POST['mdp'])) {

    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
try {
    // Note: certains serveurs n'acceptent pas localhost
    $bdd = new PDO('mysql:host=localhost;dbname=pet_net;charset=utf8', 'msb', 'stagiaire');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
catch(Exception $e){
die('Erreur1 : '.$e->getMessage());
    }
    $req = $bdd->prepare('SELECT * FROM user WHERE email=:email AND mdp=:mdp');
    $req->bindParam(':email', $email);
    $req->bindParam(':mdp', $mdp);
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_ASSOC);

if(count($data) > 0){
    session_start();
    $_SESSION['id_u']=$data[0]['id_u'];
    $_SESSION['email']=$data[0]['email'];
    // ici on peut ouvrir la session et définir les infos
    echo json_encode(array('success' => 1));

}
else {
    echo json_encode(array('success' => 0));
}

} else {
    echo json_encode(array('success' => 0));
}