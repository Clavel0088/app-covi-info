<?php
namespace App\Controllers;
use App\Models\ActuModel;
use App\Entities\Actualite;
use App\Entities\Motcle;
use App\Models\KeywordModel;

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
		$keywordModel = new KeywordModel();
    	$data['actus'] = $actuModel->ActuById($id);
    	$data['keywords']=$keywordModel->KeywordByIdActu($id);
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

	public function updatePage()
	{	
			$actuModel = new ActuModel();
			$keywordModel=new KeywordModel();
			$id=$this->request->getGet('id');
			$data['actubyId']  =$actuModel->ActuById($id);
			$data['keyWords']  =$keywordModel->keywordByIdActu($id);
			//var_dump($data);
			echo view('formulaire_actualite',$data);
	}
	public function update()
	{	
		$actualiteModel = new ActuModel();
		$id=$this->request->getGet('id');
		$motCles = $this->request->getVar('motsCles');
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
			
			if(strpos($titre,$unmot)!==false){
				$contientMotCleTitre = true;
			}
			if(strpos($soustitre,$unmot)!==false){
				$contientMotCleSousTitre = true;
			}
			if(strpos($description,$unmot)!==false){
				$contientMotCleDescription = true;
			}
			if(strpos($descriptionimage,$unmot)!==false){
				$contientMotCleDescImg = true;
			}

		}
		if($contientMotCleTitre==true && $contientMotCleSousTitre==true && $contientMotCleDescription==true && $contientMotCleDescImg==true){
			
			$actualite = new Actualite();
			$actualite->date = date("Y-m-d");
			$actualite->titre = $this->request->getVar('titre');
			$actualite->sousTitre = $this->request->getVar('soustitre');
			$actualite->description = $this->request->getVar('description');
			$actualite->descriptionimage = $this->request->getVar('descriptionimage');
			$actualite->estactu = 1;
			$actualite->idPays = 1;
			$actualite->image = $this->request->getVar('image');
			$keywordModel=new KeywordModel();
			$keywordModel->deleteKeyByActu($id);
			$actualiteModel->updateActu($id,$actualite);		
			foreach($tableauMotCles as $tempMot){
				$keyword=new KeywordModel();
				$keyword->saveKey($tempMot,$id);
			}
			$data['message']  = "L'actualite a bien ete inséré";
			$data['listeActus']  =$actualiteModel->getAll();
			echo view('formulaire_actualite',$data);
		}
		else{
			$data['message']   = "Un des mot clés doit etre contenu dans le titre , le sous-titre , la description de l'article , et la description de l'image ";
			$data['listeActus']  =$actualiteModel->getAll();
			echo view('formulaire_actualite',$data);
		}
	}

	public function delete()
	{
			$actuModel = new ActuModel();
			$keywordModel=new KeywordModel();
			$id=$this->request->getGet('id');
			$keywordModel->deleteKeyByActu($id);
			$actuModel->deleteActu($id);
			$data['listeActus']  =$actuModel->getAll();
			echo view('formulaire_actualite',$data);
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
			
			if(strpos($titre,$unmot)!==false){
				$contientMotCleTitre = true;
			}
			if(strpos($soustitre,$unmot)!==false){
				$contientMotCleSousTitre = true;
			}
			if(strpos($description,$unmot)!==false){
				$contientMotCleDescription = true;
			}
			if(strpos($descriptionimage,$unmot)!==false){
				$contientMotCleDescImg = true;
			}
		}
		if($contientMotCleTitre==true && $contientMotCleSousTitre==true && $contientMotCleDescription==true && $contientMotCleDescImg==true){

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
			$idActulityInserted =$actualiteModel->saveActu($actualite->date,$actualite->titre,$actualite->description,1,$actualite->image,1,$actualite->sousTitre,$actualite->descriptionimage);		
			foreach($tableauMotCles as $tempMot){
				$keyword=new KeywordModel();
				$keyword->saveKey($tempMot,$idActulityInserted);
			}
			$data['message']  = "L'actualite a bien ete inséré";
			$data['listeActus']  =$actualiteModel->getAll();
			echo view('formulaire_actualite',$data);
		}
		else{
			$data['message']   = "Un des mot clés doit etre contenu dans le titre , le sous-titre , la description de l'article , et la description de l'image ";
			$data['listeActus']  =$actualiteModel->getAll();
			echo view('formulaire_actualite',$data);
		}
	}
}
