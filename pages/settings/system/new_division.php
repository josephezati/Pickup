<?php
include'../../../db_connection.php';
	$name = $_POST['division'];
	$district =$_POST['dist'];
	$sql = "INSERT INTO division(division_name,iddistrict) VALUES('$name','$district')" or die(mysqli_error($conn));
// }

if(mysqli_query($conn, $sql)){
    echo '<button type="button" aria-hidden="true" class="close text-info">×</button>
			<span data-notify="icon" class="pe-7s-bell text-info"></span>
		<span data-notify="message" class="text-info">Added Successful</span>';
}else{
    echo '<button type="button" aria-hidden="true" class="close text-danger">×</button>
			<span data-notify="icon" class="pe-7s-bell text-danger"></span>
		<span data-notify="message" class="text-danger">Not Added '.mysqli_error($conn).'</span>';
}

?>