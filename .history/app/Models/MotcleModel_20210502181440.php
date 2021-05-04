<?php namespace App\Models;
use CodeIgniter\Model;

class VaccinModel extends Model
{
  protected $table = 'motcle';
  protected $primaryKey = 'id';
  protected $returnType = 'array';
  protected $allowedFields = ['mot', 'idActu'];

    public function getAll()
    {
		  return $this->findAll();
	}

	public function keywordByIdActu($id)
   {
		return $this->asArray() ->where(['idActu' => $id]) ->findAll();
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