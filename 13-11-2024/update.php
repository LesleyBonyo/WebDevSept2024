<?php
	include 'connectdb.php';
	$updateid = $_GET['updateid'];
	$mysql = "SELECT * FROM students WHERE student_id=$updateid";
	$myresult = mysqli_query($connect, $mysql);
	if ($myresult) {
		$row = mysqli_fetch_assoc($myresult);
		$student_name = $row['student_name'];
		$course = $row['course'];
		$department = $row['department'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
</head>
<body>
	<h1>Update Student Details</h1>

	<form method="post">
		<label>Full Name</label>
	<input type="text" name="fullname" placeholder="enter username" value="<?php echo $student_name; ?>">
	<label>Course</label>
	<input type="text" name="course" placeholder="Enter course" value="<?php echo $course; ?>">
	<label>Department</label>
	<input type="text" name="department" placeholder="Enter course" value="<?php echo $department; ?>">
	<input type="submit" name="submit" value="Update">
	</form>
	<?php
		// update operation
		// connect to db
	
	// check if the user has submitted the form
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		// pick the data
		$fullname = $_POST['fullname'];
		$course = $_POST['course'];
		$department = $_POST['department'];
		//write your query
		$sql = "UPDATE students SET student_name='$fullname', course= '$course', department='$department' WHERE student_id= $updateid";
		//execute query
		$result = mysqli_query($connect, $sql);
		if ($result) {
			//echo "Registration successful";
			header("location:display.php");
		} else{
			die(mysqli_error());
		}
	}


	?>
</body>
</html>