<?php

namespace App\Controllers;
use App\Entities\UserAccount;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}
	
}
