<?php namespace App\Models;
use CodeIgniter\Model;

class VaccinModel extends Model
{
  protected $table = 'vaccin';
  protected $primaryKey = 'id';
  protected $returnType = 'array';
  protected $allowedFields = ['date', 'titre'
  , 'description'];

    public function getAll()
    {
		  return $this->findAll();
	}

	public function ActuById($id)
   {
		return $this->asArray() ->where(['id' => $id]) ->first();
	}
	

	public function actuRegistration($data)
	{
		try {  
		$actu = $this->insert($data);   
		//var_dump($actu);
		} 
		catch (\Exception $e) { 
		   die($e->getMessage()); 
		} 
		return null;
	}
}