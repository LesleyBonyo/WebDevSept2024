<?php
	//connect to db
	include 'connect.php';
	//$success = 0;
	$unsuccess = 0;

	//check if user submits form
	if($_SERVER['REQUEST_METHOD']=="POST"){
		//pick data
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM accounts WHERE email='$email'";
		$result = mysqli_query($connect, $sql);
		if ($result) {
			//check if there is any record outputted
			if(mysqli_num_rows($result)>0){
				//get the hash from db
				$row = mysqli_fetch_assoc($result);
				$hash = $row['password'];
				$id = $row['studentid']; //pick id from db
				//compare the password and its hash
				if(password_verify($password, $hash)){
					//echo "login successful";
					//$success = 1;
					//session- use data accross multiple pages
					//start user session
					session_start();
					// create session variables
					$_SESSION['email'] = $email;
					$_SESSION['id'] = $id;
					header("Location:home.php");
				} else{
					//echo "not successful";
					$unsuccess = 1;
				}
			}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<ol id="nav">
		<li class="left"><a href="login.php" class="active">TaskApp</a></li>
		<li class="right"><a href="signup.php" >Signup</a></li>
		<li class="right"><a href="#">About</a></li>
		
	</ol>
	<h1>Login</h1>
	<div id="loginform">
		<form method="post">
			
			<label>Email</label>
			<input type="email" name="email" placeholder="Enter email" id="email" required>
			
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter password" id="password" required>
			
			<input type="submit" name="login" value="login">
			<div class="formtext">Dont have an account? <a href="signup.php">Signup</a></div>
		</form>
	</div>
	<?php
	if ($unsuccess) {
		echo "<div class='formtext' style='color:red;'> password or email is incorrect</div>";
	}
	 ?>

	
</body>
</html>