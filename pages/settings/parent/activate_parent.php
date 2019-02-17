<?php
include'../../../db_connection.php';
$user_id = $_GET['user_id'];
$sql = $conn->query("SELECT * FROM parent WHERE idparent = $user_id");
$row = mysqli_fetch_assoc($sql);
$status = $row['user_status'];
if($status == 0){
$sql = $conn->query("UPDATE parent SET parent_status = 1 WHERE idparent = $user_id")or die(mysqli_error($conn));
}elseif($status == 1){
	$sql = $conn->query("UPDATE parent SET parent_status = 0 WHERE idparent = $user_id")or die(mysqli_error($conn));
}
header('location:../../../dashboard.php');
?>