<?php
include'../../db_connection.php';
$sql = $conn->query("SELECT * FROM driver");
$i=1;
if($sql->num_rows > 0){
while($row=mysqli_fetch_assoc($sql)){
	echo '<tr><td>'.$i.'</td><td>'.$row['fname'].' '.$row['lname'].'</td><td>'.'0'.$row['telephone'].'</td><td>'.$row['vehicle_number'].'</td><td><a href="" class="text-primary">Edit</a></td></tr>';
	$i++;
}
}
?>