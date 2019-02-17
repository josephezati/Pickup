<?php
include 'db/db_connect.php';
//Query to select schedule id and date
$query = "SELECT id, date FROM schedule";
$result = array();
$scheduleArray = array();
$response = array();
//Prepare the query
if($stmt = $con->prepare($query)){
	$stmt->execute();
	//Bind the fetched data to $schId and $schDate
	$stmt->bind_result($schId,$schDate);
	//Fetch 1 row at a time					
	while($stmt->fetch()){
		//Populate the movie array
		$scheduleArray["id"] = $schId;
		$scheduleArray["date"] = $schDate;
		$result[]=$schArray;
		
	}
	$stmt->close();
	$response["success"] = 1;
	$response["data"] = $result;
	

}else{
	//Some error while fetching data
	$response["success"] = 0;
	$response["message"] = mysqli_error($con);
		
	
}
//Display JSON response
echo json_encode($response);

?>