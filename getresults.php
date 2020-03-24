<?php

$surveyID = $_POST["surveyID"];


//DATABASE CONNECTION VARIABLES
$host = "remotemysql.com"; // Host name
$username = "f6XDzBXhjr"; // Mysql username
$password = "SZclvI5DKB"; // Mysql password
$db_name = "f6XDzBXhjr"; // Database name

// Create connection
$conn = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

$result = $conn->query("SELECT questionCode, answer FROM respondents WHERE surveyID = '".$surveyID."'");

if($result->num_rows > 0){
	$rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    echo json_encode($rows);
}

