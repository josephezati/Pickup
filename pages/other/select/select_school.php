<?php
include'../../../db_connection.php';
$sql = $conn->query("SELECT * FROM school");
if($sql->num_rows > 0){
	echo'<option>Choose..</option>';
while($row=mysqli_fetch_assoc($sql)){
	echo '<option value="'.$row['idschool'].'">'.$row['school_name'].'</option>';
}
}
?>