<!DOCTYPE html>
<html lang="en">
  <head>
    <title>OOTOMAST</title>
    <meta name="description" content="A cool thing made with Glitch">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- import the webpage's stylesheet -->
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
      font-family: 'Montserrat', sans-serif;
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
      margin-top: 5px;
      margin-left: 20px;
  }

  .logo img{
    width: 140px;
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

  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    grid-gap: 10px;
  }

  .card{
    height: 200px;
    object-fit: cover;
    border: 1px solid blue;
    border-radius: 25px;
    margin: 20px;
  }

  .card:hover{
    background: green;
  }

  .float{
    position:fixed;
    width:60px;
    height:60px;
    bottom:40px;
    right:30px;
    background-color:#229c43;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    box-shadow: 2px 2px 3px #999;
  }

  .fa-plus{
    margin-top:22px;
  }

    /* Survey Modal */

    /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
  }

  /* The Close Button */
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  #navBtnCon{
    bottom: 0px;
    left: 50%;
    transform: translateX(-50%);
    position: fixed;
    width: 100%;
      /* max-width: 640px; */
    z-index: 1;
    text-align: center;
    display: inline-flex;
  }


  #prevBtn{
    margin: 5px;
    font-family: 'Montserrat', sans-serif;
  }

  #passBtn{
    margin: 5px;
    font-family: 'Montserrat', sans-serif;
  }

  #nextBtn{
    margin: 5px;
    font-family: 'Montserrat', sans-serif;
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

    .logo img{
      max-width: 150px;
    }

   .navbar-toggle {
       display: none;
    }
    .logo:hover,
    .nav-links:hover {
        color: rgba(255, 255, 255, 1);
    }

    .cards {
      max-width: 960px;
      margin: 0 auto 20px;
    }

    .card{
      height: 200px;
      object-fit: cover;
      border: 1px solid blue;
      border-radius: 25px;
      margin-top: 20px;
    }

    .float{
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      right:30px;
      background-color:#229c43;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      box-shadow: 2px 2px 3px #999;
    }

  </style>
  <script src="https://kit.fontawesome.com/637ce47f6a.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.com/libraries/bttn.css"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  </head>
  <body>
      <nav class="navbar" style="padding: 0;">
    <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fas fa-bars"></i>
    </span>
    <a href="#" class="logo"><img src="assets/ootomast.svg" class="animated fadeInLeft"></a>
      <ul class="main-nav" id="js-menu" style="margin-bottom: 0;">
        <li>
            <a href="index.php" class="nav-links">Surveys</a>
        </li>
        <li>
            <a href="resultsindex.php" class="nav-links" style="color: white;">Results</a>
        </li>
        <li>
            <a href="#" class="nav-links">About Us</a>
        </li>
  </nav>

      <header>
          <div style="margin: 15px 10px ; display: flex;">
              <h3 style="font-size: 25px"> Results </h3>
          </div>
      </header>

      <main>
      <div id="chartContainer">
        <canvas id="chart" width="800" height="450"></canvas>
      </div>

      <div id="navContainer">
        <div name="navButtons" id="navBtnCon" class="btn-group btn-group-justified">
          <div class="btn-group" style="width: 100%;">
            <button class="btn btn-primary btn-block" type="button" id="prevBtn" value="back" onclick="prev()">Back</button>
          </div>
          <div class="btn-group" style="width: 100%;">
            <button class="btn btn-primary btn-block" type="button" id="nextBtn" value="next" onclick="next()">Next</button>
          </div>
        </div>
      </div>
      </main>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    
      <script src="js/mdb.min.js"></script>
      <script src="js/papaparse.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="js/jquery.cookie.js"></script>

      <script type="text/javascript">
        //Parsing
        var qidIndex = 0;
        var surveyID;
        var surveyData;
        var resultsTotal = [];
        var qCode;
        var question = [];
        var cIndex;

        <?php $sId = $_POST["survey"]; ?>

        surveyID =  "<?php echo $sId ?>";

        setSurvey();
        initializeSurvey();

        function setSurvey(){
            surveyData = JSON.parse(localStorage.getItem(surveyID));
        }

        function initializeSurvey(){
            var survey = surveyData;
            var found = false;
            var iterate = qidIndex+1;
            var choicesContainer = document.getElementById("cBox");
        
            while(found != true){
                if(survey.data[iterate][0] == "^" && survey.data[iterate][1] > 0){
                  //alert("found");
                  found = true;
                  qidIndex = iterate;
                  qCode = survey.data[qidIndex][2];
                }
                else{
                    iterate = iterate + 1;
            }

            // Change Question Text
            if(found == true){
              //document.getElementById('qText').innerHTML = ""+survey.data[qidIndex][3];
              resultsCounter();
            }
          }
        }

        function next() {
          //Find next question
          var survey = surveyData;
          var found = false;
          var iterate = qidIndex+1;
          var choicesContainer = document.getElementById("cBox");
          

          while(found != true){
              if(survey.data[iterate][0] == "^" && survey.data[iterate][1] > 0){
                //alert("found");
                found = true;
                qidIndex = iterate;
                qCode = survey.data[qidIndex][2];
              }

              else{
                  iterate = iterate + 1;
              }
          }

            // Change Question Text
          if(found == true){
              //document.getElementById('qText').innerHTML = ""+survey.data[qidIndex][3];
              resultsCounter();
          }
          
        }

        function prev() {
          //Find previous question
          var survey = surveyData;
          var found = false;
          var iterate = qidIndex-1;
          var choicesContainer = document.getElementById("cBox");

          while(found != true){
            if(survey.data[iterate][0] == "^" && survey.data[iterate][1] > 0){
              //alert("found");
              found = true;
              qidIndex = iterate;
              qCode = survey.data[qidIndex][2];
          }
          else{
            iterate = iterate - 1;
            }
          }

          if(found == true){
            //document.getElementById('qText').innerHTML = ""+survey.data[qidIndex][3];
            resultsCounter()
          }

        }

        function resultsCounter(){
          var results = [];
          results = JSON.parse(localStorage.getItem('results'));
          var questionResults = [qCode, {}];
          var resultIndex;
          var finalCount = [];

          question = questionResults;

          // Find results data index to be displayed
          for(var i = 0; i < results.length; i++){
            if(results[i][0] == surveyID){
              resultIndex = i;
            }
          }

          //traverse the respondents
           for(var i = 1; i < results[resultIndex].length; i++){
            if(results[resultIndex][i][qCode] != 98 || results[resultIndex][i][qCode] != 99){
              if(results[resultIndex][i][qCode] != null){
                if(results[resultIndex][i][qCode].length > 1){
                  for(var j = 0; j < results[resultIndex][i][qCode].length; j++){
                    if(questionResults[1][results[resultIndex][i][qCode][j]] != null){
                      questionResults[1][results[resultIndex][i][qCode][j]] += 1;
                      question = questionResults;
                    }
                    else{
                      questionResults[1][results[resultIndex][i][qCode][j]] = 0;
                      questionResults[1][results[resultIndex][i][qCode][j]] += 1;
                      question = questionResults;
                    }
                  }
                }
                else{
                  if(questionResults[1][results[resultIndex][i][qCode]] != null){
                    questionResults[1][results[resultIndex][i][qCode]] += 1;
                    question = questionResults;
                  }
                  else{
                    questionResults[1][results[resultIndex][i][qCode]] = 0;
                    questionResults[1][results[resultIndex][i][qCode]] += 1;
                    question = questionResults;
                  }
                }
              }
            }
          }

          //removed undefined
          /*var filteredCount = questionResults[1].filter(function (el) {
            return el != undefined;
          });

          questionResults[1] = filteredCount;
          alert(filteredCount);*/
          
          for(var i = 0; i < getChoices().length; i++){
            if(questionResults[1][i] == null){
              finalCount[i] = 0;
            }
            else{
              finalCount[i] = questionResults[1][i];
            }
          }

          if(finalCount.length > 3)
            createBar(finalCount, getChoices());
          else 
            createPie(finalCount, getChoices());
        }

        function getChoices(){
          var survey = surveyData;
          cIndex = qidIndex+1;
          var cTextIndex = 3;
          var eof = 0;
          var labels = [];

          //Find each choices
          while(eof == 0){
            if(survey.data[cIndex][0] == "^" || survey.data[cIndex][0] == ""){
              eof = 1;
            }
            else{
              labels.push(survey.data[cIndex][cTextIndex]);
              cIndex = cIndex+1;
            }
          }

          return labels;
        } 
        
        function createBar(questionResults, labelsText)  {
          var survey = surveyData;
          document.getElementById("chartContainer").innerHTML = "";
          document.getElementById("chartContainer").innerHTML = "<canvas id='chart' width='800' height='450'></canvas>";
          new Chart(document.getElementById("chart"),{
            type: 'bar',
            data: {
              labels: labelsText,
              datasets: [{
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
                data: questionResults
              }]
            },
            options:{
              legend: { display: true},
              title: {
                display: true,
                text: survey.data[qidIndex][3]
              }
            } 

          });
        }

        function createPie(questionResults, labelsText)  {
          var survey = surveyData;
          document.getElementById("chartContainer").innerHTML = "";
          document.getElementById("chartContainer").innerHTML = "<canvas id='chart' width='800' height='450'></canvas>";

          new Chart(document.getElementById("chart"), {
            type: 'pie',
            data: {
              labels: labelsText,
              datasets: [{
                                backgroundColor: ["#3e95cd", "#8e5ea2"],
                data: questionResults
              }]
            },
            options: {
              title: {
                display: true,
                text: survey.data[qidIndex][3]
              } 
            }
          });
        }
      </script>

  </body>