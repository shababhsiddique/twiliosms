<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once('twilio-php-latest/Services/Twilio.php'); // Loads the library
 
// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC21166863c75d499d940d33ade246c03a"; 
$token = "d2491bd7194680a1ae5d26fad1b5d7cf"; 
$client = new Services_Twilio($sid, $token);
 
$sms = $client->account->sms_messages->create("+19198872889", "+17276885157", "This messag was sent from Shabab. Please inform him if you recieved this. ", array());
echo $sms->sid;