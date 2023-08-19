<?php

// Function to check if any input fields are empty
function emptyInputSignup($firstname, $lastname, $email, $password, $repeatpassword) {
    $result;
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($repeatpassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// Function to check if the first name is valid
function invalidFname($firstname) {
    $result;
    if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// Function to check if the last name is valid
function invalidLname($lastname) {
    $result;
    if (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// Function to check if the email is valid
function invalidEmail($email) {
    $result;
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// Function to check if the password and repeat password match
function pswMatch($password, $repeatpassword) {
    $result;
    if ($password !== $repeatpassword) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// Function to check if the user already exists in the database
function uidExists($conn, $firstname, $lastname, $email) {
    $sql = "SELECT * FROM users WHERE userFirstName = ? OR userLastName = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../SigninPage.html?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $firstname, $lastname, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

// Function to create a new user in the database
function createUser($conn, $firstname, $lastname, $email, $password) {
    $sql = "INSERT INTO users (userFirstName, userLastName, userEmail, userPassword) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../SigninPage.html?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../LoginPage.html?signup=success");
    exit();
}

?>
