<?php
include'../../../db_connection.php';
$user_id = $_GET['user_id'];
$sql = $conn->query("DELETE  FROM users WHERE iduser = $user_id")or die(mysqli_error($conn));

header('location:../../../dashboard.php');
?>