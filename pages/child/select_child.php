<?php
include'../../db_connection.php';
$sql = $conn->query("SELECT c.fname,c.lname,c.class,s.school_name,r.cell FROM child c, school s, residence r WHERE c.idschool=s.idschool AND c.idresidence = r.idresidence");
$i=1;
if($sql->num_rows > 0){
while($row=mysqli_fetch_assoc($sql)){
	$level = $row['class'];
	switch ($level) {
		case '1':
			$level = "Reception Class";
			break;
		case '2':
			$level = "Reception Class";
			break;
		case '3':
			$level = "Reception Class";
			break;
		case '4':
			$level = "Reception Class";
			break;
		case '5':
			$level = "Reception Class";
			break;
		case '6':
			$level = "Reception Class";
			break;
		case '7':
			$level = "Reception Class";
			break;
		case '8':
			$level = "Reception Class";
			break;
		case '9':
			$level = "Reception Class";
			break;
		case '10':
			$level = "Reception Class";
			break;
		
		default:
			# code...
			break;
	}
	echo '<tr><td>'.$i.'</td><td>'.$row['fname'].' '.$row['lname'].'</td><td>'.$level.'</td><td>'.$row['school_name'].'</td><td>'.$row['cell'].'</td></tr>';
	$i++;
}
}else{
	echo '<tr><strong class="text-info text-center">No records found</strong></tr>';
}
?>