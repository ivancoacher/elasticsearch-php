<?php
include "../vendor/autoload.php";

use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();
//echo 111;exit;
//$params = [
//    'index' => 'my_index',
//    'type' => 'my_type',
//    'id' => 'my_id',
//    'body' => ['testField' => 'abc']
//];
//$response = $client->index($params);
//print_r($response);


$params = [
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id'
];

$response = $client->get($params);
print_r($response);


?>