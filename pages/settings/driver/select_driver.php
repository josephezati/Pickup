<?php
include'../../../db_connection.php';
$sql = $conn->query("SELECT * FROM driver");
$i=1;
if($sql->num_rows > 0){
while($row=mysqli_fetch_assoc($sql)){
	echo '<tr><td>'.$i.'</td><td>'.$row['fname'].' '.$row['lname'].'</td><td>'.'0'.$row['telephone'].'</td><td>'.$row['vehicle_number'].'</td><td>'.$row['permit_number'].'</td><td><button class="btn btn-success btn-sm" type="submit" id="action_driver">Activate</button><button class="btn btn-warning btn-sm" type="submit" id="action_driver">Deactivate</button><button class="btn btn-danger btn-sm" type="submit" id="action_driver">Delete</button></td></tr>';
	$i++;
}
}
?>