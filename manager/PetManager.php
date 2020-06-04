<?php

//namespace msb;
//require "../src/bootstrap.php";


class PetManager{
    
    private $_pdo;

    public function __construct()
    {
        $this->set_pdo();
    }

    public function selectOnePet($nom_p){

            $req=$this-> _pdo->prepare('SELECT * FROM pet WHERE nom_p=:nom_p');
            $req->bindValue (':nom_p',$nom_p);
            $req->execute();
            $data=$req->fetch(\PDO::FETCH_ASSOC);
                return $data;

    }

    public function selectAllPets($id_user){

        $req=$this-> _pdo->prepare('SELECT * FROM pet WHERE id_user=:id_user ');//clef étrangère
        $req->bindValue (':id_user',$id_user);
        $req->execute();
        $data=$req->fetch(\PDO::FETCH_ASSOC);
            return $data;
}

    public function selectAllName($id_user){

        $req=$this-> _pdo->prepare('SELECT nom_p FROM pet WHERE id_user=?');//clef étrangère
        $req->bindParam (1, $id_user);
        $req->execute();
        $data=$req->fetchAll(PDO::FETCH_ASSOC);
            return $data;
}


    public function updatePet($eau, $nourriture, $fin_sejour, $toilettage, $frequence_sortie, $soins, $box){
        
        $req=$this->_pdo->prepare('UPDATE pet SET eau=?,nourriture=?, fin_sejour=?, toilettage=?, frequence_sortie=?, soins=?, box=?');
        $req->bindParam(1, $eau);
        $req->bindParam(2, $nourriture);
        $req->bindParam(3, $fin_sejour);
        $req->bindParam(4, $toilettage);
        $req->bindParam(5, $frequence_sortie);
        $req->bindParam(6, $soins);
        $req->bindParam(7, $box);
        $req->execute();
        $data=$req->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function set_pdo(){
        $this->_pdo = new PDO('mysql:host=localhost;dbname=pet_net;charset=utf8','msb','stagiaire');
    return $this;
    }
}
