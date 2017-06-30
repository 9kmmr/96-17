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
class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
        $this->load->library("Aauth");
        $this->load->library("CIworldpay");
       
    }

    public function index() {
    	$data['error'] =array();
    	$data['plan'] = "";
    	if (isset($_POST)&&isset($_POST['basic'])) {
    		$data['plan'] = "basic";
    	}
    	if (isset($_POST)&&isset($_POST['pro'])) {
    		$data['plan'] = "pro";
    	}
    	if (isset($_POST)&&isset($_POST['premium'])) {
    		$data['plan'] = "premium";
    	}
        $this->load->view("register",$data);
    }
    
    public function send_money($amount,$paymentMethod,$user_new){
    	$worldpay =  new CIworldpay();
		$worldpay->disableSSLCheck(true);

		
		 try {

		//if ($orderType != 'APM') {
			// CREATE ORDER
				$response = $worldpay->createOrder(array(

				    'token' => isset($_POST['token']) ? $_POST['token'] : '',

				    'amount' => round((float) $amount * 100),

				    'currencyCode' => 'USD' ,

				    'orderType' => 'ECOM', //Order Type: ECOM/MOTO/RECURRING

				    'name' => isset($_POST['cartname']) ? $_POST['cartname'] : '',

				    'paymentMethod' => $paymentMethod ,

				    'orderDescription' => 'New PREMIUM Registered User :'.$_POST['username'] ."/".$_POST['email']

				));	   		
				if ($response['paymentStatus'] === 'SUCCESS') {
				    $worldpayOrderCode = $response['orderCode'];
				    $this->aauth->add_member($user_new, 'Premium_user');
				    $this->aauth->info('Your account has successfully been created, Confirm your account in your mail and log in ', TRUE);
				    //$this->aauth->keep_infos();
				    $this->aauth->send_verification($user_new);
					redirect('login', 'location'); 
				} else {
				    throw new WorldpayException(print_r($response, true));
				   /* $data['error'] = $this->aauth->get_errors_array();
				    $data['error'][count($data['error'])]  = new WorldpayException(print_r($response, true));
	    		$this->load->view("register",$data);*/
				}
		} catch (WorldpayException $e) {

		 	$data['error'] =array();
		 	$data['error'][count($data['error'])] = 'Error message: Please complete right information : ' . $e->getMessage();
		 	/**/				    	
	    	$this->load->view("register",$data);
		} catch (Exception $e) {		
		 	echo 'Error message: '. $e->getMessage();
		}
    }
    public function complete_register(){
    	$data['plan'] = "";
    	if (isset($_POST)&& isset($_POST['register'])){
	        	//require lib	    		
				// SERVICE KEY IN THIS
			if (isset($_POST['type'])&&$_POST['type']=='premium'){
				$paymentMethod = array(
				     "name" => isset($_POST['cartname'])? $_POST['cartname'] : '',
				     "expiryMonth" => isset($_POST['expiration-month'] )? $_POST['expiration-month'] : '',
				     "expiryYear" => isset($_POST['expiration-year'])? $_POST['expiration-year'] : '',
				     "cardNumber"=>isset($_POST['cardnumber']) ? $_POST['cardnumber'] : '',
				     "cvc"=>isset($_POST['cvc']) ? $_POST['cvc']: ''
				 );
				$user_new = $this->aauth->create_user($_POST['email'], $_POST['password'], $_POST['username']);
				if ($user_new)
	        	{
					$this->send_money(99,$paymentMethod,$user_new);
				}
				else {
					$data['error'] = $this->aauth->get_errors_array();
	        		$this->load->view("register",$data);
				}
			}
			else if (isset($_POST['type'])&&$_POST['type']=='pro'){
				$paymentMethod = array(
				     "name" => isset($_POST['cartname'])? $_POST['cartname'] : '',
				     "expiryMonth" => isset($_POST['expiration-month'] )? $_POST['expiration-month'] : '',
				     "expiryYear" => isset($_POST['expiration-year'])? $_POST['expiration-year'] : '',
				     "cardNumber"=>isset($_POST['cardnumber']) ? $_POST['cardnumber'] : '',
				     "cvc"=>isset($_POST['cvc']) ? $_POST['cvc']: ''
				 );
				$user_new = $this->aauth->create_user($_POST['email'], $_POST['password'], $_POST['username']);
				if ($user_new)
	        	{
					$this->send_money(49,$paymentMethod,$user_new);
				}
				else {
					$data['error'] = $this->aauth->get_errors_array();
	        		$this->load->view("register",$data);
				}
			}
			else {
				$user_new = $this->aauth->create_user($_POST['email'], $_POST['password'], $_POST['username']);
				if ($user_new){
					$this->aauth->add_member($user_new,'Default_user');
					$this->aauth->info('Your account has successfully been created, Confirm your account in your mail and log in', TRUE);
					//$this->aauth->keep_infos();
					$this->aauth->send_verification($user_new);
					redirect('login', 'location'); 

				}
				else{
					$data['error'] = $this->aauth->get_errors_array();
	        		$this->load->view("register",$data);
				}
	        	
			}
				
    	}
    }
}