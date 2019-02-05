<?php
include'../../../db_connection.php';
$sql = $conn->query("SELECT p.idparent,p.fname,p.lname,p.telephone,r.cell FROM parent p, residence r WHERE p.idresidence = r.idresidence");
if($sql->num_rows > 0){
	echo'<option>Choose..</option>';
while($row=mysqli_fetch_assoc($sql)){
	echo '<option value="'.$row['idparent'].'">'.$row['fname'].' '.$row['lname'].', <strong>Village:</strong> '.$row['cell'].', <strong>Telephone:</strong> 0'.$row['telephone'].'</option>';
}
}
?>