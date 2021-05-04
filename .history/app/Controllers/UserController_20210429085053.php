<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Entities\User;
class UserController extends BaseController
{
	public function index()
	{

		return view('login');
	}
	public function loginPage()
	{

		return view('login');
	}

	public function accueil()
	{ 
		$userModel = new UserModel();
    	$data['users'] = $userModel->getAll();
		echo view('accueil', $data);
	}

	public function inscriptionPage()
	{ 
		return view('inscription');
	}

	 public function userRegistration()
	{
		//$mdp = $this->request->getVar('passwd');
		//$encrypter = \Config\Services::encrypter();
		//$mdpCrypted = $encrypter->encrypt($txt);
		//echo($mdpCrypted);
		$user = new User();
		$user->login = $this->request->getVar('login');
		$user->mdp = $this->request->getVar('passwd');
		$user->nom = $this->request->getVar('name');
		//var_dump($user);
		$userModel = new UserModel(); 
		$data['user'] = $userModel->userRegistration($user);
		echo view('login', $data);
	}
	
}
