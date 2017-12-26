<?php
	$errEmail = "";
	$errFirst = "";
	$errLast = "";
	$errPassword = "";
	$errRePassword = "";
	if(isset($_POST["btnSign"])){
		$valid = 7;
		$txtEmail = $_POST["txtEmail"];
		$txtFirst = $_POST["txtFirst"];
		$txtLast = $_POST["txtLast"];
		$txtPassword = $_POST["txtPassword"];
		$txtRePassword = $_POST["txtRePassword"];

	if(!filter_var($txtEmail, FILTER_VALIDATE_EMAIL)){
		$errEmail = "Please put the Valid Email Address";
		$valid++;
	}
	if ($txtEmail == "") {
		$errEmail = "Plase Enter Email Address";
		$valid++;
	}
	if ($txtFirst == "") {
		$errFirst = "Please Enter Your FirstName";
		$valid++;
	}
	if ($txtLast == "") {
		$errLast = "Please Enter Your LastName";
		$valid++;
	}
	if ($txtPassword == "") {
		$errPassword = "Please Enter Your Password";
		$valid++;
	}

	if ($txtRePassword != $txtPassword) {
		$errRePassword = "Your Retype password is not match to your password";
		$valid++;
	}
		if ($txtRePassword == "") {
		$errRePassword = "Please Enter Retype Password";
		$valid++;

	}
	if ($valid == 7) {
		header("Location: here.php");
	}
	}
?>