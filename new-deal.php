<?php

$hs_api_key = 'YOUR_API_KEY_HERE';
$hubSpot = \HubSpot\Factory::createWithApiKey($hs_api_key);

$dealInput = new \HubSpot\Client\Crm\Deals\Model\SimplePublicObjectInput();

$deal_data = array(
  "dealname" => '', //pass your deal name here
  "pipeline" => 'default',
  "dealstage" => 'appointmentscheduled',
);
$dealInput->setProperties($deal_data);
$deal   = $hubSpot->crm()->deals()->basicApi()->create($dealInput);
dd($deal);
//echo $deal['id'];
