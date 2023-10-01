<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Login extends BaseController
{
 	public function __construct()
 	{
 		helper(['form', 'url']);
 	}
 	public function index()
 	{
 		helper(['form', 'url']);
 		if (! $this->validate([]))
 		{
 			echo view('UserLogin', ['validation' => $this->validator]);
 		}
 		else
		{
 			echo view('Success');
 		}
 	}
}
?>
