<?php

namespace msb;

class UserManager{

    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function connexion($mdp, $email){

$verif = $connexion->prepare('SELECT * FROM user WHERE email=? AND mdp=?');
$verif->bindParam(1, $email);
$verif->bindParam(2, $mdp);
$verif->execute([$email]);
$repverif = $verif->fetch();
}