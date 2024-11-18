<?php
	//connect to db
	$server = "localhost";
	$serveruser = "root";
	$serverpassword = "";
	$db = "websept";
	//establish the connection
	$connect = mysqli_connect($server, $serveruser, $serverpassword, $db);
	//confirm connection
	if (!$connect) {
		die(mysqli_connect_error($connect));
	}







?>