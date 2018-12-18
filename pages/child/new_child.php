<?php
include'../../db_connection.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$level = $_POST['level'];
    $school = $_POST['school'];
	$parent = $_POST['parent'];
	$village = $_POST['village'];
	// $password =$_POST['passwd'];
	$sql = "INSERT INTO child(fname,lname,idschool,class,idparent,idresidence) VALUES('$fname','$lname','$school','$level','$parent','$village')" or die(mysqli_error($conn));
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