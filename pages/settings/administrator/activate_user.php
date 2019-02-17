<?php
include'../../../db_connection.php';
$user_id = $_GET['user_id'];
$sql = $conn->query("SELECT * FROM users WHERE iduser = $user_id");
$row = mysqli_fetch_assoc($sql);
$status = $row['user_status'];
if($status == 0){
$sql = $conn->query("UPDATE users SET user_status = 1 WHERE iduser = $user_id")or die(mysqli_error($conn));
}elseif($status == 1){
	$sql = $conn->query("UPDATE users SET user_status = 0 WHERE iduser = $user_id")or die(mysqli_error($conn));
}
header('location:../../../dashboard.php');
?>