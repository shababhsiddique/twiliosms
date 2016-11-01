<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once('twilio-php-latest/Services/Twilio.php'); // Loads the library
 
// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC21166863c75d499d940d33ade2XXXXXXX"; 
$token = "d2491bd7194680a1ae5d2XXXXXXXXX"; 
$client = new Services_Twilio($sid, $token);
 
$sms = $client->account->sms_messages->create("+1910000000", "+17270000000", "This messag was sent from Shabab. Please inform him if you recieved this. ", array());
echo $sms->sid;
