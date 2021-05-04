<?php namespace App\Models;
use CodeIgniter\Model;

class ActuModel extends Model
{
  protected $table = 'actualites';
  protected $primaryKey = 'id';
  protected $returnType = 'array';
  protected $allowedFields = ['date', 'titre'
  , 'description','idPays','estactu','sousTitre','descriptionimage'];

    public function getAll()
    {
		  return $this->asArray() ->where(['estactu' => true]) ->findAll();
	}

	 public function findByCountry()
    {
		 return $this->asArray() ->where(['estactu' => false]) ->findAll();
	}
	public function ActuById($id)
   {
		return $this->asArray() ->where(['id' => $id]) ->first();
	}

	public function isActu()
   {
    return $this->asArray() ->where(['estactu' => '1']) ->first();
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

	public function actuRegistration($data)
	{
		try {  
		$actu = $this->insert($data);   
		//var_dump($actu);
		} 
		catch (\Exception $e) { 
		   die($e->getMessage()); 
		} 
		return $db->insertID();
	}
public function saveActu($date,$titre,$description,$idPays,$image,$estactu,$sousTitre,$descriptionimage)
{
  $db = \Config\Database::connect();
  $builder = $db->table('actualites');

  $data = [
          'date' => $date,
          'titre' => $titre,
		  'description' => $description,
		  'idPays' => $idPays,
		  'image' => $image,
		  'estactu' => $estactu,
		  'sousTitre' => $sousTitre,
		  'descriptionimage' => $descriptionimage
  ];
  $builder->insert($data);
  return $db->insertID();
}

}