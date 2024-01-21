<?php

if (isset($_POST["submit"])) {
    
    $age = $_POST["age"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repeatpassword = $_POST["repeatpassword"];

    require_once 'database.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($age, $username, $password, $repeatpassword) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUsername($username) !== false) {
        header("location: ../signup.php?error=invalidusername");
        exit();
    }

    if (passwordMatch($password, $repeatpassword)) {
        header("location: ../signup.php?error=passworddontmatch");
        exit();
    }

    if (usernameTaken($conn, $username)) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    if (passwordLength($password)){
        header("location: ../signup.php?error=password-needs-8-character-or-more");
        exit();
    }

    createUser($conn, $age, $username, $password);

}
else {
    header("location: ../signup.php");
    exit();
}