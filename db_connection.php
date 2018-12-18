<?php
$GLOBALS['conn'] = "";
$server = "127.0.0.1";
$username = "root";
$password ="";
$database = "pickup_db";
$conn = new mysqli($server,$username,$password,$database);
if($conn->connect_error){
	die('Connection failed: '.$conn->connect_error);
}
?>