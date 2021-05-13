<?php

$hs_api_key = 'YOUR_API_KEY_HERE';
$hubSpot = \HubSpot\Factory::createWithApiKey($hs_api_key);

$contactInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput();

$contact_data = array( // you can pass data in this array from your form
  "firstname" => '',
  "lname" => '',
  "email" => '',
  "phone" => '',
  "message" => '',
  "code" => '',
  "city" => '',
  "radio1" => '',
  "address" => '',
  "totalsession" =>'',
  "company" => ''
);

$contactInput->setProperties($contact_data);
$contact = $hubSpot->crm()->contacts()->basicApi()->create($contactInput);
dd($contact);
//$contact_id = $contact['id'];
