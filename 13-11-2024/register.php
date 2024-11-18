<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Handling</title>
</head>
<body>
	<h1>Register</h1>

	<form method="post">
		<label>Full Name</label>
	<input type="text" name="fullname" placeholder="enter username">
	<label>Course</label>
	<input type="text" name="course" placeholder="Enter course">
	<label>Department</label>
	<input type="text" name="department" placeholder="Enter course">
	<input type="submit" name="submit" value="Register">
	</form>
	<?php
		// create or insert operation
		// connect to db
	include 'connectdb.php';
	// check if the user has submitted the form
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		// pick the data
		$fullname = $_POST['fullname'];
		$course = $_POST['course'];
		$department = $_POST['department'];
		//write your query
		$sql = "INSERT INTO students(student_name, course, department) VALUES('$fullname', '$course', '$department')";
		//execute query
		$result = mysqli_query($connect, $sql);
		if ($result) {
			echo "Registration successful";
		} else{
			die(mysqli_error());
		}
	}


	?>
</body>
</html>