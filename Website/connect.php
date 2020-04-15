<?php
$dbServerName = "localhost:3306";
$dbUsername = "root";
$dbPassword = "";
$dbName = "oopmovie";

$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>