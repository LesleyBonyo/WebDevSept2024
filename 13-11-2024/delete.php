<?php
	//delete operation
	include 'connectdb.php';
	$deleteid = $_GET['deleteid'];
	$sql = "DELETE FROM students WHERE student_id=$deleteid";
	//execute query
	$result = mysqli_query($connect, $sql);
	if ($result) {
		//echo "Deleted successfully";
		header("location:display.php");
	} else{
		die(mysqli_connect());
	}





?>