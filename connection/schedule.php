<?php
include 'db/db_connect.php';
$response = array();

//Check for mandatory parameters
if(isset($_POST['message'])&&isset($_POST['date'])&&isset($_POST['place'])&&isset($_POST['child_id'])){
	$message = $_POST['message'];
	$date = $_POST['date'];
	$place = $_POST['place'];
	$child = $_POST['child_id'];
	
	//Query to insert a movie
	$query = "INSERT INTO schedule( message, date, child_id, place) VALUES (?,?,?,?)";
	//$query = "INSERT INTO schedule(message, place, date, child_id, parent_id, schedule_date, schedule_lon, schedule_lat, status) VALUES (?,?,?,?,?,?,?,?,?)";
	//Prepare the query
	if($stmt = $con->prepare($query)){
		//Bind parameters
		$stmt->bind_param("ssis",$message,$date,$child,$place);
		//Exceting MySQL statement
		$stmt->execute();
		//Check if data got inserted
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Schedule Successfully Added";			
			
		}else{
			//Some error while inserting
			$response["success"] = 0;
			$response["message"] = "Error while adding Schedule";
		}					
	}else{
		//Some error while inserting
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