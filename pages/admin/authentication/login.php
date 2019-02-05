<?php
include'../../../db_connection.php';
$name = $_POST['user'];
echo $name;
	// $lname = $_POST['lname'];
$sql = $conn->query("SELECT * FROM users WHERE username = '$name'");
if($sql->num_rows > 0){
	while($row=mysqli_fetch_assoc($sql)){
		echo $row['username'];
	}
}
?>