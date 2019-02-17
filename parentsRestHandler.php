<?php
require_once("SimpleRest.php");
require_once("db_controller.php");

class Parents extends SimpleRest{
//hooc the DAO HERE

public function getAllParents(){
$parent = new Parents();
$rawData = $parent->getAllParents();

if(empty($rawData)){
$statusCode = 404;
$rawData = array('error' -> "No Record found");
}else{
$statusCode = 200;
}

$requestContentType = 'application/json';
$this ->setHttpHeaders($requestContentType, $statusCode);

$result["parent"] = $rawData;
if(strpos($requestContentType, 'application/json')!== false){
$response = $this->encodeJson($result);
echo $response;

}


public function encodeJson($responseData){
$jsonResponse = json_encode($responseData);
return $jsonResponse;

}
}

?>