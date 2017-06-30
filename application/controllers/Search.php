<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 * @property Login_control $Login_control
 * @property Aauth $aauth Description
 * @version 1.0
 */
class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->library("Aauth");
    }
    public function index(){
    	$check_login = $this->aauth->is_loggedin();
		$this->load->view( 'search', array('check_login' => $check_login) );
    }
}