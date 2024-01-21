<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "blox_fruits";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection FailedL " . mysqli_connect_error());
}