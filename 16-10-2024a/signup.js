function validateInputs(){
	// pick the values the user enters
	const username = document.getElementById('username').value;
	const email = document.getElementById('email').value;
	const password = document.getElementById('password').value;
	const cpassword = document.getElementById('cpassword').value;
	const result = document.getElementById('result');
	const result1 = document.getElementById('result1');
	//confirm is inputs are valid
	//if there is any empty elements
	if (username == "" || email == ""|| password == "" || cpassword == "") {
		alert("Fields should not be empty");

	}
	// if username has only alphabets
	// regular expressions - sequence of characters that match to a string
	if(!username.match(/^[A-Za-z]+$/)){
		result.innerHTML = "username should have only alphabets";
		return false;

	} else {
		result.innerHTML = "";
	}
	// if password length is > 8
	if (password.length < 8){
		result1.innerHTML = "password should have more that 8 characters";
		return false;
	} else {
		result1.innerHTML = "";
	}
	// if password has alphabets and numbers
	if (!password.match(/^[A-Za-z0-9]+$/)){
		result1.innerHTML = "password should alphabets and numbers";
		return false;
	} else {
		result1.innerHTML = "";
	}
	// if password is same as confirm password
	if (password != cpassword){
		result1.innerHTML = "password should match";
		return false;
	} else {
		result1.innerHTML = "";
	}
	
	alert("Successfully signed up");
	return true;


}