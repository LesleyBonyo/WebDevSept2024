<?php
	//connect to db
	include 'connect.php';
	$success = 0;
	$unsuccess = 0;
	//check if user has clicked on signup
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//pick the data
		$email = $_POST['email'];
		$password = $_POST['password'];
		$hash = password_hash($password, PASSWORD_DEFAULT);
		//write query
		$sql = "INSERT INTO accounts(email,password) VALUES('$email','$hash')";
		//execute query
		$result = mysqli_query($connect, $sql);
		if ($result) {
			//echo "signup succesful";
			$success = 1;
		} else{
			$unsuccess = 1;
			//echo "Not succesful";
			//die(mysqli_error())
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<ol id="nav">
		<li class="left"><a href="login.php">TaskApp</a></li>
		<li class="right"><a href="signup.php" class="active">Signup</a></li>

		<li class="right"><a href="#">About</a></li>
			</ol>
	<h1>Sign Up</h1>
	<div id="signupform">
		<form method="post">
			<?php
				if ($success) {
					echo "<div class='formtext'style='color:red;'> Signup successful</div>";
				}
				if ($unsuccess) {
					echo "<div class='formtext' style='color:red;'> Signup unsuccessful</div>";
				}

			?>
			<label>Email</label>
			<input type="email" name="email" placeholder="Enter email" id="email" required>
			
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter password" id="password" required>
			
			<input type="submit" name="signup" value="signup">
			<div class="formtext">Already have an account? <a href="login.php">Login</a></div>
		</form>
	</div>

	
</body>
</html>