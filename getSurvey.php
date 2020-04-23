<?php

$surveyCode = $_POST['sCode'];

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

$result = $conn->query("SELECT surveyURL, surveyName FROM survey WHERE surveyCode = '".$surveyCode."'");

if($result->num_rows > 0){
	$rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    echo json_encode($rows);
}
