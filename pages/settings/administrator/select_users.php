<?php
include'../../../db_connection.php';
$sql = $conn->query("SELECT * FROM users");
$i=1;
if($sql->num_rows > 0){
while($row=mysqli_fetch_assoc($sql)){
	echo '<tr><td>'.$i.'</td><td>'.$row['fname'].' '.$row['lname'].'</td><td>'.$row['telephone'].'</td><td>'.$row['email'].'</td><td><a href="pages/settings/administrator/activate_user.php?user_id='.$row['iduser'].'"><button class="btn btn-success btn-sm" type="submit" id="action_user_activate">Activate</button></a><a href="pages/settings/administrator/activate_user.php?user_id='.$row['iduser'].'"><button class="btn btn-warning btn-sm" type="submit" id="action_user_deactivate">Deactivate</button></a><a href="pages/settings/administrator/delete_user.php?user_id='.$row['iduser'].'"><button class="btn btn-danger btn-sm" type="submit" id="action_user_delete">Delete</button></a></td></tr>';
	$i++;
}
}
?>
