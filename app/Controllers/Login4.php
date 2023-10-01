<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Login4 extends BaseController
{
 	public function __construct()
 	{

 		/* Loads the form and url helper */
 		helper(['form', 'url']);

 	}

 	public function index()
 	{
 		$data = [];

 		/* Loads the form_validation library */
		$validation = \Config\Services::validation();

 		//If the post request is submitted
 		if ($this->request->getMethod() == 'post')
 		{
 			
 			//if validation does not pass userLogin rules defined in app/config/validation

 			if(!$this->validate('userlogin')) {
 				//Get validator details - error messages etc.
 				$data['validation'] = $this-> validator;
 				
 				//Render view with validator errors
 				echo view('UserLogin4', $data);
 			}
 			else{
 				//passed validation
 				echo view('Success4');
 			}
 		}
 		else{
 			//Display Form
 			echo view('UserLogin4',$data);
 		}
	
 	}
}
?>
