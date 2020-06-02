<?php

//namespace msb;
require "../src/bootstrap.php";


class PetManager{
    
    private $_pdo;

    public function __construct()
    {
        $this->set_pdo();
    }

    public function selectAllPet(){
        require "../src/class/pet.php";

            $req=$this-> _pdo->prepare('SELECT * FROM pet WHERE nom_p=:nom_p');
            $req->bindValue (':nom_p',$_nom_p);
            $req->execute();
            $data=$req->fetch(\PDO::FETCH_ASSOC);
                return $data;

    }

    public function updatePet($_eau, $_nourriture, $_fin_sejour, $_toilettage, $_frequence_sortie, $_soins, $_box){
        $req=$this->_pdo->prepare('UPDATE pet SET eau=?,nourriture=?, fin_sejour=?, toilettage=?, frequence_sortie=?, soins=?, box=?');
        $req->bindParam(1,$_eau);
        $req->bindParam(2, $_nourriture);
        $req->bindParam(3, $_fin_sejour);
        $req->bindParam(4, $_toilettage);
        $req->bindParam(5, $_frequence_sortie);
        $req->bindParam(6, $_soins);
        $req->bindParam(7, $_box);
        $req->execute();
        $data=$req->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function set_pdo(){
        $this->_pdo = new PDO('mysql:host=localhost;dbname=pet_net;charset=utf8','msb','stagiaire');
    return $this;
    }
}
