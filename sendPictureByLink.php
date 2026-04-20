<?php
require './vendor/autoload.php';

use GreenApi\RestApi\GreenApiClient;

$ApiTokenInstance1 = "не определено";
$idInstance1 = "не определен";
$Phone1 = "не определен";

if(isset($_GET["ApiTokenInstance"])){$ApiTokenInstance1 = $_GET["ApiTokenInstance"];}
if(isset($_GET["idInstance"])){$idInstance1 = $_GET["idInstance"];}
if(isset($_GET["Phone1"])){$Phone1 = $_GET["Phone1"];}
#if(isset($_GET["sendFileByUrl_path"])){$sendFileByUrl_path = $_GET["sendFileByUrl_path"];}

#echo "ID: $idInstance1 <br> Token: $ApiTokenInstance1";
#$ApiTokenInstance = $_SESSION['reason'];

#define( "ID_INSTANCE", "1105588668" );
define( "ID_INSTANCE2", $idInstance1 );
#define( "API_TOKEN_INSTANCE", "2d4de6194ce34a388b9e50afd055e47c78e72650ac7f403eb8" );
define( "API_TOKEN_INSTANCE2", $ApiTokenInstance1 );

$greenApi1 = new GreenApiClient( ID_INSTANCE2, API_TOKEN_INSTANCE2 );

$result1 = $greenApi1->sending->sendFileByUrl(
	$Phone1,
	'https://www.google.ru/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png',
	'googlelogo_color_272x92dp.png',
	'Google logo'
);

#print_r(  $result->data );
$json1 = json_encode($result1, JSON_PRETTY_PRINT);
return $json1;
$txtpost = $_GET['txtpost'] ?? '';
#echo $txtpost;
return $txtpost;
