<?php 
	//form handling
	//pick the form data - using get method
	// $_GET
	/*if (isset($_GET['username'], $_GET['course'])) {
		// code...
		$username = $_GET['username'];
		$course = $_GET['course'];

		echo "$username welcome to $course";
	}*/
	// use post method $_POST
		if (isset($_POST['username'], $_POST['course'])) {
		// code...
		$username = $_POST['username'];
		$course = $_POST['course'];

		echo "$username welcome to $course";
	}


?>