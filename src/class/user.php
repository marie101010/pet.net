<?php

namespace msb;

class User{

    private $_id_u;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_mdp;
    private $_tel;
    private $_created_by;
    private $_created_at;
    private $_update_by;
    private $_update_at;

    /**-----------------------------------------------
 *              GETTERS
 * ---------------------------------------------------
 */

    /**
     * Get the value of _id_u
     */ 
    public function get_id_u()
    {
        return $this->_id_u;
    }

    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Get the value of _email
     */ 
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Get the value of _mdp
     */ 
    public function get_mdp()
    {
        return $this->_mdp;
    }

    /**
     * Get the value of _tel
     */ 
    public function get_tel()
    {
        return $this->_tel;
    }

    /**
     * Get the value of _created_by
     */ 
    public function get_created_by()
    {
        return $this->_created_by;
    }

    /**
     * Get the value of _created_at
     */ 
    public function get_created_at()
    {
        return $this->_created_at;
    }

    /**
     * Get the value of _update_by
     */ 
    public function get_update_by()
    {
        return $this->_update_by;
    }

    /**
     * Get the value of _update_at
     */ 
    public function get_update_at()
    {
        return $this->_update_at;

    }

    /**-----------------------------------------------
 *              SETTERS
 * -----------------------------------------------
    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }
    

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Set the value of _email
     *
     * @return  self
     */ 
    public function set_email($_email)
    {
        $this->_email = $_email;

        return $this;
    }

    /**
     * Set the value of _mdp
     *
     * @return  self
     */ 
    public function set_mdp($_mdp)
    {
        $this->_mdp = $_mdp;

        return $this;
    }

    /**
     * Set the value of _tel
     *
     * @return  self
     */ 
    public function set_tel($_tel)
    {
        $this->_tel = $_tel;

        return $this;
    }
        /**
     * Set the value of _created_by
     *
     * @return  self
     */ 
    public function set_created_by($_created_by)
    {
        $this->_created_by = $_created_by;

        return $this;
    }

    /**
     * Set the value of _created_at
     *
     * @return  self
     */ 
    public function set_created_at($_created_at)
    {
        $this->_created_at = $_created_at;

        return $this;
    }

    /**
     * Set the value of _update_by
     *
     * @return  self
     */ 
    public function set_update_by($_update_by)
    {
        $this->_update_by = $_update_by;

        return $this;
    }

    /**
     * Set the value of _update_at
     *
     * @return  self
     */ 
    public function set_update_at($_update_at)
    {
        $this->_update_at = $_update_at;

        return $this;
    }
}