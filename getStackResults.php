<?php

include('dbconfig.php');

$surveyID = $_POST["surveyID"];
$baseCode = $_POST["baseCode"];
$stackCodes = $_POST["stackCodes"];
$stackChoices = $_POST["stackChoices"];
$baseQuestionLength = $_POST["baseQuestionLength"];

$resultsTally = array();
$countStack = 1;

// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

for ($x = 0; $x < count($stackCodes); $x++) {
    $stackData = array();
    for ($z = 0; $z < $stackChoices[$x]; $z++){
        $data = array();
        for ($y = 0; $y < $baseQuestionLength; $y++){
        
            $result = $conn->query("SELECT DISTINCT t1.respondentID FROM (SELECT * FROM respondents WHERE surveyID = '". $surveyID ."' AND (questionCode = '". $baseCode[0] ."' AND answer = '". $y ."')) t1 INNER JOIN (SELECT * FROM respondents WHERE surveyID = '". $surveyID ."' AND (questionCode = '". $stackCodes[$x] ."' AND answer = '". $z ."')) t2 WHERE t1.respondentID = t2.respondentID");
            
            if (!$result) {
                trigger_error('Invalid query: ' . $conn->error);
            }
            
            if($result->num_rows > 0){
                $rows = array();
                while($r = mysqli_fetch_assoc($result)) {
                    $rows[] = $r;
                }
                array_push($data, $rows);
            }
            else{
                $rows = array();
                array_push($data, $rows);
            }
        }
        array_push($stackData, $data);
    }
    array_push($resultsTally, $stackData);
}

echo json_encode($resultsTally);

