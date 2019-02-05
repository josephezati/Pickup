<?php
include'../../../db_connection.php';
$sql = $conn->query("SELECT DISTINCT p.idparent,p.fname,p.lname,p.telephone, p.email,r.cell,s.division_name,d.district_name FROM parent p INNER JOIN residence r INNER JOIN division s INNER JOIN district d WHERE r.iddistrict=d.iddistrict AND r.iddivision = s.iddivision");
$i=1;
if($sql->num_rows > 0){
while($row=mysqli_fetch_assoc($sql)){
	echo '<tr><td>'.$i.'</td><td>'.$row['fname'].' '.$row['lname'].'</td><td>0'.$row['telephone'].'</td><td>'.$row['email'].'</td><td>'.$row['district_name'].'>'.$row['division_name'].'>'.$row['cell'].'</td><td><button class="btn btn-success btn-sm" type="submit" id="action_driver" value="<?php' .$row['idparent'].'?>">Activate</button><button class="btn btn-warning btn-sm" type="submit" id="action_driver" value="<?php' .$row['idparent'].'?>">Deactivate</button><button class="btn btn-danger btn-sm" type="submit" id="action_driver" value="<?php' .$row['idparent'].'?>">Delete</button></td></tr>';
	$i++;
}
}
?>
