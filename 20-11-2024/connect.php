<?php
//conect to the db
	$connect = mysqli_connect('localhost','root', "", 'websept');
	if(!$connect){
		die(mysqli_connect_error($connect));
	}
?>