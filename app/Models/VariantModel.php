<?php namespace App\Models;
use CodeIgniter\Model;

class VariantModel extends Model
{
  protected $table = 'variant';
  protected $primaryKey = 'id';
  protected $returnType = 'array';
  protected $allowedFields = ['nom', 'titre'
  , 'description','sousTitre'];

    public function getAll()
    {
		  return $this->findAll();
	}

}