<?php
require './vendor/autoload.php';

use GreenApi\RestApi\GreenApiClient;

$ApiTokenInstance2 = "не определено";
$idInstance2 = "не определен";

if(isset($_GET["ApiTokenInstance"])){$ApiTokenInstance2 = $_GET["ApiTokenInstance"];}
if(isset($_GET["idInstance"])){$idInstance2 = $_GET["idInstance"];}

//The apiUrl, idInstance and apiTokenInstance values are available in console, double brackets must be removed
$url = "https://1105.api.green-api.com/waInstance$idInstance2/getSettings/$ApiTokenInstance2";

$options = array(
    'http' => array(
        'header' => "Content-Type: application/json\r\n",
        'method' => 'GET'
    )
);

$context = stream_context_create($options);

$response = file_get_contents($url, false, $context);

#echo $response;
$json2 = json_encode($response, JSON_PRETTY_PRINT);
return $json2;
$txtpost = $_GET['txtpost'] ?? '';
#echo $txtpost;
return $txtpost;

?>