<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 * @property Login_control $Login_control
 * @property Aauth $aauth Description
 * @version 1.0
 */
class Recover extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->library("Aauth");
        
       
    }

    public function index() {
        
        $this->load->view("recover");
        if (isset($_POST['recover'])&&isset($_POST['email'])){
            $user = $_POST['email'];
            if ($this->aauth->user_exist_by_email($user)){
                $this->aauth->remind_password($user);
                $this->aauth->info("Check your email's inbox to reset your password !",true);
                redirect('recover', 'location');
            }
            else {
                
                $this->aauth->info("Account is not exists !",true);
                redirect('recover', 'location');
            }
        }
    }
}