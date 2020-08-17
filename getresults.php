<?php

include('dbconfig.php');

$surveyID = $_POST["surveyID"];

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

