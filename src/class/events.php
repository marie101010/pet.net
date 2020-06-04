<?php

namespace msb;

class Events{

    private $_id_e;
    private $_id_p;
    private $_description;
    private $_debut_rdv;
    private $_fin_rdv;
    private $_start_h;
    private $_created_by;
    private $_created_at;
    private $_update_by;
    private $_update_at;

/**-----------------------------------------------
 *              GETTERS
 * -----------------------------------------------
 */
    
    /**
     * Get the value of _id_e
     */ 
    public function get_id_e()
    {
        return $this->_id_e;
    }

    /**
     * Get the value of _id_p
     */ 
    public function get_id_p()
    {
        return $this->_id_p;
    }

    /**
     * Get the value of _description
     */ 
    public function get_description()
    {
        return $this->_description;
    }

    /**
     * Get the value of _debut_rdv
     */ 
    public function get_debut_rdv()
    {
        return $this->_debut_rdv;
    }

    /**
     * Get the value of _fin_rdv
     */ 
    public function get_fin_rdv()
    {
        return $this->_fin_rdv;
    }

        /**
     * Get the value of _start
     */ 
    public function get_start_h()
    {
        return $this->_start_h;
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
 */

    /**
     * Set the value of _description
     *
     * @return  self
     */ 
    public function set_description($_description)
    {
        $this->_description = $_description;

        return $this;
    }

    /**
     * Set the value of _debut_rdv
     *
     * @return  self
     */ 
    public function set_debut_rdv($_debut_rdv)
    {
        $this->_debut_rdv = $_debut_rdv;

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

    /**
     * Set the value of _start
     *
     * @return  self
     */ 
    public function set_start($_start_h)
    {
        $this->_start_h = $_start_h;

        return $this;
    }
}

