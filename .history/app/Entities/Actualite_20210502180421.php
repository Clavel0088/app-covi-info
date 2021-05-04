<?php
namespace App\Entities;
 class Actualite 
 {
     
    protected $id;
    protected $date;
    protected $titre;
    protected $description;
    protected $idPays;
    protected $image;
    protected $estactu;
    protected $descriptionimage;
    protected $sousTitre;

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