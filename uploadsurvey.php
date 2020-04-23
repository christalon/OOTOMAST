<?php

$surveyID = $_POST['sID'];
$surveyCode = $_POST['sCode'];
$surveyName = $_POST['sName'];

echo $surveyID;
echo $surveyCode;
echo $surveyName;

//DATABASE CONNECTION VARIABLES
$host = "remotemysql.com"; // Host name
$username = "f6XDzBXhjr"; // Mysql username
$password = "Password"; // Mysql password
$db_name = "f6XDzBXhjr"; // Database name

// Create connection
$conn = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$result = $conn->query("INSERT INTO survey (surveyCode, surveyURL, surveyName) VALUES ('".$surveyCode."', '".$surveyID."', '".$surveyName."')");

	




