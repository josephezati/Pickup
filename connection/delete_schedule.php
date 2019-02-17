<?php
include 'db/db_connect.php';
$response = array();
//Check for mandatory parameter id
if(isset($_POST['id'])){
	$scheduleId = $_POST['id'];
	$query = "DELETE FROM schedule WHERE id=?";
	if($stmt = $con->prepare($query)){
		//Bind id parameter to the query
		$stmt->bind_param("id",$scheduleId);
		$stmt->execute();
		//Check if the schedule got deleted
		if($stmt->affected_rows == 1){
			$response["success"] = 1;			
			$response["message"] = "Schedule got deleted successfully";
			
		}else{
			$response["success"] = 0;
			$response["message"] = "Schedule not found";
		}					
	}else{
		$response["success"] = 0;
		$response["message"] = mysqli_error($con);
	}

}else{
	$response["success"] = 0;
	$response["message"] = "missing parameter id";
}
echo json_encode($response);
?>