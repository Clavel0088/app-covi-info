<?php namespace App\Models;
use CodeIgniter\Model;

class StatModel extends Model
{
  protected $table = 'statistiques';
  protected $primaryKey = 'id';
  protected $returnType = 'array';
  protected $allowedFields = ['date', 'nbrCas'
  , 'nbrGueris','enTraitement','nbrTest','nbrDeces','totlCas','totalDeces','totalTest','idPays'];

    public function getAll()
    {
		  return $this->findAll();
	}

	 public function cityByName($name)
   {
    return $this->asArray() ->where(['name' => $name]) ->first();
  }

		public function saveUser($user)
	{
		return $this->save($user);
	}

	public function userConnexion($login,$pwd)
	{
		$db = \Config\Database::connect();
		$builder=$db->table('utilisateur');
		$builder->select('utilisateur.*');
		$builder->where('login',$login);
		$query = $builder->get();
		foreach ($query->getResult() as $row)  {
			$mdps = $row->mdp;
		}
		if(password_verify($pwd, $mdps))  return $this->asArray() ->where(['id' => $row->id]) ->first();
		else return null;
	}

	public function userRegistration($data)
	{
		try {  
		$user = $this->insert($data);   
		//var_dump($user);
		} 
		catch (\Exception $e) { 
		   die($e->getMessage()); 
		} 
		return null;
	}
}