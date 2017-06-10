<?php 
	require('lib/Connection.php');
	require('lib/AbstractAddress.php');
	require('lib/DeliveryAddress.php');
	require('lib/BillingAddress.php');
	require('lib/AbstractOrder.php');
	require('lib/Order.php');
	require('lib/APMOrder.php');
	require('lib/Error.php');
	require('lib/OrderService.php');
	require('lib/TokenService.php');
	require('lib/Utils.php');
	require('lib/WorldpayException.php');
	require('lib/Worldpay.php');
	
	Class 	CIworldpay extends Worldpay {

		public function __construct()
		{			
			parent::__construct('T_S_8dab6b08-aa76-4a30-b031-89fa5613f16e');
			
		}

		
	}
 ?>