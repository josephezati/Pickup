<?php
$GLOBALS['conn'] = "";
$server = "localhost";
$username = "josep_user";
$password ="a2cuggWE";
$database = "josephezati_pickup";
$conn = new mysqli($server,$username,$password,$database);
if($conn->connect_error){
	die('Connection failed: '.$conn->connect_error);
}
?>