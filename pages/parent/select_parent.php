<?php
include'../../db_connection.php';
$sql = $conn->query("SELECT * FROM parent");
$i=1;
if($sql->num_rows > 0){
while($row=mysqli_fetch_assoc($sql)){
	echo '<tr><td>'.$i.'</td><td>'.$row['fname'].' '.$row['lname'].'</td><td>'.'0'.$row['telephone'].'</td><td>'.$row['email'].'</td></tr>';
	$i++;
}
}else{
	echo '<tr><strong class="text-info text-center">No records found</strong></tr>';
}
?>