<?php
namespace App\Controllers;
use App\Models\ActuModel;
use App\Entities\Actualite;
class ActuController extends BaseController
{
	public function index()
	{

		$actuModel = new ActuModel();
    	$data['actus'] = $actuModel->getAll();
    	//var_dump($data);
		echo view('index', $data);
	}

	public function description()
	{
		$id = $this->request->getGet('idActu');
		//echo "id=".$this->request->getGet('idActu');
		$actuModel = new ActuModel();
    	$data['actus'] = $actuModel->ActuById($id);
    	//var_dump($data);

		echo view('details', $data);
	}
	public function situation(){
		$actuModel = new ActuModel();
    	$data['actus'] = $actuModel->findByCountry();
    	//var_dump($data);

		echo view('situation', $data);
	}
	public function vaccin()
	{
		echo view('vaccin');
	}

	public function actuRegistration()
	{
		$titre = $this->request->getVar('titre');
		$soustitre = $this->request->getVar('soustitre');
		$description = $this->request->getVar('description');
		$motCles = $this->request->getVar('motCles');
		
		

		$actualite = new Actualite();
		$actualite->date = $this->request->getVar('date');
		$actualite->titre = $this->request->getVar('titre');
		$actualite->description = $this->request->getVar('description');
		$actualite->idPays = $this->request->getVar('idPays');
		$actualite->image = $this->request->getVar('image');
		$actualiteModel = new ActuModel();
		$actualiteModel->actuRegistration($actualite);
		echo view('index');
	}
}
