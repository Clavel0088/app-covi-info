<?php namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'utilisateur';
  protected $primaryKey = 'id';
  protected $returnType = 'array';
  protected $allowedFields = ['nom', 'login'
  , 'mdp'];

    public function getAll()
    {
		  return $this->findAll();
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