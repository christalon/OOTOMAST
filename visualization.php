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
  <script src="https://kit.fontawesome.com/637ce47f6a.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.com/libraries/bttn.css"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="css/compiled-4.10.1.min.css">
  </head>
  <body>
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
              <button type="button" class="btn btn-primary" id="optionsBtn" style="
              margin-left: auto;">Options</button>
            </div>
          </div>
      </header>

      <div id="sideBar" style="width: 100%; padding: 10px 20px 10px 20px;">
        <select id="qSelect" class="mdb-select md-form colorful-select dropdown-primary" multiple searchable="Search here..">
          <option value="" disabled selected>Choose questions</option>
        </select>
        <select id="cSelect" class="mdb-select" multiple searchable="Search here..">
          <option value="" disabled selected>Filter choices</option>
        </select>
      </div>

      <main>
      <div id="chartContainer">
        <canvas id="chart" width="800" height="450"></canvas>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
      <script src="js/mdb.min.js"></script>
      <script src="js/papaparse.js"></script>

      <script type="text/javascript">
        //Parsing
        var qidIndex = 0;
        var surveyID;
        var surveyData;
        var resultsTotal = [];
        var qCode;
        var question = [];
        var cIndex;
        var resultsIndex;

        <?php $sId = $_POST["survey"]; ?>

        surveyID =  "<?php echo $sId ?>";

        setSurvey();
        initializeSurvey();

        let mainNav = document.getElementById('js-menu');
        let navBarToggle = document.getElementById('js-navbar-toggle');

        navBarToggle.addEventListener('click', function () {
            
            mainNav.classList.toggle('active');
        });

        $(document).ready(function() {
         $('.mdb-select').material_select();
        });

        $("#qSelect").change(function() {
          //resultsCounter($('select#qSelect').val());
          listChoices($('select#qSelect').val());
        });

        $("#cSelect").change(function() {
          resultsCounter($('select#qSelect').val(), $('select#cSelect').val());
        });





        function setSurvey(){
            surveyData = JSON.parse(localStorage.getItem(surveyID));
        }

        function initializeSurvey(){
          var survey = surveyData;
          var found = false;
          var finished = false;
          var iterate = qidIndex+1;
          var boxIterate = 1;
          var choicesContainer = document.getElementById("cBox");
          var qSelectBox = document.getElementById("qSelect");
          var surveyLength = survey.data.length;
      
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

          while(finished != true){
            if(surveyLength != boxIterate){
              if(survey.data[boxIterate][0] == "^" && survey.data[boxIterate][1] > 0){
                qSelectBox.innerHTML += "<option value="+survey.data[boxIterate][2]+">"+survey.data[boxIterate][3]+"</option>"
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

        function listChoices(qCodeList){
          var survey = surveyData;
          cIndex = 0;
          var iterate = 0;
          var cTextIndex = 3;
          var finished = 0;
          var eof = 0;
          var choiceBox = document.getElementById("cSelect");

          choiceBox.innerHTML = "";

          //Find each choices
          for(var i = 0; i < qCodeList.length; i++){
            while(finished != 1){
              if(survey.data[iterate][0] == "^" || survey.data[iterate][0] == ""){
                if(survey.data[iterate][2] == qCodeList[i]){
                  choiceBox.innerHTML += "<optgroup label='"+ survey.data[iterate][3] +"'>";
                  cIndex = iterate + 1;
                  while(eof != 1){
                    if(survey.data[cIndex][0] == "^" || survey.data[cIndex][0] == ""){
                      finished = 1;
                      eof = 1;
                      choiceBox.innerHTML += "</optgroup>"
                    }
                    else{
                      choiceBox.innerHTML += "<option value="+ survey.data[iterate][2] +"-"+ survey.data[cIndex][2] +">"+ survey.data[cIndex][3] +"</option>";
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
            finished = 0;
            eof = 0;
          }
        }

        function resultsCounter(qCodeList, cCodeList){
          var results = [];
          results = JSON.parse(localStorage.getItem('results'));
          var questionResults;
          var finalCount = [];
          var dataset = [];
          var labels = [];
          var match = 0;
          var xlength = 0;
          var xIndex = 0;

          question = questionResults;

          // Find results data index to be displayed
          for(var i = 0; i < results.length; i++){
            if(results[i][0] == surveyID){
              resultIndex = i;
            }
          }

          if(qCodeList.length == 1){
            //traverse the respondents
            for(var k = 0; k < qCodeList.length; k++){
              questionResults = [qCodeList[k], {}];
              finalCount = [];
              for(var l = 0; l < cCodeList.length; l++){
                for(var i = 1; i < results[resultIndex].length; i++){
                  if(results[resultIndex][i][qCodeList[k]] != 98 || results[resultIndex][i][qCodeList[k]] != 99){
                    if(results[resultIndex][i][qCodeList[k]] != null){
                      if(results[resultIndex][i][qCodeList[k]].length > 1){
                        for(var j = 0; j < results[resultIndex][i][qCodeList[k]].length; j++){
                          if(cCodeList[l].includes(qCodeList[k] +"-"+ results[resultIndex][i][qCodeList[k]]) == true){
                            if(questionResults[1][results[resultIndex][i][qCodeList[k]][j]] != null){
                              questionResults[1][results[resultIndex][i][qCodeList[k]][j]] += 1;
                              question = questionResults;
                            }
                            else{
                              questionResults[1][results[resultIndex][i][qCodeList[k]][j]] = 0;
                              questionResults[1][results[resultIndex][i][qCodeList[k]][j]] += 1;
                              question = questionResults;
                            }
                          }
                        }
                      }
                      else{
                        if(cCodeList[l].includes(qCodeList[k] +"-"+ results[resultIndex][i][qCodeList[k]]) == true){
                          if(questionResults[1][results[resultIndex][i][qCodeList[k]]] != null){
                            questionResults[1][results[resultIndex][i][qCodeList[k]]] += 1;
                            question = questionResults;
                          }
                          else{
                            questionResults[1][results[resultIndex][i][qCodeList[k]]] = 0;
                            questionResults[1][results[resultIndex][i][qCodeList[k]]] += 1;
                            question = questionResults;
                          }
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
              }

              labels = getChoices(qCodeList[k]);

                for(var i = 0; i < labels.length; i++){
                  if(questionResults[1][i] == null){
                    finalCount[i] = 0;
                  }
                  else{
                    finalCount[i] = questionResults[1][i];
                  }
                }

                dataset.push({
                  label: 'Respondent/s',
                  data: finalCount,
                  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"]
                })
            }
          }
          else if(qCodeList.length > 1){
            finalCount = {};

            for(var a = 0; a < cCodeList.length; a++){
              if(cCodeList[a].match(qCodeList[0]) != null){
                xlength += 1;
              }
            }

            for(var i = 1; i < results[resultIndex].length; i++){
              match = 0;
              for(var k = 0; k < qCodeList.length; k++){
                for(var l = 0; l < cCodeList.length; l++){
                    if(results[resultIndex][i][qCodeList[k]] != 98 || results[resultIndex][i][qCodeList[k]] != 99){
                      if(results[resultIndex][i][qCodeList[k]] != null){
                        if(results[resultIndex][i][qCodeList[k]].length > 1){
                          for(var j = 0; j < results[resultIndex][i][qCodeList[k]].length; j++){
                            if(cCodeList[l].includes(qCodeList[k] +"-"+ results[resultIndex][i][qCodeList[k]]) == true){
                              if(qCodeList[k] == qCodeList[0]){
                                xIndex = parseInt(cCodeList[l][cCodeList[l].length-1]);
                                match += xlength;
                              }
                              else{
                                match += 1;
                              }
                            }
                          }
                        }
                        else{
                          if(cCodeList[l].includes(qCodeList[k] +"-"+ results[resultIndex][i][qCodeList[k]]) == true){
                            if(qCodeList[k] == qCodeList[0]){
                                xIndex = parseInt(cCodeList[l][cCodeList[l].length-1]);
                                match += xlength;
                            }
                            else{
                              match += 1;
                            }
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
                }

              if(match == cCodeList.length){
                if(finalCount[xIndex] == null){
                  finalCount[xIndex] = 0;
                  finalCount[xIndex] += 1;
                }
                else{
                  finalCount[xIndex] += 1;
                }
              }
            }

            labels = getChoices(qCodeList[0]);
            var totalCount = [];

            for(var i = 0; i < labels.length; i++){
              if(finalCount[i] == null){
                totalCount[i] = 0;
              }
              else{
                totalCount[i] = finalCount[i];
              }
            }

            dataset.push({
                    label: "Respondent/s",
                    data: totalCount,
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"]
                  })

          } 
          
          if(qCodeList.length > 1){
            createBar(dataset, labels);
          }
          else{
            createBar(dataset, labels);
          }  
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
            if(survey.data[iterate][0] == "^" || survey.data[iterate][0] == ""){
              if(survey.data[iterate][2] == code){
                cIndex = iterate + 1;
                while(eof != 1){
                  if(survey.data[cIndex][0] == "^" || survey.data[cIndex][0] == ""){
                    finished = 1;
                    eof = 1;
                  }
                  else{
                    labels.push(survey.data[cIndex][cTextIndex]);
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
        
        function createBar(fCount, qLabels)  {
          var survey = surveyData;
          document.getElementById("chartContainer").innerHTML = "";
          document.getElementById("chartContainer").innerHTML = "<canvas id='chart' width='800' height='450'></canvas>";

          new Chart(document.getElementById("chart"),{
            type: 'bar',
            data: {
              labels: qLabels,
              datasets: fCount
            },
            options:{
              maintainAspectRatio: false,
              legend: { display: true},
              scales: {
                yAxes: [{
                  stacked: false,
                  ticks: {
                    beginAtZero: true
                  }
                }],
                xAxes: [{
                  stacked: false,
                  ticks: {
                    beginAtZero: true
                  }
                }]

              },
              title: {
                fontSize: 17,
                display: false,
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
          results = JSON.parse(localStorage.getItem('results'));
          var surveyLength = survey.data.length;
          

          while(finished != true){
            if(surveyLength != iterate){
              if(survey.data[iterate][0] == "^" && survey.data[iterate][1] > 0){
                qCodeList.push(survey.data[iterate][2]);
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

          for(var i = 1; i < results[resultsIndex].length; i++){
            resultsArray.push([results[resultsIndex][i]["respondentID"], []]); 
            for(var x = 0; x < qCodeList.length; x++){
              resultsArray[i-1][x+1] = new Array();
              resultsArray[i-1][x+1][0] = qCodeList[x];
              if(results[resultsIndex][i][qCodeList[x]] != 98 || results[resultsIndex][i][qCodeList[x]] != 99){
                if(results[resultsIndex][i][qCodeList[x]] != null){
                  if(results[resultsIndex][i][qCodeList[x]].length > 1){
                    for(var j = 0; j < results[resultsIndex][i][qCodeList[x]].length; j++){
                      resultsArray[i-1][x+1][j+1] = results[resultsIndex][i][qCodeList[x]][j];
                    }
                  }
                  else{
                      resultsArray[i-1][x+1][1] = results[resultsIndex][i][qCodeList[x]];
                    }
                  }
                }
              }
            }

            $.ajax({ 
                   type: "POST", 
                   url: "uploadresults.php", 
                   data: {rArray : resultsArray, sID : surveyID, sName : "IALU"}, 
                   success: function() { 
                          alert("Success"); 
                    } 
            });
          }
      </script>

  </body>