<?php
require './vendor/autoload.php';

use GreenApi\RestApi\GreenApiClient;

$ApiTokenInstance3 = "не определено";
$idInstance3 = "не определен";

if(isset($_GET["ApiTokenInstance"])){$ApiTokenInstance3 = $_GET["ApiTokenInstance"];}
if(isset($_GET["idInstance"])){$idInstance3 = $_GET["idInstance"];}

//The apiUrl, idInstance and apiTokenInstance values are available in console, double brackets must be removed
$url1 = "https://1105.api.green-api.com/waInstance$idInstance3/getStateInstance/$ApiTokenInstance3";

$options1 = array(
    'http' => array(
        'header' => "Content-Type: application/json\r\n",
        'method' => 'GET'
    )
);

$context1 = stream_context_create($options1);

$response1 = file_get_contents($url1, false, $context1);

#echo $response;
$json3 = json_encode($response1, JSON_PRETTY_PRINT);
return $json3;
$txtpost = $_GET['txtpost'] ?? '';
#echo $txtpost;
return $txtpost;

?>