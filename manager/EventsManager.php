<?php

//Requêtes concernant les événements (table events).

class EventsManager{

    private $_pdo;

    public function __construct()
    {
        $this->set_pdo();
    }


/**
 * récupère un event
 *  */
    public function selectEvent($id_e){

        $req=$this-> _pdo->prepare('SELECT * FROM events WHERE id_e=:id_e');
        $req->bindValue (':id_e',$id_e);
        $req->execute();
        $data=$req->fetch(\PDO::FETCH_ASSOC);
            return $data;

    }
/**
 * Ajoute un event. 
 * Problèmes avec phpmyadmin: 
 *      -Quand ajout des champs created_by, created_at, updated_by et update_at, fonctionne une fois sur deux.
 *      -phpmyadmin remet en 'NULL' ces champs dans la table.
 * TODO: à corriger
*/     
    public function addEvent($nom_p, $debut_rdv, $start_h, $fin_rdv){
        $req=$this->_pdo->prepare('INSERT INTO events (nom_p, debut_rdv, start_h, fin_rdv) VALUES (?, ?, ?, ?)');
        $req->bindParam(1, $nom_p);
        $req->bindParam(2, $debut_rdv);
        $req->bindParam(3, $start_h);
        $req->bindParam(4, $fin_rdv);
        //$req->bindParam(5, 'user');
        $data= $req->execute();
/*         $data=$req->fetch(PDO::FETCH_ASSOC);
        return $data; */
        if (!$data) {
            echo "\nPDO::errorInfo():\n";
            print_r($req->errorInfo());}
    }

/**
 * Fonction pour ajouter automatiquement 15 min pour définir la fin du rdv
 */
    public function finRdv($start_h){
        $minutes_to_add=15;
        $time=new DateTime($start_h);
        $time->add(new DateInterval('PT'.$minutes_to_add.'M'));
        $fin_rdv=$time->format('H:i');
    return $fin_rdv;
    }

/**
 * Connexion à la base de données
 */

    public function set_pdo(){
        $this->_pdo = new PDO('mysql:host=localhost;dbname=pet_net;charset=utf8','msb','stagiaire');
    return $this;
    }
}
