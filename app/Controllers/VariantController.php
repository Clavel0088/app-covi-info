<?php
namespace App\Controllers;
use App\Models\VariantModel;
use App\Models\KeywordModel;
class VariantController extends BaseController
{
	public function index()
	{
		$keywordModel=new KeywordModel();
		$variantModel = new VariantModel();
    	$data['variantActus'] = $variantModel->getAll();
    	$data['keywords'] = $keywordModel->getAll();
    	//var_dump($data);
		echo view('variant', $data);
	}


	
}
