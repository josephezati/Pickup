<?php
include 'db/db_connect.php';
$response = array();

//Check for mandatory parameters
if(isset($_POST['message'])&&isset($_POST['date'])&&isset($_POST['place'])&&isset($_POST['child_id'])){
	$id = $_POST['id'];
	$message = $_POST['message'];
	$date = $_POST['date'];
	$place = $_POST['place'];
	$child = $_POST['child_id'];
	
	//Query to update a movie
	$query = "UPDATE schedule SET message=?,date=?,place=?,child_id=? WHERE id=?";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("ssisi",$message,$date,$place,$child,$id);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got updated
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Schedule successfully updated";
			
		}else{
			//When movie is not found
			$response["success"] = 0;
			$response["message"] = "Schedule not found";
		}					
	}else{
		//Some error while updating
		$response["success"] = 0;
		$response["message"] = mysqli_error($con);
	}

}else{
	//Mandatory parameters are missing
	$response["success"] = 0;
	$response["message"] = "missing mandatory parameters";
}
//Displaying JSON response
echo json_encode($response);
?>