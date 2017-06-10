<?php
error_reporting(E_ALL); 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 * @property Login_control $Login_control
 * @property Aauth $aauth Description
 * @version 1.0
 */
class Logout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->library("Aauth");
        $this->load->library("CIworldpay");
       
    }

    public function index() {
    	$this->aauth->logout();
        redirect('welcome');
    }
}