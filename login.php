<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "erecipebook";

// Create connection
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);


if (isset($_POST['uname']) and isset($_POST['psw'])) {

	// Assigning POST values to variables.
	$username = $_POST['uname'];
	$password = $_POST['psw'];


	// CHECK FOR THE RECORD FROM TABLE
	$query = "SELECT * FROM users WHERE email='$username'";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$count = mysqli_num_rows($result);

	if ($count == 1) {

		$query2 = "SELECT psw FROM users WHERE email='$username'";
		$result = mysqli_query($conn, $query2) or die(mysqli_error($conn));
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$hash = $row['psw'];
		if (password_verify($password, $hash)) {
			header("Location: ../Final/HomePage.php");
		} else {
			echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
		}
	} else {
		echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
		//echo "Invalid Login Credentials";
	}
}



	// if(isset($_POST["submit"])){
	// 	$username = $_POST["uname"];
	// 	$password = $_POST["psw"];
		
	// 	require_once 'dhb.php';
	// 	require_once 'functions.php';
		
	// 	if(emptyInputs($username, $password) !== false){
	// 		//header("Location: LoginPage.html");
	// 		exit();
	// 	}
		
	// 	loginUser($conn, $username, $password);
	// }
	// else{
	// 	header("Location: http://localhost/ERecipeBook/Group%20Project/LoginPage.html");
	// }
