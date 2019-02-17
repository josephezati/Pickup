<?php
require_once("parentsRestHandler.php");

$view = "";
if(isset($_GET["view"]))
$view = $_GET["view"];

switch($view){
case "all":
	$parentsRestHandler = new parentsRestHandler();
	$parentsRestHandler->getAllParents();
	break;
case "":
	break;
}

?>