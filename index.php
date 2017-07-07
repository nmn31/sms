<?php

error_reporting(E_ALL);
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC520af7047a201c5de086b2f915f37042';
$token = 'f755cfbe3d61fa85b078cac2f5da031e';
$client = new Client($sid, $token);
$call = $client->calls->create(
    "+1805-409-0629", "+918894685455",
    array("url" => "http://demo.twilio.com/docs/voice.xml")
);

echo $call->sid;
/*$sms = $client->messages->create(
    "+918894685450",        //+919478633848   9478144262
    array(
        "from" => "+1805-409-0629",
        "body" => "hello  kida? kithe hai aaj kal"
    )
);
echo "<pre>";
print_r($sms);*/
