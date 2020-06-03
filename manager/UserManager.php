<?php

//namespace msb;

class UserManager{

    private $_pdo;

    public function __construct()
    {
        $this->set_pdo();
    }
    
    public function selectOne($id_u){

        $req=$this-> _pdo->prepare('SELECT * FROM user WHERE id_u=:id_u');
        $req->bindValue (':id_u',$id_u);
        $req->execute();
        $data=$req->fetch(\PDO::FETCH_ASSOC);
            return $data;
    }

public function set_pdo(){
    $this->_pdo = new \PDO('mysql:host=localhost;dbname=pet_net;charset=utf8','msb','stagiaire');
return $this;
}
}
