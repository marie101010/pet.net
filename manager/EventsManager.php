<?php

//namespace msb;

class EventsManager{

    private $_pdo;

    public function __construct()
    {
        $this->set_pdo();
    }

    public function selectAllPet(){
        require "../src/class/pet.php";

        $req=$this-> _pdo->prepare('SELECT * FROM events WHERE id_e=:id_e');
        $req->bindValue (':id_e',$_id_e);
        $req->execute();
        $data=$req->fetch(\PDO::FETCH_ASSOC);
            return $data;

    }

    public function addEvent($_fin_rdv, $_id_p, $_debut_rdv, $_start){
        $req=$this->_pdo->prepare('UPDATE events SET fin_rdv=?, id_pet=?, debut_rdv=?, start=?');
        $req->bindParam(1, $_fin_rdv);
        $req->bindParam(2, $_id_p);
        $req->bindParam(3, $_debut_rdv);
        $req->bindParam(4, $_start);
        $req->execute();
        $data=$req->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function set_pdo(){
        $this->_pdo = new PDO('mysql:host=localhost;dbname=pet_net;charset=utf8','msb','stagiaire');
    return $this;
    }
}