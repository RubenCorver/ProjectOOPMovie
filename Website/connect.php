<?php
$dbServerName = "remotemysql.com:3306";
$dbUsername = "aQ4VHAUFSM";
$dbPassword = "L8fuvCAclt";
$dbName = "aQ4VHAUFSM";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>