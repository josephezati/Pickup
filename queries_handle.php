<?php
include'db_connection.php';
$GLOBALS['result'] = "";
// if(isset($_POST['submitAdmin'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$username = $_POST['name'];
	$usertype = $_POST['type'];
	$password =$_POST['passwd'];
	$sql = "INSERT INTO users(fname,lname,telephone,username,usertype,password) VALUES('$fname','$lname','$phone','$username','$usertype','$password')" or die(mysqli_error($conn));
// }

if(mysqli_query($conn, $sql)){
    echo "Registration Successful";
    // $result = mysqli_query($conn,"SELECT * FROM users");
}else{
    echo "Registration failed ".$sql."".mysqli_error($conn);
}
$sql = mysqli_query($conn,"SELECT * FROM users");
// store in array
$data =  array();
while($row=mysqli_fetch_assoc($sql)){
	$data[] = $row;
}
// returning data in json format
echo json_encode($data);
?>