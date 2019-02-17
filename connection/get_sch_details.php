<?php
include 'db/db_connect.php';
$movieArray = array();
$response = array();
//Check for mandatory parameter movie_id
if(isset($_GET['movie_id'])){
	$movieId = $_GET['movie_id'];
	//Query to fetch movie details
	$query = "SELECT movie_name, genre, year, rating FROM movies WHERE movie_id=?";
	if($stmt = $con->prepare($query)){
		//Bind movie_id parameter to the query
		$stmt->bind_param("i",$movieId);
		$stmt->execute();
		//Bind fetched result to variables $movieName, $genre, $year and $rating
		$stmt->bind_result($movieName,$genre,$year,$rating);
		//Check for results		
		if($stmt->fetch()){
			//Populate the movie array
			$movieArray["movie_id"] = $movieId;
			$movieArray["movie_name"] = $movieName;
			$movieArray["genre"] = $genre;
			$movieArray["year"] = $year;
			$movieArray["rating"] = round($rating,1);
			$response["success"] = 1;
			$response["data"] = $movieArray;
		
		
		}else{
			//When movie is not found
			$response["success"] = 0;
			$response["message"] = "Movie not found";
		}
		$stmt->close();


	}else{
		//Whe some error occurs
		$response["success"] = 0;
		$response["message"] = mysqli_error($con);
		
	}

}else{
	//When the mandatory parameter movie_id is missing
	$response["success"] = 0;
	$response["message"] = "missing parameter movie_id";
}
//Display JSON response
echo json_encode($response);
?>