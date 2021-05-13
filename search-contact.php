<?php

$hs_api_key = 'YOUR_API_KEY_HERE';
$hubSpot = \HubSpot\Factory::createWithApiKey($hs_api_key);

$filter = new \HubSpot\Client\Crm\Contacts\Model\Filter();

$filter
    ->setOperator('EQ')
    ->setPropertyName('phone') // change the property you want to search
    ->setValue($phone); //pass the property value here

$filterGroup = new \HubSpot\Client\Crm\Contacts\Model\FilterGroup();
$filterGroup->setFilters([$filter]);

$searchRequest = new \HubSpot\Client\Crm\Contacts\Model\PublicObjectSearchRequest();
$searchRequest->setFilterGroups([$filterGroup]);

$contactsPage = $hubSpot->crm()->contacts()->searchApi()->doSearch($searchRequest);
dd($contactsPage);
//$contact_id = $contactsPage['results'][0]['id'];
