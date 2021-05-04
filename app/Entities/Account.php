<?php
namespace App\Entities;
 class Account 
 {
     
    protected $id;
    protected $nom;
    protected $numero;
    protected $solde;

    public function __get($key)
    {
        if (property_exists($this, $key))
        { 
            return $this->$key; 
        }
           
    } 
    public function __set($key, $value) {
        if (property_exists($this, $key)) 
        {
            $this->$key = $value;
        } 
    }
}