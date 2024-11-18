<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		table{
			width: 70%;
			margin: auto;
		}
		.row, button{
			color: white;
			background-color: darkblue;
			border: none;
		}

		a{
			color: white;
			text-decoration: none;

		}
		h1{
			text-align: center;
		}

	</style>
</head>
<body>
	<h1>Registered Students</h1>
	<table>
		<tr class="row">
			<th>Student Id</th>
			<th>Student Name</th>
			<th>Course</th>
			<th>Department</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		<?php
			// read operation
			// connect db
			include 'connectdb.php';
			$sql = "SELECT * FROM students";
			//execute query
			$result = mysqli_query($connect, $sql);
			if ($result) {
				//display the data
				/*$row = mysqli_fetch_assoc($result);
				$fullname = $row['student_name'];
				echo $fullname;*/
				while ($row = mysqli_fetch_assoc($result)) {
					$student_id = $row['student_id'];
					$student_name = $row['student_name'];
					$course = $row['course'];
					$department = $row['department'];
					echo "<tr>
			<td>$student_id</td>
			<td>$student_name</td>
			<td>$course</td>
			<td>$department</td>
			<td>
			<button>
				<a href='update.php?updateid=$student_id'>Update</a>
			</button></td>
			<td>
			<button>
				<a href='delete.php?deleteid=$student_id'>Delete</a>
			</button></td>
		</tr>";
				}
			} else {
				die(mysqli_error());
			}
		?>
	</table>
</body>
</html>