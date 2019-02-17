<?php
include'../../../db_connection.php';
$user_id = $_GET['user_id'];
$sql = $conn->query("SELECT * FROM driver WHERE iddriver = $user_id");
$row = mysqli_fetch_assoc($sql);
$status = $row['user_status'];
if($status == 0){
$sql = $conn->query("UPDATE driver SET driver_status = 1 WHERE iddriver = $user_id")or die(mysqli_error($conn));
}elseif($status == 1){
	$sql = $conn->query("UPDATE driver SET driver_status = 0 WHERE iddriver = $user_id")or die(mysqli_error($conn));
}
header('location:../../../dashboard.php');
?>