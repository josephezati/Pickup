<?php
include'../../../db_connection.php';
$sql = $conn->query("SELECT * FROM school");
$i=1;
if($sql->num_rows > 0){
while($row=mysqli_fetch_assoc($sql)){
	echo '<tr><td>'.$i.'</td><td>'.$row['school_name'].'</td></tr>';
	$i++;
}
}
?>