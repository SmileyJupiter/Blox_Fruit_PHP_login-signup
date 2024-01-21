<?php

function emptyInputSignup($age, $username, $password, $repeatpassword){
    $result;
    if (empty($age) || empty($username) || empty($password) || empty($repeatpassword)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $repeatpassword) {
    $result;
    if ($password !== $repeatpassword) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function passwordLength($password) {
    $result;
    if (strlen($_POST["password"]) < 8) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function usernameTaken($conn, $username) {
    $sql = "SELECT * FROM users WHERE Username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $age, $username, $password) {
    $sql = "INSERT INTO users (Age, Username, Passwords) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $age, $username, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../login.php?error=none");
        exit();
}

function emptyInputLogin($username, $password) {
    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function loginUser($conn, $username, $password) {
    $usernameTaken = usernameTaken($conn, $username);

    if ($usernameTaken === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $passwordhashed = $usernameTaken["Passwords"];
    $checkPassword = password_verify($password, $passwordhashed);

    if ($checkPassword === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPassword === true) {
        session_start();
        $_SESSION["id"] = $usernameTaken["ID"];
        $_SESSION["username"] = $usernameTaken["Username"];
        header("location: ../main.php");
        exit();
    }
}