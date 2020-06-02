<?php

//namespace msb;

class Pet{
    
    private $_id_p;
    private $_id_u;
    private $_nom_p;
    private $_date_p;
    private $_puce;
    private $_soins;
    private $_sterelise;
    private $_nourriture;
    private $_sexe;
    private $_vaccins;
    private $_toilettage;
    private $_eau;
    private $_box;
    private $_date_sejour;
    private $_fin_sejour;
    private $_remarques;
    private $_frequence_sortie;
    private $_created_by;
    private $_created_at;
    private $_update_by;
    private $_update_at;


/**-----------------------------------------------
 *              GETTERS
 * -----------------------------------------------
 */

    /**
     * Get the value of _id_p
     */ 
    public function get_id_p()
    {
        return $this->_id_p;
    }
    

    /**
     * Get the value of _id_u
     */ 
    public function get_id_u()
    {
        return $this->_id_u;
    }

    /**
     * Get the value of _nom_p
     */ 
    public function get_nom_p()
    {
        return $this->_nom_p;
    }

    /**
     * Get the value of _date_p
     */ 
    public function get_date_p()
    {
        return $this->_date_p;
    }

    /**
     * Get the value of _puce
     */ 
    public function get_puce()
    {
        return $this->_puce;
    }

    /**
     * Get the value of _soins
     */ 
    public function get_soins()
    {
        return $this->_soins;
    }

    /**
     * Get the value of _sterelise
     */ 
    public function get_sterelise()
    {
        return $this->_sterelise;
    }

    /**
     * Get the value of _nourriture
     */ 
    public function get_nourriture()
    {
        return $this->_nourriture;
    }

    /**
     * Get the value of _sexe
     */ 
    public function get_sexe()
    {
        return $this->_sexe;
    }

    /**
     * Get the value of _vaccins
     */ 
    public function get_vaccins()
    {
        return $this->_vaccins;
    }

    /**
     * Get the value of _toilettage
     */ 
    public function get_toilettage()
    {
        return $this->_toilettage;
    }

    /**
     * Get the value of _eau
     */ 
    public function get_eau()
    {
        return $this->_eau;
    }

    /**
     * Get the value of _box
     */ 
    public function get_box()
    {
        return $this->_box;
    }

    /**
     * Get the value of _date_sejour
     */ 
    public function get_date_sejour()
    {
        return $this->_date_sejour;
    }

    /**
     * Get the value of _fin_sejour
     */ 
    public function get_fin_sejour()
    {
        return $this->_fin_sejour;
    }

    /**
     * Get the value of _remarques
     */ 
    public function get_remarques()
    {
        return $this->_remarques;
    }

    /**
     * Get the value of _frequence_sortie
     */ 
    public function get_frequence_sortie()
    {
        return $this->_frequence_sortie;
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
     * Set the value of _nom_p
     *
     * @return  self
     */ 
    public function set_nom_p($_nom_p)
    {
        $this->_nom_p = $_nom_p;

        return $this;
    }

    /**
     * Set the value of _date_p
     *
     * @return  self
     */ 
    public function set_date_p($_date_p)
    {
        $this->_date_p = $_date_p;

        return $this;
    }

    /**
     * Set the value of _puce
     *
     * @return  self
     */ 
    public function set_puce($_puce)
    {
        $this->_puce = $_puce;

        return $this;
    }

    /**
     * Set the value of _soins
     *
     * @return  self
     */ 
    public function set_soins($_soins)
    {
        $this->_soins = $_soins;

        return $this;
    }

    /**
     * Set the value of _sterelise
     *
     * @return  self
     */ 
    public function set_sterelise($_sterelise)
    {
        $this->_sterelise = $_sterelise;

        return $this;
    }

    /**
     * Set the value of _nourriture
     *
     * @return  self
     */ 
    public function set_nourriture($_nourriture)
    {
        $this->_nourriture = $_nourriture;

        return $this;
    }

    /**
     * Set the value of _sexe
     *
     * @return  self
     */ 
    public function set_sexe($_sexe)
    {
        $this->_sexe = $_sexe;

        return $this;
    }

    /**
     * Set the value of _vaccins
     *
     * @return  self
     */ 
    public function set_vaccins($_vaccins)
    {
        $this->_vaccins = $_vaccins;

        return $this;
    }

    /**
     * Set the value of _toilettage
     *
     * @return  self
     */ 
    public function set_toilettage($_toilettage)
    {
        $this->_toilettage = $_toilettage;

        return $this;
    }

    /**
     * Set the value of _eau
     *
     * @return  self
     */ 
    public function set_eau($_eau)
    {
        $this->_eau = $_eau;

        return $this;
    }

    /**
     * Set the value of _box
     *
     * @return  self
     */ 
    public function set_box($_box)
    {
        $this->_box = $_box;

        return $this;
    }

    /**
     * Set the value of _date_sejour
     *
     * @return  self
     */ 
    public function set_date_sejour($_date_sejour)
    {
        $this->_date_sejour = $_date_sejour;

        return $this;
    }

    /**
     * Set the value of _fin_sejour
     *
     * @return  self
     */ 
    public function set_fin_sejour($_fin_sejour)
    {
        $this->_fin_sejour = $_fin_sejour;

        return $this;
    }

    /**
     * Set the value of _remarques
     *
     * @return  self
     */ 
    public function set_remarques($_remarques)
    {
        $this->_remarques = $_remarques;

        return $this;
    }

    /**
     * Set the value of _frequence_sortie
     *
     * @return  self
     */ 
    public function set_frequence_sortie($_frequence_sortie)
    {
        $this->_frequence_sortie = $_frequence_sortie;

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