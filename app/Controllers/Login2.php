<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Login2 extends BaseController
{
 	public function __construct()
 	{

 		/* Loads the form and url helper */
 		helper(['form', 'url']);

 		/* Loads the form_validation library */
		$validation = \Config\Services::validation();
 	}

 	public function index()
 	{

 		//If the post request is submitted
 		if ($this->request->getMethod() == 'post')
 		{
 			
 			//Set Validation Rules
 			$rules = [
 				'username' => 'required',
 				'email' => 'required',
 				'password' => 'required',
 				'passconf' => 'required'
 			];

 			//If validation does not pass
 			if(!$this->validate($rules)) {
 				//Get validator details - error messages etc.
 				$data['validation'] = $this-> validator;
 				//Render view with validator errors
 				echo view('UserLogin2', $data);
 			}
 			else{
 				//passed validation
 				echo view('Success2');
 			}
 		}
 		else{
 			//Display Form
 			echo view('UserLogin2');
 		}
	
 	}
}
?>
