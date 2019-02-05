<?php
include'../../../db_connection.php';
$sql = $conn->query("SELECT r.cell,s.division_name, d.district_name FROM residence r, division s, district d where r.iddistrict=d.iddistrict AND r.iddivision = s.iddivision");
$i=1;
if($sql->num_rows > 0){
while($row=mysqli_fetch_assoc($sql)){
	echo '<tr><td>'.$i.'</td><td>'.$row['cell'].'</td><td>'.$row['division_name'].'</td><td>'.$row['district_name'].'</td></tr>';
	$i++;
}
}else{
	echo '<tr><strong class="text-info text-center">No records found</strong></tr>';
}
?>