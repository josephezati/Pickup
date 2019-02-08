<?php
class DBController{
$GLOBALS['conn'] = "";
$server = "localhost";
$username = "josep_user";
$password ="a2cuggWE";
$database = "josephezati_pickup";

function _construct(){
$conn=$this->connectDB();
if(!empty($conn)){
	$this->conn=$conn;
}
}

function connectDB(){
$conn = new mysqli_connect($this->server,$this->username,$this->password,$this->database);
return $conn;
}

function executSelectQuery($query){
$result = mysqli_query($this->conn,$query);
while($row=mysqli_fetch_assoc($result)){
$resultset[] = $row;

}
if(!empty($resultset))
	return $resultset;

}
}

?>