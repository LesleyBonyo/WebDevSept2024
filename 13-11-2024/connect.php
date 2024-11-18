<?php
	//connect to db server
	$server = "localhost";
	$serveruser = "root";
	$serverpassword = "";
	//establish the connection
	$connect = mysqli_connect($server, $serveruser, $serverpassword);
	//confirm connection
	if ($connect) {
		echo "Connection successful";
	} else{
		//echo "No successful";
		die(mysqli_connect_error($connect));
	}
	// create a database
	$sql = "CREATE DATABASE websept";
	//execute query
	$result = mysqli_query($connect, $sql);
	if ($result) {
		echo "Database created successfully";
	} else{
		die(mysqli_error());
	}


?>