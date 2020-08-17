<?php

include('dbconfig.php');

$surveyID = $_POST['sID'];
$surveyCode = $_POST['sCode'];
$surveyName = $_POST['sName'];

echo $surveyID;
echo $surveyCode;
echo $surveyName;

// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$result = $conn->query("INSERT INTO survey (surveyCode, surveyURL, surveyName) VALUES ('".$surveyCode."', '".$surveyID."', '".$surveyName."')");

	




