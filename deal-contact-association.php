<?php

$hs_api_key = 'YOUR_API_KEY_HERE';
$association_url = "https://api.hubapi.com/crm/v3/objects/deals/".$deal['id']."/associations/Contacts/".$contact_id."/3?hapikey=".$hs_api_key;

$association_data = array(
  "fromObjectId" => '', //pass your deal id here
  "toObjectId" => '', //pass your contact id here
  "category" => "HUBSPOT_DEFINED",
  "definitionId" => 3
);

$ch = curl_init($association_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $association_data);
$response = curl_exec($ch);
curl_close($ch);
