<?php
namespace App\Controllers;
use App\Models\VaccinModel;
use App\Models\KeywordModel;
use App\Entities\Vaccin;
class VaccinController extends BaseController
{
	public function index()
	{

		$vaccinModel = new VaccinModel();
		$keywordModel = new KeywordModel();
    	$data['vaccinActus'] = $vaccinModel->getAll();
    	$data['keywords'] = $keywordModel->getAll();
    	//var_dump($data);
		echo view('vaccin', $data);
	}


	public function actuRegistration()
	{
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
