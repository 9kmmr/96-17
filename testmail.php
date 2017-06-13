<?php 
error_reporting(E_ALL);
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
$to = "aushet4@gmail.com";
$subject = "Admin Confirmation Of Booking";
$message = "hello";
$headers = "From: info@nguyendangdungha.com";
$headers .= "To: $to\r\n";
//mail('aushet4@gmail.com', 'the subject', 'the message', null,  'info@nguyendangdungha.com');
$c = mail($to,$subject,$message,$headers);
if ($c) echo "1";else echo "0";
echo "xong";
 ?>