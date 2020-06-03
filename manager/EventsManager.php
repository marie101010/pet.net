<?php

//namespace msb;

class EventsManager{

    private $_pdo;

    public function __construct()
    {
        $this->set_pdo();
    }

    public function selectEvent($id_e){

        $req=$this-> _pdo->prepare('SELECT * FROM events WHERE id_e=:id_e');
        $req->bindValue (':id_e',$id_e);
        $req->execute();
        $data=$req->fetch(\PDO::FETCH_ASSOC);
            return $data;

    }

    public function addEvent($fin_rdv, $id_p, $debut_rdv, $start){
        $req=$this->_pdo->prepare('UPDATE events SET fin_rdv=?, id_pet=?, debut_rdv=?, start=?');
        $req->bindParam(1, $fin_rdv);
        $req->bindParam(2, $id_p);
        $req->bindParam(3, $debut_rdv);
        $req->bindParam(4, $start);
        $req->execute();
        $data=$req->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function set_pdo(){
        $this->_pdo = new PDO('mysql:host=localhost;dbname=pet_net;charset=utf8','msb','stagiaire');
    return $this;
    }
}