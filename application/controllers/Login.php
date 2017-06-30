<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 * @property Login_control $Login_control
 * @property Aauth $aauth Description
 * @version 1.0
 */
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->library("Aauth");
        $this->load->library("CIworldpay");
       
    }

    public function index() {
        
        $this->load->view("login");
    	if (isset($_POST)&& isset($_POST['login'])){
    		
    		$login = $this->aauth->login($_POST['email'], $_POST['password']);

	        if ($login) {
				redirect('welcome');
			}
	        else
	        {
	        	$error = $this->aauth->get_errors_array();
                $this->load->view( 'login', array('error' => $error) );
	        }      
    	}
    }
}