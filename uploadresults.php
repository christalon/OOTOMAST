<?php

$surveyID = $_POST['sID'];
$surveyName = $_POST['sName'];
$resultsArray = $_POST['rArray'];

//DATABASE CONNECTION VARIABLES
$host = "localhost"; // Host name
$username = "id12624169_root"; // Mysql username
$password = "ootomast98"; // Mysql password
$db_name = "id12624169_ooto"; // Database name

// Create connection
$conn = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

for ($x = 0; $x < count($resultsArray); $x++) {
	$result = $conn->query("SELECT * FROM respondentlist WHERE respondentID = ".$resultsArray[$x][0]);
	if($result->num_rows == 0) {
		$result = $conn->query("INSERT INTO respondentlist (respondentID) VALUES (".$resultsArray[$x][0].")");
		for($y = 1 ; $y < count($resultsArray[$x]); $y++ ){
		    if(count($resultsArray[$x][$y]) == 2){
				$result = $conn->query("INSERT INTO respondents (surveyID, surveyName, respondentID, questionCode, answer) VALUES (".$surveyID.",'".$surveyName."',".$resultsArray[$x][0].",'".$resultsArray[$x][$y][0]."',".$resultsArray[$x][$y][1].")");
			}
		    else{
		    	for($j = 1; $j < count($resultsArray[$x][$y]); $j++){
		    		$result = $conn->query("INSERT INTO respondents (surveyID, surveyName, respondentID, questionCode, answer) VALUES (".$surveyID.",'".$surveyName."',".$resultsArray[$x][0].",'".$resultsArray[$x][$y][0]."',".$resultsArray[$x][$y][$j].")");
		    	}
		    }
		} 
	}
}

	




