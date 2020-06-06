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

    public function addEvent($nom_p, $debut_rdv, $start_h, $fin_rdv){
        $req=$this->_pdo->prepare('INSERT INTO events (nom_p, debut_rdv, start_h, fin_rdv, created_by, created_at, update_by, update_at) VALUES (?, ?, ?, ?,?, NOW(), ?, NOW())');
        //$req->bindParam(1, $fin_rdv);
        $req->bindParam(1, $nom_p);
        $req->bindParam(2, $debut_rdv);
        $req->bindParam(3, $start_h);
        $req->bindParam(4, $fin_rdv);
        $req->bindParam(5, 'user');
        $req->bindParam(4, $created_at);
        $req->bindParam(4, $update_by);
        $req->bindParam(4, $update_at);

        $data= $req->execute();
/*         $data=$req->fetch(PDO::FETCH_ASSOC);
        return $data; */
        if (!$data) {
            echo "\nPDO::errorInfo():\n";
            print_r($req->errorInfo());}
    }

    
    public function finRdv($start_h){
        $minutes_to_add=15;
        $time=new DateTime($start_h);
        $time->add(new DateInterval('PT'.$minutes_to_add.'M'));
        $fin_rdv=$time->format('H:i');
    return $fin_rdv;
    }

    public function set_pdo(){
        $this->_pdo = new PDO('mysql:host=localhost;dbname=pet_net;charset=utf8','msb','stagiaire');
    return $this;
    }
}
/* *    * Crée un évènement au niveau de la base de données
* @param Event $event
* @return bool

public function create (Event $event){
   $statement = $this->pdo->prepare('INSERT INTO events (name, description, start, end) VALUES (?, ?, ?, ?)');
   return $statement->execute([
       $event->getName(),
       $event->getDescription(),
       $event->getStart()->format('Y-m-d H:i:s'),
       $event->getEnd()->format('Y-m-d H:i:s'),
   ]);
*/