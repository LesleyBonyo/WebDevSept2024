<?php
	session_start();
	//check if user has logged in
	if(!isset( $_SESSION['email'],$_SESSION['id'])){
		header("Location:login.php");
	}
	$email = $_SESSION['email'];
	$id = $_SESSION['id'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="home.css">
</head>
<body>
	<ol id="nav">
		<li class="left"><a href="home.php"><?php echo "Welcome $email"; ?></a></li>
		<li class="right"><a href="logout.php" >Logout</a></li>
				
	</ol>
	<h1>Student Task App</h1>
	<hr>
	
	<div id="taskform">
		<h2 id="taskh2">Add Task</h2>
	<form method="post">
	<label>Task Name: </label>
	<input type="text" name="task_name" required>
	<label>Due Date: </label>
	<input type="date" name="due_date">
	<input type="submit" name="add" value="Add Task" required>
</form>
	<?php
	//add tasks
	include 'connect.php'; //connect to db
	//check if the user has clicked on add task
	if($_SERVER['REQUEST_METHOD']=="POST"){
		//pick the data
		$taskname = $_POST['task_name'];
		$duedate = $_POST['due_date'];
		//write query
		$sql = "INSERT INTO tasks(taskname, duedate, studentid) VALUES('$taskname','$duedate', $id)";
		//execute query
		$result = mysqli_query($connect, $sql);
		if ($result) {
			echo "<div class='formtext' style='color:pink;'> Task added successfully</div>";
		} else{
			echo "<div class='formtext' style='color:red;'> Task Not added</div>";
		}
	}
	?>
	</div>
	<h2>Pending Tasks</h2>
	<?php
	//display pending tasks
	$sql = "SELECT * FROM tasks WHERE studentid=$id AND status='pending'"; //write query
	$result = mysqli_query($connect, $sql); //execute query
	if ($result) {
		while($row=mysqli_fetch_assoc($result)){
			$taskid = $row['taskid'];
			$taskname = $row['taskname'];
			$duedate = $row['duedate'];
			$status = $row['status'];
			echo "<hr>
			<div><span>$taskname</span>
			<p style='padding:5px;'>$duedate<span style='color:pink'> $status</span></p>
			<button style='border:none;'><a href='home.php?taskid=$taskid' style='text-decoration:none;'>Done</a></button>
			</div>";
		}
	}

	?>
	<h2>Completed Tasks</h2>
	<?php
	//changetask status
	if (isset($_GET['taskid'])) {
		$taskid = $_GET['taskid'];
		//write query
		$sql = "UPDATE tasks SET status='completed' WHERE taskid=$taskid";
		$result = mysqli_query($connect, $sql);
		if ($result) {
			header("Location:home.php");
		} else{
			echo "<script>alert('Not successful');</script>";
		}
	}
	//display competed tasks
	$sql = "SELECT * FROM tasks WHERE studentid=$id AND status='completed'"; //write query
	$result = mysqli_query($connect, $sql); //execute query
	if ($result) {
		while($row=mysqli_fetch_assoc($result)){
			$taskid = $row['taskid'];
			$taskname = $row['taskname'];
			$duedate = $row['duedate'];
			$status = $row['status'];
			echo "<hr>
			<div><span style='text-decoration:line-through; color: grey;'>$taskname</span>
			<p style='padding:5px;'>$duedate<span style='color:pink'> $status</span></p>
			</div>";
		}
	}

	?>

	
	
	
</body>
</html>