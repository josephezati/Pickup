<?php
include'../../db_connection.php';
$sql = $conn->query("SELECT parent.fname,parent.lname,parent.telephone,parent.email, COUNT(child.idparent)  AS children FROM parent LEFT JOIN child ON child.idparent = parent.idparent GROUP BY parent.fname, parent.lname");
$i=1;
if($sql->num_rows > 0){
while($row=mysqli_fetch_assoc($sql)){
	echo '<tr><td>'.$i.'</td><td>'.$row['fname'].' '.$row['lname'].'</td><td>'.'0'.$row['telephone'].'</td><td>'.$row['email'].'</td><td>'.$row['children'].'</td></tr>';
	$i++;
}
}else{
	echo '<tr><strong class="text-info text-center">No records found</strong></tr>';
}
?>