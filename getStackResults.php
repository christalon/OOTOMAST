<?php

$surveyID = $_POST["surveyID"];
$baseCode = $_POST["baseCode"];
$stackCodes = $_POST["stackCodes"];
$stackChoices = $_POST["stackChoices"];
$baseQuestionLength = $_POST["baseQuestionLength"];

$resultsTally = array();
$countStack = 1;

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

if(is_array($stackCodes) == true){
    $countStack = count($stackCodes);
    echo count($stackCodes);
}

for ($x = 0; $x < $countStack; $x++) {
    $stackData = array();
    for ($z = 0; $z < $stackChoices[$x]; $z++){
        $data = array();
        for ($y = 0; $y < $baseQuestionLength; $y++){
            
            if(is_array($stackCodes) == true){
                $result = $conn->query("SELECT DISTINCT t1.respondentID FROM (SELECT * FROM respondents WHERE surveyID = '". $surveyID ."' AND (questionCode = '". $baseCode ."' AND answer = '". $y ."')) t1 INNER JOIN (SELECT * FROM respondents WHERE surveyID = '". $surveyID ."' AND (questionCode = '". $stackCodes[$x] ."' AND answer = '". $z ."')) t2 WHERE t1.respondentID = t2.respondentID");
            }
            else{
                $result = $conn->query("SELECT DISTINCT t1.respondentID FROM (SELECT * FROM respondents WHERE surveyID = '". $surveyID ."' AND (questionCode = '". $baseCode ."' AND answer = '". $y ."')) t1 INNER JOIN (SELECT * FROM respondents WHERE surveyID = '". $surveyID ."' AND (questionCode = '". $stackCodes ."' AND answer = '". $z ."')) t2 WHERE t1.respondentID = t2.respondentID");
            }
            
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

