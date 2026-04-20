<?php
require './vendor/autoload.php';

use GreenApi\RestApi\GreenApiClient;

$ApiTokenInstance4 = "не определено";
$idInstance4 = "не определен";
$Phone4 = "не определен";
$sendMessage_text = "не определен";

if(isset($_GET["ApiTokenInstance"])){$ApiTokenInstance4 = $_GET["ApiTokenInstance"];}
if(isset($_GET["idInstance"])){$idInstance4 = $_GET["idInstance"];}
if(isset($_GET["Phone"])){$Phone4 = $_GET["Phone"];}
if(isset($_GET["sendMessage_text"])){$sendMessage_text = $_GET["sendMessage_text"];}

define( "ID_INSTANCE", "1101712345" );
define( "API_TOKEN_INSTANCE", "d75b3a66374942c5b3c019c698abc2067e151558acbd412345" );

define( "ID_INSTANCE", $idInstance4 );
define( "API_TOKEN_INSTANCE", $ApiTokenInstance4 );

$greenApi = new GreenApiClient( ID_INSTANCE, API_TOKEN_INSTANCE );

$result2 = $greenApi->sending->sendMessage($Phone4, $sendMessage_text);

#print_r(  $result2->data );
$json4 = json_encode($result2, JSON_PRETTY_PRINT);
$txtpost = $_GET['txtpost'] ?? '';
return $txtpost;
return $json4;
