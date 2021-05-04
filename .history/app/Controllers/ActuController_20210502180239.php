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
		$descriptionimage = $this->request->getVar('descriptionimage');
		$tableauMotCles = explode(",",$motCles);
		$contientMotCleTitre = false;
		$contientMotCleSousTitre = false;
		$contientMotCleDescription = false;
		$contientMotCleDescImg = false;

		foreach($tableauMotCles as $unmot){
			if(strpos($titre,$unmot)){
				$contientMotCleTitre = true;
			}
			if(strpos($soustitre,$unmot)){
				$contientMotCleSousTitre = true;
			}
			if(strpos($description,$unmot)){
				$contientMotCleDescription = true;
			}
			if(strpos($descriptionimage,$unmot)){
				$contientMotCleDescImg = true;
			}
		}
		if($contientMotCleTitre==true && $contientMotCleSousTitre==true && $contientMotCleDescription==true){
			$actualite = new Actualite();
			$actualite->date = date("Y-m-d");
			$actualite->titre = $this->request->getVar('titre');
			$actualite->sousTitre = $this->request->getVar('soustitre');
			$actualite->description = $this->request->getVar('description');
			$actualite->descriptionimage = $this->request->getVar('descriptionimage');
			$actualite->estactu = 1;
			$actualite->idPays = 1;
			$actualite->image = $this->request->getVar('image');
			$actualiteModel = new ActuModel();
			$actualiteModel->actuRegistration($actualite);


			$data['message']  = "L'actualite a bien ete inséré";
			echo view('formulaire_actualite',$data);
		}
		else{
			$data['message']   = "Un des mot clés doit etre contenu dans le titre , le sous-titre , la description de l'article , et la description de l'image ";
			echo view('formulaire_actualite',$data);
		}
	}
}
