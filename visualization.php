<!DOCTYPE html>
<html lang="en">
  <head>
    <title>OOTOMAST</title>
    <meta name="description" content="A cool thing made with Glitch">
    <link id="favicon" rel="icon" href="https://glitch.com/edit/favicon-app.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="/mdb.min.css">
    <!-- import the webpage's client-side javascript file -->
    <script src="/client.js" defer></script>

  </head>
  <body>
      <header>
          <div style="margin: 15px 10px ; display: flex;">
              <h3 style="font-size: 25px"> Results </h3>
          </div>
      </header>

      <main>
          <div name="questionBox" id="qBox">
              <p name="questionText" id="qText"></p>
          </div>

          <div name="navButtons" id="navBtnCon">
            <form id="btnForm">
                <button class="btn btn-primary btn-lg" type="button" id="prevBtn" value="back" onclick="prev()">Back</button>
                <button class="btn btn-primary btn-lg"  type="button" id="nextBtn" value="next" onclick="next()">Next</button>
      </main>

      <script src="https://button.glitch.me/button.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>
    
      <script src="js/mdb.min.js"></script>
      <script src="js/papaparse.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="js/jquery.cookie.js"></script>

      <script type="text/javascript">
        //Parsing
        var qidIndex = 1;
        var surveyID;
        var surveyData;

        <?php $sId = $_POST["survey"]; ?>

        surveyID =  "<?php echo $sId ?>";

        setSurvey();
        initializeSurvey();

        window.onbeforeunload = function(event){
            event.returnValue = "Your custom message.";
        }

        function setSurvey(){
            surveyData = JSON.parse(localStorage.getItem(surveyID));
        }

        function initializeSurvey(){
            var survey = surveyData;
            var found = false;
            var iterate = qIndex+1;
            var choicesContainer = document.getElementById("cBox");
        
            while(found != true){
                if(survey.data[iterate][0] == "^"){
                //alert("found");
                found = true;
                qIndex = iterate;
            }
            else{
                iterate = iterate + 1;
            }

            // Change Question Text
            if(found == true){
            //alert(qIndex);
            noOfSelectable = survey.data[qIndex][1];
            if(translated == true){
                document.getElementById('qText').innerHTML = ""+survey.data[qIndex][(3+1)];
                //document.getElementById('qText').innerHTML = ""+survey.data[qIndex][(2+1)];
            }
            else{
                document.getElementById('qText').innerHTML = ""+survey.data[qIndex][3];
            }
        }

        function next() {
            //Find next question
            var survey = surveyData;
            var found = false;
            var iterate = qIndex+1;
            var choicesContainer = document.getElementById("cBox");
            var qCode = survey.data[qIndex][2];

            // Change Question Text
            if(found == true){
                //alert(qIndex);
                noOfSelectable = survey.data[qIndex][1];
                if(translated == true){
                    document.getElementById('qText').innerHTML = ""+survey.data[qIndex][(3+1)];
                    //document.getElementById('qText').innerHTML = ""+survey.data[qIndex][(2+1)];
                }
                else{
                    document.getElementById('qText').innerHTML = ""+survey.data[qIndex][3];
                }

            }

            function prev() {
                //Find previous question
                var survey = surveyData;
                var found = false;
                var iterate = qIndex-1;
                var choicesContainer = document.getElementById("cBox");
            }
        }
      </script>

  </body>