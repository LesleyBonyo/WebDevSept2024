<?php
	session_start();
	if (!isset($_SESSION['email'],$_SESSION['id'])) {
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
	//adding a task
	include 'connect.php';//connect to db
	if ($_SERVER['REQUEST_METHOD']== "POST") {
		//pick the data
		$taskname = $_POST['task_name'];
		$duedate = $_POST['due_date'];
		$sql = "INSERT INTO tasks(taskname,duedate,studentid) VALUES('$taskname', '$duedate', $id)";
		//execute query
		$result = mysqli_query($connect, $sql);
		if ($result) {
			echo "<div class='formtext' style='color:red;'> Task Added Successfuly</div>";
		} else{
			echo "<div class='formtext' style='color:red;'> Task Not Added Successfuly</div>";
		}
	}
	?>
	</div>
	<h2>Pending Tasks</h2>
	<?php
	//display pending tasks
	$mysql = "SELECT * FROM tasks WHERE studentid=$id AND status='pending'";
	$result = mysqli_query($connect,$mysql); 
	if($result){
		while($row=mysqli_fetch_assoc($result)){
			$taskid = $row['taskid'];
			$taskname = $row['taskname'];
			$duedate = $row['duedate'];
			echo "<hr><div>
				<span>$taskname</span>
				<button>
				<a href='home.php?taskid=$taskid'>Done</a>
				</button>
			<p style='color: #282654;'>$duedate</p>
			</div>";
		}
	}

	?>
	<h2>Completed Tasks</h2>
	<?php
	//click done andthen display completed tasks
	if (isset($_GET['taskid'])) {
		$taskid = $_GET['taskid'];
		$sql = "UPDATE tasks SET status='completed' WHERE taskid= $taskid";
		$result = mysqli_query($connect,$sql);
		if (!$result) {
			die(mysqli_error());
		} else{
			header("Location:home.php");
		}
	}
	//display completed tasks
	$mysql = "SELECT * FROM tasks WHERE studentid=$id AND status='completed'";
	$result = mysqli_query($connect,$mysql); 
	if($result){
		while($row=mysqli_fetch_assoc($result)){
			$taskid = $row['taskid'];
			$taskname = $row['taskname'];
			$duedate = $row['duedate'];
			echo "<hr><div>
				<span style='text-decoration:line-through; color: grey;'>$taskname</span>
			<p style='color: #282654;'>$duedate</p>
			</div>";
		}
	}

	?>

	
	
</body>
</html>