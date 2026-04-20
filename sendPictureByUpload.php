<?php
require './vendor/autoload.php';

use GreenApi\RestApi\GreenApiClient;

#require 'indexx.php';
#include 'indexx.php';
#$a1 = $a;
#echo $a1;
#$b1 = $b;
#echo $b1;



$ApiTokenInstance = "не определено";
$idInstance = "не определен";
$Phone = "не определен";

if(isset($_GET["ApiTokenInstance"])){$ApiTokenInstance = $_GET["ApiTokenInstance"];}
if(isset($_GET["idInstance"])){$idInstance = $_GET["idInstance"];}
if(isset($_GET["Phone"])){$Phone = $_GET["Phone"];}

#echo "ID: $idInstance <br> <p> Token: $ApiTokenInstance <br> </p> <p> Phone: $Phone </p>";

#$ApiTokenInstance = $_SESSION['reason'];
#define( "ID_INSTANCE", "1105588668" );
define( "ID_INSTANCE", $idInstance );
#define( "API_TOKEN_INSTANCE", "2d4de6194ce34a388b9e50afd055e47c78e72650ac7f403eb8" );
define( "API_TOKEN_INSTANCE", $ApiTokenInstance );

$greenApi = new GreenApiClient( ID_INSTANCE, API_TOKEN_INSTANCE );

$result = $greenApi->sending->sendFileByUpload(
	$Phone,
	'./image-87.png',
	'PicFromDisk.jpg',
	'Picture from disk'
);

#print_r(  $result->data );
#return ['site_name' => $result->data];

#$string = implode(",", $result->data);
#return ['site_name' => $string];

#$array = ['имя', 'почта', 'телефон'];
#$string = implode(",", $result); // "имя,почта,телефон"
#echo $string;
#return $string;

#// Устанавливаем заголовок Content-Type на application/json
#header('Content-Type: application/json');

#// Кодируем данные в JSON
$json = json_encode($result, JSON_PRETTY_PRINT);

#// Выводим результат
#echo $json;
$txtpost = $_GET['txtpost'] ?? '';
#echo $txtpost;
return $txtpost;
return $json;
