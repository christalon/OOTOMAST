<?php

include('dbconfig.php');

$surveyCode = $_POST['sCode'];

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
