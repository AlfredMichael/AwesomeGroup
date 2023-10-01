<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];


    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules - User Defined Validation Rules
    // --------------------------------------------------------------------

        public $userlogin = 
        [  'username' => ['label'=> 'Username',
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
        
        
}
