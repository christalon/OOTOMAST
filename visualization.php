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
    <style>
  * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
  }
  body {
      font-family: 'Josefin Sans', sans-serif;
  }
  .navbar {
      font-size: 18px;
      background: linear-gradient(to right, rgba(78,126,78,1) 0%, rgba(9,58,8,1) 100%);
      border: 1px solid rgba(0, 0, 0, 0.2);
      padding-bottom: 10px;
  }
  .main-nav {
      list-style-type: none;
  }
  .nav-links,
  .logo {
      text-decoration: none;
      color: rgba(255, 255, 255, 0.7);
  }
  .main-nav li {
    text-align: center;
    margin: 15px auto;
  }
  .logo {
      display: inline-block;
      font-size: 22px;
      margin-top: 10px;
      margin-left: 20px;
  }

  .navbar-toggle {
    position: absolute;
    top: 10px;
    right: 20px;
    cursor: pointer; 
    color: rgba(255,255,255,0.8);
    font-size: 24px;
  }

  .main-nav {
    list-style-type: none;
    display: none;
  }

  .active {
    display: block;
  }

  @media screen and (min-width: 768px) {
    .navbar {
        display: flex;
        justify-content: space-between;
        padding-bottom: 0;
        height: 70px;
        align-items: center;
    }
    .main-nav {
        display: flex;
        margin-right: 30px;
        flex-direction: row;
        justify-content: flex-end;
    }
    .main-nav li {
        margin: 0;
    }
    .nav-links {
        margin-left: 40px;
    }
    .logo {
        margin-top: 0;
    }
   .navbar-toggle {
       display: none;
    }
    .logo:hover,
    .nav-links:hover {
        color: rgba(255, 255, 255, 1);
    }

    /* Grid item css */

  </style>
  </head>
  <body>
      <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <a href="#" class="logo">logo</a>
          <ul class="main-nav" id="js-menu">
            <li>
                <a href="index.php" class="nav-links">Surveys</a>
            </li>
            <li>
                <a href="visualization.php" class="nav-links">Results</a>
            </li>
            <li>
                <a href="#" class="nav-links">About Us</a>
            </li>
            <li>
                <a href="#" class="nav-links">Logout</a>
            </li>
      </nav>

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