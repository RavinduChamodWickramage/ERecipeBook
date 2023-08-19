<?php
	$serverName = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "erecipebook";

	// Create connection
	$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["psw"];
    $repeatpassword = $_POST["rpsw"];
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (firstname, lastname, email, psw) values ('$firstname', '$lastname', '$email', '$hashedPwd');";
    if($conn->query($sql) == TRUE)
    {
        header("Location: ../Final/LoginPage.php");
        exit();
     }

if(isset($_POST["submit"])){
    
    
    // Validate user input
    $emptyInput = emptyInputSignup($firstname, $lastname, $email, $password, $repeatpassword);
    $invalidFname = invalidFname($firstname);
    $invalidLname = invalidLname($lastname);
    $invalidEmail = invalidEmail($email);
    $pswMatch = pswMatch($password, $repeatpassword);
    $uidExists = uidExists($conn, $firstname, $lastname, $email);
    
    if($emptyInput !== false){
        header("Location: SigninPage.html?error=emptyInput");
        exit();
    }
    if($invalidFname !== false){
        header("Location: SigninPage.html?error=invalidFirstname");
        exit();
    }
    if($invalidLname !== false){
        header("Location: SigninPage.html?error=invalidLastname");
        exit();
    }
    if($invalidEmail !== false){
        header("Location: SigninPage.html?error=invalidEmail");
        exit();
    }
    if($pswMatch !== false){
        header("Location: SigninPage.html?error=passwordUnmatch");
        exit();
    }
    if($uidExists !== false){
        header("Location: SigninPage.html?error=usernameExists");
        exit();
    }
    
    // Save user details in database
    createUser($conn, $firstname, $lastname, $email, $password);
    
    // Redirect the user to the login page with success message
    header("Location: LoginPage.html?signup=success");
    exit();
}
else{
    // Redirect user to login page if they didn't come from the signup page
    header("Location: http://localhost/ERecipeBook/Group%20Project/LoginPage.html");
    exit();
}
