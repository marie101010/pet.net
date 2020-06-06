<?php

//namespace msb;

class UserManager{

    private $_pdo;

    public function __construct()
    {
        $this->set_pdo();
    }
    
/**
 * sélection un user via son id_user de la table user
 * 
 */
    public function selectOne($id_user){

        $req=$this-> _pdo->prepare('SELECT * FROM user WHERE id_user=:id_user');
        $req->bindValue (':id_user',$id_user);
        $req->execute();
        $data=$req->fetch(\PDO::FETCH_ASSOC);
            return $data;
    }

/**
 * connexion à la base de données
 * 
 */

public function set_pdo(){
    $this->_pdo = new \PDO('mysql:host=localhost;dbname=pet_net;charset=utf8','msb','stagiaire');
return $this;
}
}
