<?php

define('DB_HOST', 'remotemysql.com:3036');
define('DB_NAME', 'aQ4VHAUFSM');
define('DB_USER', 'aQ4VHAUFSM');
define('DB_PASSWORD', 'L8fuvCAclt');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " .     mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



$userName = $_POST['username'];
$password =  $_POST['password'];
$query = "INSERT INTO user (username,password) VALUES ('$userName','$password')";
$data = mysql_query ($query)or die(mysql_error());
if($data)
{
echo "YOUR REGISTRATION IS COMPLETED...";
}
else
{
echo "Unknown Error!"
}
?>