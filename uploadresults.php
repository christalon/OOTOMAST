<?php

include('dbconfig.php');

$surveyID = $_POST['sID'];
$surveyName = $_POST['sName'];
$resultsArray = $_POST['rArray'];

// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

for ($x = 0; $x < count($resultsArray); $x++) {
	$result2 = $conn->query("SELECT * FROM respondentlist WHERE respondentID = ".$resultsArray[$x][0]);
	echo $resultsArray[$x][0]."\n";
	echo $x;
	
	if(!$result2){
	    trigger_error($x.'Invalid query: ' . $conn->error);
	}
	
	if($result2->num_rows == 0) {
		$result = $conn->query("INSERT INTO respondentlist (respondentID) VALUES (".$resultsArray[$x][0].")");
		for($y = 1 ; $y < count($resultsArray[$x]); $y++ ){
		    if(count($resultsArray[$x][$y]) == 2){
				$result = $conn->query("INSERT INTO respondents (surveyID, surveyName, respondentID, questionCode, answer) VALUES ('".$surveyID."','".$surveyName."',".$resultsArray[$x][0].",'".$resultsArray[$x][$y][0]."',".$resultsArray[$x][$y][1].")");
			}
		    else{
		    	for($j = 1; $j < count($resultsArray[$x][$y]); $j++){
		    		$result = $conn->query("INSERT INTO respondents (surveyID, surveyName, respondentID, questionCode, answer) VALUES ('".$surveyID."','".$surveyName."',".$resultsArray[$x][0].",'".$resultsArray[$x][$y][0]."',".$resultsArray[$x][$y][$j].")");
		    	}
		    }
		} 
	}
}

	




