<?php namespace App\Models;
use CodeIgniter\Model;

class KeywordModel extends Model
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
	

	public function keywordRegistration($data)
	{
		try {  
		$keyword = $this->insert($data);   
		//var_dump($keyword);
		} 
		catch (\Exception $e) { 
		   die($e->getMessage()); 
		} 
		return null;
	}
public function saveKey($mot,$idActu)
{
  $db = \Config\Database::connect();
  $builder = $db->table('motcle');

  $data = [
          'mot' => $mot,
          'idActu' => $idActu
  ];
  $builder->insert($data);
  return $db->insertID();
	}

	public function deleteKeyByActu($idACtu)
   {
      return $this->where('idACtu', $idACtu)->delete();
  }
}