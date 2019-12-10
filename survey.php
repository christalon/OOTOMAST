<!-- This is a static file -->
<!-- served from your routes in server.js -->

<!-- You might want to try something fancier: -->
<!-- html/nunjucks docs: https://mozilla.github.io/nunjucks/ -->
<!-- pug: https://pugjs.org/ -->
<!-- haml: http://haml.info/ -->
<!-- hbs(handlebars): http://handlebarsjs.com/ -->

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/checkboxes.min.css">
    <!--<link rel="stylesheet" href="/mdb.min.css">
    <!-- import the webpage's client-side javascript file -->
    <style type="text/css">
      #footer {
        position: fixed;
        height: 50px;
        bottom: 0px;
        left: 0px;
        right: 0px;
        margin-bottom: 0px;
      }
    </style>

  </head>
  <body>
    <header>
      <nav class="navbar navbar-light" style="background-color: #14861ac4;">
        <a class="navbar-brand" href="index.php" style="color: white;"><i class="fas fa-arrow-left"></i></a>
        <span class="navbar-text mr-auto" id="surveyTitle">
          Navbar text with an inline element
        </span>
        <div class="ckbx-style-7" style="display: flex; margin-top: 5px;">
          <h3 style="font-size: 17px; padding-top: 1px; margin-right: 8px; color: white;
}">Translate</h3>
          <input type="checkbox" id="ckbx-style-7-1" value="0" name="ckbx-style-7">
          <label for="ckbx-style-7-1" style="height: .6em;"></label>
        </div>
      </nav>
    </header>
    <main>
      <div id="transitionTextCon">
        <h3>The next set of questions will be about</h3>
        <h1 id="transitionText">DLSU Arrows Shuttle Service</h1>
      </div>
      <div name="questionBox" id="qBox">
        <p name="questionText" id="qText">
        </p>
      </div>
      
      <div id="choicesBox">
        <form class="form-check" style="display:flex; flex-direction: column; padding: 0;" id="cBox">
          
        </form>
      </div>
    </main>
    <div id="footer">
        <div name="navButtons" id="navBtnCon" class="btn-group btn-group-justified" role="group" style="height: 60px;">
          <div class="btn-group" style="width: 100%;">
            <button class="btn btn-primary btn-block" type="button" id="prevBtn" value="back" onclick="prev()" style="background-color: white;border-color: #4aa24f;color: #4aa24f;">Back</button>
          </div>
          <div class="btn-group" style="width: 20%;">
            <button class="btn btn-primary btn-block" type="button" id="passBtn" value="pass" onclick="pass()" style="background-color: white;border-color: #4aa24f;color: #4aa24f;">Pass</button>
          </div>
          <div class="btn-group" style="width: 100%;">
            <button class="btn btn-primary btn-block" type="button" id="nextBtn" value="next" onclick="next()" style="background-color: white;border-color: #4aa24f;color: #4aa24f;">Next</button>
          </div>
          <div class="btn-group" style="width: 100%;">
            <button class="btn btn-primary btn-block" type="button" id="finishBtn" value="finish" onclick="finish()" style="background-color: white;border-color: #4aa24f;color: #4aa24f;">Finish</button>
          </div>
        </div>
    </div>

    <!-- include the Glitch button to show what the webpage is about and
          to make it easier for folks to view source and remix -->
    <!-- <div class="glitchButton" style="position:fixed;top:20px;right:20px;"></div> -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://button.glitch.me/button.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/papaparse.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="https://kit.fontawesome.com/637ce47f6a.js" crossorigin="anonymous"></script>
    <script type="text/javascript">

    //Parse and Navigation
      var translated = false
      var qIndex = 0;
      var cIndex = 0;
      var qidIndex = 1;
      var noOfSelectable = 0;
      var cIndexes = [];
      var surveyID;
      var surveyData;
      var resultsArray = {};
      var selectedAnswer = {};
      var resultsIndex;
      var respondentIndex;
      var routingTrail = [];
      var routeNext = "";
      var routesTable = [];
      var finished = false;
      var divItems;

      <?php $sId = $_POST["survey"]; ?>

      surveyID =  "<?php echo $sId ?>";
      //alert(surveyID);
      setSurvey();
      initializeResultsArray();
      initializeSurvey();

      window.onbeforeunload = function(event) {
        event.returnValue = "Your custom message.";
      };

      function choiceSelected(item){
        this.resetChoiceColor();
        item.style.backgroundColor = '#4aa24f2b';
      }

      function resetChoiceColor() {
        for(var i=0; i < divItems.length; i++) {
          var item = divItems[i];
          item.style.backgroundColor = 'white';
        }
      }

      function setSurvey(){
        surveyData = JSON.parse(localStorage.getItem(surveyID));

      }

      function initializeResultsArray(){
      // should be stored in local storage
        var found = false;
        var results = [];
        var max = 10;
        var min = 5;
        var respondentID = (Math.random() * ((max - min) + 1)) + min;


        if(!localStorage.getItem('results')){
          results.push([surveyID, {respondentID}]);
          resultsIndex = results.length - 1;
          resultsArray = results;
          respondentIndex = 1;
          localStorage.results = JSON.stringify(results);

        }
        else{
          results = JSON.parse(localStorage.results);

          for(var i =0; i < results.length; i++){
            if(results[i][0] == surveyID){
              resultsIndex = i;
              found = true;
            }
          }

          if(found == true){
            results[resultsIndex].push({respondentID});
            respondentIndex = results[resultsIndex].length - 1
            resultsArray = results;
            localStorage.results = JSON.stringify(results);
          }
          else{
            results.push([surveyID, {respondentID}]);
            resultsIndex = results.length - 1;
            resultsArray = results;
            respondentIndex = 1;
            localStorage.results = JSON.stringify(results);
          }

        }

      }

    	function initializeSurvey(){
    		var survey = surveyData;
        var found = false;
        var iterate = qIndex;
        var choicesContainer = document.getElementById("cBox");
      
        noOfSelectable = survey.data[qIndex][1];

        //if the first question is a transition, disable pass button
        if(noOfSelectable == 0){
          generateTransitionScreen(true, survey.data[qIndex][3]);
        }

        if(translated == true){
          document.getElementById('qText').innerHTML = ""+survey.data[qIndex][(3+1)];
          //document.getElementById('qText').innerHTML = ""+survey.data[qIndex][(2+1)];
        }
        else{
          document.getElementById('qText').innerHTML = ""+survey.data[qIndex][3];
          document.getElementById('surveyTitle').innerHTML = ""+survey.data[qIndex][(3)];
        }

        // Do choice generation
        if(survey.data[qIndex][1] > 0){
          cIndexes = []
          choicesContainer.innerHTML = "";
          choicesContainer.innerHTML += findChoices();
          divItems = document.getElementsByClassName("buttonContainer");
        }

        // disable next button
        document.getElementById("finishBtn").parentElement.style.display = "none";
        //document.getElementById("surveyTitle").innerHTML = ;
    	}

      function generateTransitionScreen(state, text){
        //hide items if true, otherwise return to normal
        if(state == true){
          document.getElementById("passBtn").parentElement.style.display = "none";
          document.getElementById("qBox").style.display = "none";
          document.getElementById("choicesBox").style.display = "none";

          document.getElementById("transitionTextCon").style.display = "block";
          document.getElementById("transitionText").innerHTML = text;

          document.body.style.backgroundColor = "#0f8514";
        }
        else{
          document.getElementById("passBtn").parentElement.style.display = "inline-flex";
          document.getElementById("qBox").style.display = "block";
          document.getElementById("choicesBox").style.display = "block";

          document.getElementById("transitionTextCon").style.display = "none";
          document.body.style.backgroundColor = "white";
        }
      }

      function translate(){
        var survey = surveyData;
        if (translated == false){
          translated = true;
          document.getElementById('qText').innerHTML = ""+survey.data[qIndex][(3+1)];

          // Translate choices
          for (var i = 0; i < cIndexes.length; i++) {
            var choiceTextId = "qChoice"+cIndexes[i];
            document.getElementById(choiceTextId).innerHTML = ""+survey.data[cIndexes[i]][4];
          }
        }
        else{
          translated = false;
          document.getElementById('qText').innerHTML = ""+survey.data[qIndex][3];

          // Translate choices
          for (var i = 0; i < cIndexes.length; i++) {
            var choiceTextId = "qChoice"+cIndexes[i];
            document.getElementById(choiceTextId).innerHTML = ""+survey.data[cIndexes[i]][3];
          }
        }
      }

      function next(){
        // Find next question
        var survey = surveyData;
        var found = false;
        var iterate = qIndex+1;
        var choicesContainer = document.getElementById("cBox");
        var qCode = survey.data[qIndex][2];

         // Record answer
        if(resultsArray[resultsIndex][respondentIndex][qCode] == null){
          if(selectedAnswer.length > 1){
            resultsArray[resultsIndex][respondentIndex][qCode] = selectedAnswer;
            localStorage["results"] = JSON.stringify(resultsArray);
          }
          else if(selectedAnswer.length == 1){
            resultsArray[resultsIndex][respondentIndex][qCode] = selectedAnswer[0];
            localStorage["results"] = JSON.stringify(resultsArray);
          }
        }
        else if(selectedAnswer.length == 1){
          resultsArray[resultsIndex][respondentIndex][qCode] = selectedAnswer[0];
          localStorage["results"] = JSON.stringify(resultsArray);
        }

        if(routeNext == ""){
          var existingRoute = Object.keys(routesTable)[Object.values(routesTable).indexOf(qCode)];
          if(existingRoute != null){
            while(found != true){
              if(survey.data[iterate][0] == "^"){
                if(survey.data[iterate][2] == existingRoute){
                  found = true;
                  qIndex = iterate;
                }
                else{
                  iterate = iterate + 1;
                }
              }
              else if(survey.data[iterate][0] == ""){
                finished = true;
              }
              else{
                iterate = iterate + 1;
              }
            }
          }
          else{
            while(found != true){
              if(survey.data[iterate][0] == "^"){
                  found = true;
                  qIndex = iterate;              
              }
              else if(survey.data[iterate][0] == ""){
                finished = true;
              }
              else{
                iterate = iterate + 1;
              }
            }
          }
        }
        else{
          deleteRoute(qCode);
          routesTable[routeNext] = qCode; 
          while(found != true){
            if(survey.data[iterate][0] == "^"){
              //alert("found");
              if(survey.data[iterate][2] == routeNext){
                if(resultsArray[resultsIndex][respondentIndex][survey.data[iterate][2]] == 98){
                  resultsArray[resultsIndex][respondentIndex][survey.data[iterate][2]] = null;
                  localStorage["results"] = JSON.stringify(resultsArray);
                }

                found = true;
                qIndex = iterate;
              }
              else{
                if(resultsArray[resultsIndex][respondentIndex][survey.data[iterate][2]] == 98){
                  resultsArray[resultsIndex][respondentIndex][survey.data[iterate][2]] = null;
                  localStorage["results"] = JSON.stringify(resultsArray);
                }
                else{
                  resultsArray[resultsIndex][respondentIndex][survey.data[iterate][2]] = 98;
                  localStorage["results"] = JSON.stringify(resultsArray);
                }
                iterate = iterate + 1;
              }
            }
            else if(survey.data[iterate][0] == ""){
                finished = true;
            }
            else{
              iterate = iterate + 1;
            }
          }
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
        else if(found == false && finished == true){
          //Prompt end screen
        }
        else{
          //prompt error
        }

        // Check if transition question
        if(noOfSelectable == 0){
          generateTransitionScreen(true, survey.data[qIndex][3]);
        }
        else{
          generateTransitionScreen(false, survey.data[qIndex][3]);
        }

        // Do choice generation
        if(survey.data[qIndex][1] > 0){
          cIndexes = []
          choicesContainer.innerHTML = "";
          choicesContainer.innerHTML += findChoices();
          divItems = document.getElementsByClassName("buttonContainer");
        }
        else{
          cIndexes = []
          choicesContainer.innerHTML = "";
        }
        

        //clear selected answers
        selectedAnswer = [];
        routeNext = ""

        //disable next button
        if(resultsArray[resultsIndex][respondentIndex][survey.data[qIndex][2]] != null || survey.data[qIndex][1] == 0){
          if(finished == true){
            document.getElementById("finishBtn").parentElement.style.display = "inline-flex";
            document.getElementById("nextBtn").parentElement.style.display = "none";
          }
          else{
            document.getElementById("nextBtn").disabled = false;
          }

          if(survey.data[qIndex][1] == 0){
            document.getElementById('surveyTitle').innerHTML = ""+survey.data[qIndex][(3)];
          }
        }
        else{
          document.getElementById("nextBtn").disabled = true;
        }
      }

      function prev(){
        // Find previous question
        var survey = surveyData;
        var found = false;
        var iterate = qIndex-1;
        var choicesContainer = document.getElementById("cBox");
        var qCode = survey.data[qIndex][2];

        if(routesTable[qCode] != null){
          while(found != true){
            if(survey.data[iterate][0] == "^"){
              //alert("found");
              if(survey.data[iterate][2] == routesTable[qCode]){
                found = true;
                qIndex = iterate;
              }
              else{
                iterate = iterate - 1;
              }
            }
            else{
              iterate = iterate - 1;
            }
          }
        }
        else{
            while(found != true){
              if(survey.data[iterate][0] == "^"){
                //alert("found");
                found = true;
                qIndex = iterate;
              }
              else{
                iterate = iterate - 1;
              }
            }
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

        // Check if transition question
        if(noOfSelectable == 0){
          generateTransitionScreen(true, survey.data[qIndex][3]);
        }
        else{
          generateTransitionScreen(false, survey.data[qIndex][3]);
        }

        // Do choice generation
        if(survey.data[qIndex][1] > 0){
          cIndexes = []
          choicesContainer.innerHTML = "";
          choicesContainer.innerHTML += findChoices();
          divItems = document.getElementsByClassName("buttonContainer");
        }
        else{
          cIndexes = []
          choicesContainer.innerHTML = "";
        }

        // 
        if(resultsArray[resultsIndex][respondentIndex][survey.data[qIndex][2]] != null || survey.data[qIndex][1] == 0){
          document.getElementById("nextBtn").disabled = false;
          if(survey.data[qIndex][1] == 0){
            document.getElementById('surveyTitle').innerHTML = ""+survey.data[qIndex][(3)];
          }
        }
        else{
          document.getElementById("nextBtn").disabled = true;
        }
      }

      function pass(){
        // Find next question
        var survey = surveyData;
        var found = false;
        var iterate = qIndex+1;
        var choicesContainer = document.getElementById("cBox");
        var qCode = survey.data[qIndex][2];

        // Record answer
        resultsArray[resultsIndex][respondentIndex][qCode] = 99;
        localStorage["results"] = JSON.stringify(resultsArray);

        while(found != true){
          if(survey.data[iterate][0] == "^"){
            //alert("found");
            found = true;
            qIndex = iterate;
          }
          else{
            iterate = iterate + 1;
          }
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

        // Do choice generation
        if(survey.data[qIndex][1] > 0){
          cIndexes = []
          choicesContainer.innerHTML = "";
          choicesContainer.innerHTML += findChoices();
          divItems = document.getElementsByClassName("buttonContainer");
        }
        else{
          cIndexes = []
          choicesContainer.innerHTML = "";
        }

        //clear selected answers
        selectedAnswer = [];
        routeNext = ""

        //disable next button
        if(resultsArray[resultsIndex][respondentIndex][survey.data[qIndex][2]] != null || survey.data[qIndex][1] == 0){
          document.getElementById("nextBtn").disabled = false;
        }
        else{
          document.getElementById("nextBtn").disabled = true;
        }
      }

      // Still needs fixing
      function deleteRoute(qCode){
        for(let elem in routesTable){
          if(qCode == routesTable[elem]){
            routesTable[elem] = null;
          }
        }
      }
      

      function findChoices(){
        var survey = surveyData;
        cIndex = qIndex+1;
        var cTextIndex = 3;
        var eof = 0;
        var output = "";

        //Find each choices
        while(eof == 0){
          if(survey.data[cIndex][0] == "^" || survey.data[cIndex][0] == ""){
            eof = 1;
          }
          else{
            // Generate radio button if only 1 is selectable
            cIndexes.push(cIndex);
            if(noOfSelectable == 1){
              if(resultsArray[resultsIndex][respondentIndex][survey.data[qIndex][2]] != null){
                if(resultsArray[resultsIndex][respondentIndex][survey.data[qIndex][2]] == survey.data[cIndex][2]){
                  output+= '<div class="buttonContainer" onclick="choiceSelected(this)"><input type="radio" onclick="setAnswer('+ survey.data[cIndex][2] +', '+ cIndex +', null)" class="form-check-input" id="choice'+ cIndex +'" name="choice1" value="'+ survey.data[cIndex][2] +'" checked>';
                }
                else{
                  output+= '<div class="buttonContainer" onclick="choiceSelected(this)"><input type="radio" onclick="setAnswer('+ survey.data[cIndex][2] +', '+ cIndex +', null)" class="form-check-input" id="choice'+ cIndex +'" name="choice1" value="'+ survey.data[cIndex][2] +'">';
                }
              }
              else{
                output+= '<div class="buttonContainer" onclick="choiceSelected(this)"><input type="radio" onclick="setAnswer('+ survey.data[cIndex][2] +', '+ cIndex +', null)" class="form-check-input" id="choice'+ cIndex +'" name="choice1" value="'+ survey.data[cIndex][2] +'">';
              }
              
              if(translated == true){
                 output+= '<label class="form-check-label" for="choice'+ cIndex +'" id="qChoice'+ cIndex +'" style="width: 100%;height: 100%;">'+ survey.data[cIndex][4] +'</label></div>';
              }
              else{
                output+= '<label class="form-check-label" for="choice'+ cIndex +'" id="qChoice'+ cIndex +'" style="width: 100%;height: 100%;">'+ survey.data[cIndex][3] +'</label></div>';
              }
            }
            else{
              if(resultsArray[resultsIndex][respondentIndex][survey.data[qIndex][2]] != null){
                if(findExistingAnswer(resultsIndex, respondentIndex, survey.data[qIndex][2], survey.data[cIndex][2]) == true){
                  output+= '<div class="buttonContainer" onclick="choiceSelected(this)"><input type="checkbox" onclick="setAnswer('+ survey.data[cIndex][2] +', '+ cIndex +', this.parentElement)" class="form-check-input" id="choice'+ cIndex +'" name="choice1" value="'+ survey.data[cIndex][2] +'" checked>';
                }
                else{
                  output+= '<div class="buttonContainer"><input type="checkbox" onclick="setAnswer('+ survey.data[cIndex][2] +', '+ cIndex +', this.parentElement), " class="form-check-input" id="choice'+ cIndex +'" name="choice1" value="'+ survey.data[cIndex][2] +'">';
                }
              }
              else{
                output+= '<div class="buttonContainer"><input type="checkbox" onclick="setAnswer('+ survey.data[cIndex][2] +', '+ cIndex +', this.parentElement)" class="form-check-input" id="choice'+ cIndex +'" name="choice1" value="'+ survey.data[cIndex][2] +'">';
              }
              
              if(translated == true){
                 output+= '<label class="form-check-label" for="choice'+ cIndex +'" id="qChoice'+ cIndex +'" style="width: 100%;height: 100%;">'+ survey.data[cIndex][4] +'</label></div>';
              }
              else{
                output+= '<label class="form-check-label" for="choice'+ cIndex +'" id="qChoice'+ cIndex +'" style="width: 100%;height: 100%;">'+ survey.data[cIndex][3] +'</label></div>';
              }
            }
          }
          cIndex = cIndex+1;
        }
        return output;
      }

      function findExistingAnswer(resultsIndex, respondentIndex, qCode, num){
        var found = false;

        for(var i = 0; i < resultsArray[resultsIndex][respondentIndex][qCode].length; i++){
          if(resultsArray[resultsIndex][respondentIndex][qCode][i] == num){
            found = true;
          }
        }

         return found;                                          
      }

      function setAnswer(num, choiceIndex, parentDiv){
        if(noOfSelectable == 1){
          selectedAnswer = [];
          selectedAnswer.push(num);
          routeNext = surveyData.data[choiceIndex][1];
          document.getElementById("nextBtn").disabled = false;
        }
        else{
          //check first if answer exists in array, if it exists, remove
          var checkbox = document.getElementById("choice"+choiceIndex);
          if(checkbox.checked == false){
            for( var i = 0; i < selectedAnswer.length; i++){ 
              if ( selectedAnswer[i] === num) {
                selectedAnswer.splice(i, 1); 
              }
            }
            parentDiv.style.backgroundColor = "white";
          }
          else
          {
            selectedAnswer.push(num);
            parentDiv.style.backgroundColor = "#4aa24f2b";
          }

          if(selectedAnswer.length >= noOfSelectable){
            document.getElementById("nextBtn").disabled = false;
          }
          else{
            document.getElementById("nextBtn").disabled = true;
          }
        }
      }

      document.getElementById('ckbx-style-7-1').onchange = function(e){

        if(e.target.checked) {
            translate()
        } else {
            translate()
        }
      };
    </script>
  </body>
</html>
