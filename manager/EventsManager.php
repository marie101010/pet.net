<?php

namespace msb;

class EventsManager{

    private $_pdo;
    
    public function __construct()
    {
        $this->set_pdo();
    }



    public function set_pdo(){
        $this->_pdo = new \PDO('mysql:host=localhost;dbname=pet_net;charset=utf8','msb','stagiaire');
    return $this;
}

//$req=$this-> _co->prepare('SELECT * FROM agents WHERE pseudo_a=:pseudo_a');
}