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
		$motCles = $this->request->getVar('motsCles');
		$tableauMotCles = split($motCles,",");
		$contientMotCleTitre = false;
		$contientMotCleSousTitre = false;
		$contientMotCleDescription = false;

		foreach($tableauMotCles as $unmot){
			if(str_contains($titre,$unmot)==true){
				$contientMotCleTitre = true;
			}
			if(str_contains($soustitre,$unmot)==true){
				$contientMotCleSousTitre = true;
			}
			if(str_contains($description,$unmot)==true){
				$contientMotCleDescription = true;
			}
		}
		if($contientMotCleTitre==true && $contientMotCleSousTitre==true && $contientMotCleDescription==true){
			$actualite = new Actualite();
			$actualite->date = $this->request->getVar('date');
			$actualite->titre = $this->request->getVar('titre');
			$actualite->sousTitre = $this->request->getVar('soustitre');
			$actualite->description = $this->request->getVar('description');
			$actualite->descriptionImage = $this->request->getVar('description');
			$actualite->estactu = 1;
			$actualite->idPays = 1;
			$actualite->image = $this->request->getVar('image');
			$actualiteModel = new ActuModel();
			$actualiteModel->actuRegistration($actualite);
			$message  = "L actualite a bien ete inséré";
			echo view('formulaire_actualite',$message);
		}
		else{
			$message  = "Un des mot clés doit etre contenu dans le titre , le sous-titre et la description";
			echo view('formulaire_actualite',$message);
		}
	}
}
