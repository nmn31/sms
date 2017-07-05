<?php

error_reporting(E_ALL);
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC4cc608f9d73c16836871b800d2c9b057';
$token = '9885b048fcec181e1a061711f794a7cf';
$client = new Client($sid, $token);

$number = $client->incomingPhoneNumbers->create(
    array(
        "voiceUrl" => "http://demo.twilio.com/docs/voice.xml",
        "phoneNumber" => "+15005550006"
    )
);

echo $number->sid;
