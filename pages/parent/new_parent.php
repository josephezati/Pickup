<?php
include'../../db_connection.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
    $mail = $_POST['email'];
	$village = $_POST['village'];
	$sql = "INSERT INTO parent(fname,lname,telephone,email,idresidence) VALUES('$fname','$lname','$phone','$mail','$village')" or die(mysqli_error($conn));
// }

if(mysqli_query($conn, $sql)){
    echo '<button type="button" aria-hidden="true" class="close text-info">×</button>
			<span data-notify="icon" class="pe-7s-bell text-info"></span>
		<span data-notify="message" class="text-info">Registration Successful</span>';
}else{
    echo '<button type="button" aria-hidden="true" class="close text-danger">×</button>
			<span data-notify="icon" class="pe-7s-bell text-danger"></span>
		<span data-notify="message" class="text-danger">Registration Failed '.mysqli_error($conn).'</span>';
}
?>