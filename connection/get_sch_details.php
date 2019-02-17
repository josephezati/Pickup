<?php
include 'db/db_connect.php';
$scheduleArray = array();
$response = array();
//Check for mandatory parameter id
if(isset($_GET['id'])){
	$scheduleId = $_GET['id'];
	//Query to fetch movie details
	$query = "SELECT message, date, place, child_id FROM schedule WHERE id=?";
	if($stmt = $con->prepare($query)){
		//Bind id parameter to the query
		$stmt->bind_param("i",$scheduleId);
		$stmt->execute();
		//Bind fetched result to variables $message, $date, $place and $child_id
		$stmt->bind_result($message,$date,$place,$child_id);
		//Check for results		
		if($stmt->fetch()){
			//Populate the movie array
			$scheduleArray["id"] = $scheduleId;
			$scheduleArray["message"] = $message;
			$scheduleArray["date"] = $date;
			$scheduleArray["place"] = $place;
			$scheduleArray["child_id"] = round($child_id,1);
			$response["success"] = 1;
			$response["data"] = $scheduleArray;
		
		
		}else{
			//When movie is not found
			$response["success"] = 0;
			$response["message"] = "Schedule not found";
		}
		$stmt->close();


	}else{
		//Whe some error occurs
		$response["success"] = 0;
		$response["message"] = mysqli_error($con);
		
	}

}else{
	//When the mandatory parameter id is missing
	$response["success"] = 0;
	$response["message"] = "missing parameter id";
}
//Display JSON response
echo json_encode($response);
?>