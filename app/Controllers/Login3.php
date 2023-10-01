<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Login3 extends BaseController
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
 		$data = [];

 		//If the post request is submitted
 		if ($this->request->getMethod() == 'post')
 		{
 			
 			//Set Validation Rules
 			$rules = [
 				'username' => ['label'=> 'Username',
 					'rules' => 'required|min_length[4]|max_length[10]',
 				 	'errors' => [
 				 		'required'=> ' you must enter a %s',
 				 		'min_length' => 'Your %s must be a minimum of {param} characters',
 				 		'max_length' => 'your %s must be a maximum of {param} characters'
 						]
 				], 


 				'email' => [ 'label' => 'Email Address',
 					'rules'=>'required|valid_email',
 					'errors'=>['valid_email'=>'Please check the %s. It does not appear to be valid.']
 				],


 				'password' => ['rules' => 'required|alpha_numeric|min_length[5]',
 					'errors'=>['required'=> '%s is a mandatory field.']
 				], 


 				'passconf' => ['rules' => 'required|matches[password]',
 					'errors' => ['required' => '%s is a mandatory field,']
 				]

 			];

 			//If validation does not pass
 			if(!$this->validate($rules)) {
 				//Get validator details - error messages etc.
 				$data['validation'] = $this-> validator;
 				//Render view with validator errors
 				echo view('UserLogin3', $data);
 			}
 			else{
 				//passed validation
 				echo view('Success3');
 			}
 		}
 		else{
 			//Display Form
 			echo view('UserLogin3');
 		}
	
 	}
}
?>
