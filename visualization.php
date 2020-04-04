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
  #navbarvis {
    font-size: 18px;
    background: linear-gradient(to right, rgba(78,126,78,1) 0%, rgba(9,58,8,1) 100%);
    border: 1px solid rgba(0, 0, 0, 0.2);
    padding-bottom: 10px;
    font-family: 'Montserrat', sans-serif;
    display: block;
    padding: .6rem .1rem;
    position: relative;
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
    margin-left: 20px;
  }

  .logo img{
    width: 140px;
    padding-bottom: .3rem;
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
    position: relative;
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

  #chartContainer{
    position: relative;
    margin: auto;
    height: 80vh;
    width: 80vw;
    margin-bottom: 10px;
  }

  #uploadBar{
    display: block;
    margin-left: auto;
  }

  @media screen and (min-width: 768px) {
    #navbarvis {
      display: flex;
      justify-content: space-between;
      padding-bottom: 0;
      height: 70px;
      align-items: center;
      padding: 0;
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

  #chartContainer{
    position: relative;
    margin: auto;
    height: 80vh;
    width: 80vw;
    margin-bottom: 10px;
  }

  #uploadBar{
    display: block;
    margin-left: auto;
  }

</style>
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://cdnjs.com/libraries/bttn.css"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/compiled-4.10.1.min.css">
<script src="https://kit.fontawesome.com/637ce47f6a.js" crossorigin="anonymous"></script>
</head>
<body>
  <div id="uploadingScreen" style="height: 100%;
  width: 100%;
  position: absolute;
  z-index: 9999;
  background: #4256459c;
  display:none;
  text-align: center">
  <h1 class="mx-auto" style="color: white;
  top: 50%;
  transform: translateY(-50%);
  position: relative;
  -webkit-transform: translateY(-50%);">
  Uploading Results...Please Wait
</h1>
<img style="
top: 50%;
transform: translateY(-50%);
position: relative;
-webkit-transform: translateY(-50%);
display: flex;
left: 50%;
-webkit-transform: translateX(-50%);" src="assets/loading2.gif">
</div>
<nav class="navbar" id="navbarvis">
  <span class="navbar-toggle" id="js-navbar-toggle">
    <i class="fas fa-bars"></i>
  </span>
  <a href="index.php" class="logo"><img src="assets/ootomast.svg" class="animated fadeInLeft"></a>
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
      <div name="navButtons" id="uploadBar" class="btn-group btn-group-justified" role="group">
        <button type="button" class="btn btn-primary" id="uploadBtn" style="
        margin-left: auto;" onclick="uploadResults()">Upload</button>
        <button type="button" class="btn btn-primary" id="uploadBtn" style="
        margin-left: auto;" onclick="downloadResults()">Download</button>
        <button type="button" class="btn btn-primary" id="optionsBtn" style="
        margin-left: auto;">Options</button>
      </div>
    </div>
  </header>

  <div id="sideBar" style="width: 100%; padding: 10px 20px 10px 20px;">
    <select id="qSelect" class="mdb-select md-form colorful-select dropdown-primary" multiple searchable="Search here..">
      <option value="" disabled selected>Choose questions</option>
    </select>
  </div>

  <main>
    <div id="chartContainer" style="display:flex; overflow: scroll; flex-direction: column;">
      
    </div>

    <footer class="page-footer font-small pt-4" style="background-color: #3d6e3d">
      <!-- Footer Links -->
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="index.php"> ootomast.com</a>
      </div>
      <!-- Copyright -->

    </footer>
  </main>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/FileSaver.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>
  <script src="js/mdb.min.js"></script>
  <script src="js/papaparse.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

  <script type="text/javascript">
        //Parsing


        var qidIndex = 0;
        var surveyID;
        var surveyData = [];
        var resultsTotal = [];
        var results = [];
        var qCode;
        var question = [];
        var cIndex;
        var resultsIndex;
        var qCodeList = [];

        <?php $sId = $_POST["survey"]; ?>

        surveyID =  "<?php echo $sId ?>";
        
        getResultsIndex();
        getSurveyData();

        let mainNav = document.getElementById('js-menu');
        let navBarToggle = document.getElementById('js-navbar-toggle');

        navBarToggle.addEventListener('click', function () {
          
          mainNav.classList.toggle('active');
        });

        $(document).ready(function() {
         $('.mdb-select').material_select();
       });

        $("#qSelect").change(function() {
          //resultsCounter($('select#qSelect').val());;
          iterateQuestions($('select#qSelect').val());
        });



        function setSurvey(){
          surveyData = JSON.parse(localStorage.getItem(surveyID));
        }
        
        function getResultsIndex(){
          var results = [];

          if(!localStorage.getItem("results")){
            
          }
          else{
            results = JSON.parse(localStorage.getItem("results"));
          
            for(i = 0; i < results.length; i++){
              if(results[i][0] == surveyID){
                resultsIndex = i;
              }
            }
          }
        }

        function initializeSurvey(){
          var survey = surveyData;
          var found = false;
          var finished = false;
          var iterate = qidIndex+1;
          var boxIterate = 1;
          var choicesContainer = document.getElementById("cBox");
          var qSelectBox = document.getElementById("qSelect");
          var surveyLength = survey.length;
          var results = [];
          
          while(found != true){
            if(survey[iterate][0] == "^" && survey[iterate][1] > 0){
                //alert("found");
                found = true;
                qidIndex = iterate;
                qCode = survey[qidIndex][2];
              }
              else{
                iterate = iterate + 1;
              }
            }

            while(finished != true){
              if(surveyLength != boxIterate){
                if(survey[boxIterate][0] == "^" && survey[boxIterate][1] > 0){
                  qSelectBox.innerHTML += "<option value="+survey[boxIterate][2]+">"+survey[boxIterate][3]+"</option>"
                  boxIterate = boxIterate + 1;
                }
                else{
                  boxIterate = boxIterate + 1;
                }
              }
              else{
                finished = true;
              }
            }

          // Change Question Text
          if(found == true){
            //document.getElementById('qText').innerHTML = ""+survey.data[qidIndex][3];
            //resultsCounter();
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
        
        function getResultsPhp(){
          var params = "surveyID=" + surveyID;
          
          xhr = new XMLHttpRequest();
          
          xhr.open("POST", "getresults.php");
          xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		    xhr.onreadystatechange = function() {//Call a function when the state changes.
          if(xhr.readyState == 4 && xhr.status == 200) {
            results = JSON.parse(xhr.responseText);
          }
        }
        
        xhr.send(params);
        
      }

      
      function getSurveyData(){
        var params = "sCode=" + surveyID;
        var data = [];
        var found = false;
        
        
        xhr = new XMLHttpRequest();
        xhr.open("POST", "getSurvey.php");
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    		xhr.onreadystatechange = function() {//Call a function when the state changes.
          if(xhr.readyState == 4 && xhr.status == 200) {
            data = JSON.parse(xhr.responseText);
            getSurveyCsv(surveyID, data[0].surveyURL);
          }
        }
        
        xhr.send(params);
      }
      
      function getSurveyCsv(code, path){
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() {
         if (xhr.readyState == XMLHttpRequest.DONE) {
        	        //alert(JSON.parse(xhr.responseText));
                  surveyData = Papa.parse(xhr.responseText);
                  surveyData = surveyData.data;
                  initializeSurvey();
                  getResultsPhp();
                }
              }
              xhr.open('POST', 'https://content.dropboxapi.com/2/files/download');
              xhr.setRequestHeader('Authorization', 'ACCESS KEY');
              xhr.setRequestHeader('Content-Type', 'application/octet-stream');
              xhr.setRequestHeader('Dropbox-API-Arg', '{"path":"'+path+'"}');
              xhr.send();
            }
            
            function iterateQuestions(questionCodeList){
             document.getElementById("chartContainer").innerHTML = "";
             var container = document.getElementById("chartContainer");
             
             for(var i = 0; i < questionCodeList.length; i++){
              var canvas = document.createElement('div');
              canvas.innerHTML = "<div class='container-md' style='margin:3%; position: relative'><canvas id='chart"+(i+1)+"'></canvas><div>";
              container.appendChild(canvas.firstChild);
              resultsCounter(questionCodeList[i], i+1);
            }
          }

          function resultsCounter(code, iteration){
            var questionResults;
            var finalCount = [];
            var dataset = [];
            var bardata = [];
            var labels = [];
            var maxValue = 0;
            var surveyQuestionTitle;
            var maxLabelLength = 0;
            
            
            labels = getChoices(code);
            
            for(var i = 0; i < results.length ; i++){
              if(results[i].questionCode == code && results[i].answer < 98){
                if(dataset[results[i].answer] == null){
                  dataset[results[i].answer] = 1;
                }
                else{
                  dataset[results[i].answer] += 1;
                }
              }
            }
            
            for(var i = 0; i < labels.length; i++){
              if(dataset[i] == null){
                dataset[i] = 0;
              }
              
              if(maxValue < dataset[i]){
                maxValue = dataset[i];
              }
              
              if(labels[i].length > maxLabelLength){
                maxLabelLength = labels[i].length;
              }
            }
            
            for (var i = 0; i < surveyData.length; i++){
              if(surveyData[i][2] == code){
                surveyQuestionTitle = surveyData[i][3];
              }
            }
            
            
            bardata.push({
              barPercentage: 0.5,
              label: "Respondent/s",
              data: dataset,
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"]
            })
            
            
            
            createBar(bardata, labels, maxValue, iteration, surveyQuestionTitle, maxLabelLength);
            
          }
          
          function getChoices(code){
            var survey = surveyData;
            cIndex = 0;
            var iterate = 0;
            var cTextIndex = 3;
            var finished = 0;
            var eof = 0;
            var labels = [];
            
          //Find each choices
          while(finished == 0){
            if(survey[iterate][0] == "^" || survey[iterate][0] == null){
              if(survey[iterate][2] == code){
                cIndex = iterate + 1;
                while(eof != 1){
                  if(survey[cIndex] == null){
                    eof = 1;
                    finished = 1;
                  }
                  else if(survey[cIndex][0] == "^"){
                    eof = 1;
                    finished = 1;
                  }
                  else{
                    labels.push(survey[cIndex][cTextIndex]);
                    cIndex = cIndex+1;
                  }
                }
              }
              else{
                iterate = iterate + 1;
              }
            }
            else{
              iterate = iterate + 1;
            }
          }
          
          return labels;
        } 
        
        function createBar(fCount, qLabels, maxValue, chartID, qTitle, maxLabelLength)  {
          var survey = surveyData;
          var ctx = document.getElementById("chart"+chartID).getContext("2d");
          var typeChart = "bar";
          var xOptions = [];
          var yOptions = [];
          
          if(maxLabelLength > 20){
            typeChart = "horizontalBar";
            
            xOptions.push({
              stacked: false,
              ticks: {
                beginAtZero: true,
                max: maxValue+10,
                stepSize: 0,
                callback: function(value, index, values) {
                  if (Math.floor(value) === value) {
                    return value;
                  }
                }
              }
            });
            
            yOptions.push({
              stacked: false,
              ticks: {
                beginAtZero: true
              }
            });
          }
          else{
           yOptions.push({
            stacked: false,
            ticks: {
              beginAtZero: true,
              max: maxValue+10,
              stepSize: 0,
              callback: function(value, index, values) {
                if (Math.floor(value) === value) {
                  return value;
                }
              }
            }
          });
           
           xOptions.push({
            stacked: false,
            ticks: {
              beginAtZero: true
            }
          });
         }
         
         new Chart(ctx,{
          type: typeChart,
          data: {
            labels: qLabels,
            datasets: fCount
          },
          options:{
            maintainAspectRatio: true,
            responsive: true,
            legend: { display: true},
            scales: {
              yAxes: yOptions,
              xAxes: xOptions
            },
            title: {
              fontSize: 17,
              text: qTitle,
              display: true,
            }
          } 
          
        });
       }

       function uploadResults(){
        var resultsArray = [];
        var qCodeList = [];
          //Find next question
          var survey = surveyData;
          var finished = false;
          var iterate = 1;
          var results = [];
          var surveyList = []
          var surveyName;
          results = JSON.parse(localStorage.getItem('results'));
          surveyList = JSON.parse(localStorage.getItem('surveyList'));
          var surveyLength = survey.length;
          
          for(i = 0; i < surveyList.length; i++){
            if(surveyList[i][0] == surveyID){
              surveyName = surveyList[i][1];
            }
          }

          while(finished != true){
            if(surveyLength != iterate){
              
              if(survey[iterate][0] == "^" && survey[iterate][1] > 0){
                qCodeList.push(survey[iterate][2]);
                iterate = iterate + 1;
              }
              else{
                iterate = iterate + 1;
              }
            }
            else{
              finished = true;
            }
          }

          for(var i = 2; i < results[resultsIndex].length; i++){
            resultsArray.push([results[resultsIndex][i]["respondentID"], []]); 
            for(var x = 0; x < qCodeList.length; x++){
              resultsArray[i-2][x+1] = new Array();
              resultsArray[i-2][x+1][0] = qCodeList[x];
              if(results[resultsIndex][i][qCodeList[x]] != 98 || results[resultsIndex][i][qCodeList[x]] != 99){
                if(results[resultsIndex][i][qCodeList[x]] != null){
                  if(results[resultsIndex][i][qCodeList[x]].length > 1){
                    for(var j = 0; j < results[resultsIndex][i][qCodeList[x]].length; j++){
                      resultsArray[i-2][x+1][j+1] = results[resultsIndex][i][qCodeList[x]][j];
                    }
                  }
                  else{
                    resultsArray[i-2][x+1][1] = results[resultsIndex][i][qCodeList[x]];
                  }
                }
              }
            }
          }


          document.getElementById("uploadingScreen").style.display = "block";
          
          var posting = $.post( "uploadresults.php", { rArray : resultsArray, sID : surveyID, sName : surveyName} );
          
          posting.done(function(  ) {
            document.getElementById("uploadingScreen").style.display = "none";
          });
          
          posting.fail(function(xhr, status, error) {
                  //Ajax request failed.
                  var errorMessage = xhr.status + ': ' + xhr.statusText
                  alert('Error - ' + errorMessage);
                  document.getElementById("uploadingScreen").style.display = "none";
                })
          
        }

        function downloadResults(){
          var csvResults = [];
          var csvData;
          var firstQCode;
          var respondentCount = 1;
          var csvIndex = 0;
          var surveyName;
          var fileName;
          var surveyList = [];
          surveyList = JSON.parse(localStorage.getItem('surveyList'));
          //List all question codes

          for(i = 0; i < surveyList.length; i++){
            if(surveyList[i][0] == surveyID){
              surveyName = surveyList[i][1];
            }
          }

          firstQCode = results[0].questionCode;

          for(var i = 0; i < results.length; i++){
            if(firstQCode == results[i].questionCode){
              csvResults[csvIndex] = respondentCount;
              csvResults.push([results[i].questionCode, results[i].answer]);
              respondentCount += 1;
              csvIndex += 1;
            }
            else{
              csvResults.push([results[i].questionCode, results[i].answer]);
              csvIndex += 1;
            }
          }

          csvData = Papa.unparse(results);
          fileName = surveyName+"-results.csv"

          var blob = new Blob([csvData],{type: "text/csv;charset=utf-8"});
          saveAs(blob, fileName);
          
        }
      </script>

    </body>