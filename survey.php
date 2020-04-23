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
<header>
	<nav class="navbar navbar-light" style="background-color: #14861ac4;">
		<a class="navbar-brand" id="backButton" href="index.php" style="color: white;"><i class="fas fa-arrow-left"></i></a>
		<span class="navbar-text mr-auto" id="surveyTitle">

		</span>
		<div class="ckbx-style-7" style="display: flex; margin-top: 5px;">
			<h3 style="font-size: 17px; padding-top: 1px; margin-right: 8px; color: white;
		}">Translate</h3>
		<input type="checkbox" id="ckbx-style-7-1" value="0" name="ckbx-style-7" style="display: none;">
		<label for="ckbx-style-7-1" style="height: .6em;"></label>
	</div>
</nav>
</header>
<main>
	<div class="progress" style="height: 5px;">
		<div class="progress-bar" id="pBar" role="progressbar" style="width: 0; background-color: #76ba1b;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
</div>
<div id="endScreen">
	<h1> Thank you for answering the survey!</h1>
	<button class="btn btn-primary btn-block waves-effect waves-light" type="button" id="newRespondent" value="new" onclick="newRespondent()">New Respondent</button>
	<a class="btn btn-primary btn-block waves-effect waves-light" id="exit" value="exit" href="index.php" style="padding: 15px;">Exit</a>
</div>
<div id="transitionTextCon">
	<h3 id="instructions">The next set of questions will be about</h3>
	<h1 class="text-wrap" id="transitionText"></h1>
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
	<div name="navButtons" id="navBtnCon" class="btn-group btn-group-justified" role="group" style="height: 60px; background: #0f851473;">
		<div class="btn-group" style="width: 100%;">
			<button class="btn btn-primary btn-block" type="button" id="prevBtn" value="back" onclick="prev()" style="background-color: white;border-color: #4aa24f;color: #4aa24f;border-radius: 5px;">Back</button>
		</div>
		<div class="btn-group" style="width: 20%;">
			<button class="btn btn-primary btn-block" type="button" id="passBtn" value="pass" onclick="pass()" style="background-color: white;border-color: #4aa24f;color: #4aa24f;border-radius: 5px;">Pass</button>
		</div>
		<div class="btn-group" style="width: 100%;">
			<button class="btn btn-primary btn-block" type="button" id="nextBtn" value="next" onclick="next()" style="background-color: white;border-color: #4aa24f;color: #4aa24f;border-radius: 5px;">Next</button>
		</div>
		<div class="btn-group" style="width: 100%;">
			<button class="btn btn-primary btn-block" type="button" id="finishBtn" value="finish" onclick="generateEndScreen()" style="background-color: #4aa24f;border-color: #4aa24f;color: white;border-radius: 5px;">Done</button>
		</div>
	</div>
</div>

    <!-- include the Glitch button to show what the webpage is about and
    	to make it easier for folks to view source and remix -->
    	<!-- <div class="glitchButton" style="position:fixed;top:20px;right:20px;"></div> -->
    	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>
    	<script src="js/mdb.min.js"></script>
    	<script src="https://kit.fontawesome.com/637ce47f6a.js" crossorigin="anonymous"></script>
    	<script type="text/javascript">


    //Parse and Navigation
    var translated = false
    var qIndex = 0;
    var qNumber = 0;
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
    var isSurveyFinished = false;
    var divItems;
    var totalQuestions;
    var surveyName;
    var facilitated = true;
    var autoRedirect = false;
	var youtubeReady = false;
	var playerCount = 0;
	var videoUrl = [];
	var withMedia = false;

    <?php
    $sId = $_POST["surveyId"];
    
    if (isset($_POST['notFacilitated']) && !empty($_POST['notFacilitated'])) {
    	$facilitated = false;
    }
    else{
    	$facilitated = true;
    }
    
    if (isset($_POST['surveyName']) && !empty($_POST['surveyName'])) {
    	$surveyName = $_POST['surveyName'];
    }
    else{
    	$surveyName = "none";
    }
    ?>

    surveyID = "<?php echo $sId ?>";
    surveyName = "<?php echo $surveyName ?>";
    facilitated = "<?php echo $facilitated ?>";

      //alert(surveyID);

      window.onbeforeunload = function(event) {
      	if(autoRedirect == false){
      		return "Are you sure you want to exit?";
      	}
      };

	  // Youtube API ----------------------
	  var tag = document.createElement('script');

	  tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	  function youtube_parser(url){
            var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
            var match = url.match(regExp);
            return (match&&match[7].length==11)? match[7] : false;
	  }
	  
	  function imgur_parser(url){
        var regExp = /(http:|https:)?\/\/(www\.)?(imgur.com)?\/?(a\S+)?(\S+)?/;
			var match = url.match(regExp);
			if(match[4] == null){
				return match[5];
			}
			else{
				return match[4];
			}
      }

	  function onYouTubeIframeAPIReady() {
        youtubeReady = true;
		setSurvey();
		initializeResultsArray();
		initializeSurvey();
		initializeProgressBar();
      }

	  //-------------------------------------
      
      window.onload = () => {
      	let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
      	bannerNode.parentNode.removeChild(bannerNode);
	  }
	  

      function choiceSelected(item, isCheckbox){
		
		resetChoiceColor();

		item.firstElementChild.checked = true; 
		if(isCheckbox == false){
			item.firstElementChild.click();
		}
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

      function initializeProgressBar(){
      	var survey = surveyData;
      	var index = 0;
      	var total = 0;
      	var finished = false;

      	while(finished == false){
      		if(survey.data[index] == null){
      			finished = true;
      		}
      		
      		if(finished == false){
      			if(survey.data[index][0] == "^"){
      				total += 1;
      				index += 1;
      			}
      			else{
      				index += 1;
      			}
      		}
      	}

      	totalQuestions = total;
      }

      function initializeResultsArray(){
      // should be stored in local storage
      var found = false;
      var results = [];
      var max = 10;
      var min = 5;
      var respondentID = (Math.random() * ((max - min) + 1)) + min;
      var sList = [];
      var sessionResults = [];
      
      if(surveyName == "none"){
      	sList = JSON.parse(localStorage.getItem('surveyList'));
      	
      	for(j = 0; j < sList.length; j++){
      		if(sList[j][0] == surveyID){
      			surveyName = sList[j][1];
      		}
      	}
      }
      
      if(facilitated == false){
      	sessionStorage.removeItem('sessionResults');
      	if(!sessionStorage.getItem('sessionResults')){
	      	sessionResults.push([surveyID, surveyName, {respondentID}]);
	      	resultsIndex = sessionResults.length - 1;
	      	resultsArray = sessionResults;
	      	respondentIndex = 2;
	      	sessionStorage.sessionResults = JSON.stringify(sessionResults);

	      }
	      else{
	      	sessionResults = JSON.parse(sessionStorage.sessionResults);
	      	

	      	for(var i =0; i < sessionResults.length; i++){
	      		if(sessionResults[i][0] == surveyID){
	      			resultsIndex = i;
	      			found = true;
	      		}
	      	}

	      	if(found == true){
	      		sessionResults[resultsIndex].push({respondentID, surveyName});
	      		respondentIndex = sessionResults[resultsIndex].length - 1
	      		resultsArray = sessionResults;
	      		sessionStorage.sessionResults = JSON.stringify(sessionResults);
	      	}
	      	else{
	      		sessionResults.push([surveyID, surveyName, {respondentID}]);
	      		resultsIndex = sessionResults.length - 1;
	      		resultsArray = sessionResults;
	      		respondentIndex = 2;
	      		sessionStorage.sessionResults = JSON.stringify(sessionResults);
	      	}
	      }
      }
      else{
	      	if(!localStorage.getItem('results')){
	      	results.push([surveyID, surveyName, {respondentID}]);
	      	resultsIndex = results.length - 1;
	      	resultsArray = results;
	      	respondentIndex = 2;
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
	      		results[resultsIndex].push({respondentID, surveyName});
	      		respondentIndex = results[resultsIndex].length - 1
	      		resultsArray = results;
	      		localStorage.results = JSON.stringify(results);
	      	}
	      	else{
	      		results.push([surveyID, surveyName, {respondentID}]);
	      		resultsIndex = results.length - 1;
	      		resultsArray = results;
	      		respondentIndex = 2;
	      		localStorage.results = JSON.stringify(results);
	      	}
	      }
      }
    }

    function initializeSurvey(){
    	var survey = surveyData;
    	var found = false;
    	var iterate = qIndex;
    	var choicesContainer = document.getElementById("cBox");
    	var backButton = document.getElementById("backButton");
    	autoRedirect = false;
    	
		noOfSelectable = survey.data[qIndex][1];
		document.getElementById("transitionTextCon").style.display = "none";
    	
    	if(facilitated == false){
    		backButton.style.display = "none";
    	}
    	
    	document.getElementById("endScreen").style.display = "none";
            //if the first question is a transition, disable pass button
            if(noOfSelectable == 0){
            	generateTransitionScreen(true, createTextLinks_(survey.data[qIndex][3]));
			}
			else{
				document.getElementById("nextBtn").disabled = "true";
			}
            
            if(translated == true){
            	document.getElementById('qText').innerHTML = ""+survey.data[qIndex][(3+1)];
              //document.getElementById('qText').innerHTML = ""+survey.data[qIndex][(2+1)];
            }
            else{
            	document.getElementById('qText').innerHTML = ""+survey.data[qIndex][3];
            	if(survey.data[qIndex][3].length < 50 && withMedia == false){
            		document.getElementById('surveyTitle').innerHTML = ""+createTextLinks_(survey.data[qIndex][3]);
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
            
            // disable next button
            document.getElementById("finishBtn").parentElement.style.display = "none";
            //document.getElementById("surveyTitle").innerHTML = ;
          }

          function generateTransitionScreen(state, text){
        //hide items if true, otherwise return to normal
        $('body').animate({ scrollTop: top }, 0);
        if(state == true){
			document.getElementById("passBtn").parentElement.style.display = "none";
        	document.getElementById("qBox").style.display = "none";
			document.getElementById("choicesBox").style.display = "none";

        	document.getElementById("transitionTextCon").style.display = "block";
        	document.getElementById("transitionText").innerHTML = text;

			if(playerCount > 0){
				for(var i = 0; i < playerCount ; i++){
					var player;
					var id = youtube_parser(videoUrl[i]);
					player = new YT.Player('player'+i, {
						height: 300,
						width: "100%",
						videoId: id,
					});
				}
			}

        	if(text.length < 50 && withMedia == false){
        		document.getElementById("instructions").style.display = "block";
        		document.getElementById("transitionText").style.fontSize = "2.5rem";
        		document.getElementById("transitionText").style.textAlign = "center";
        	}
        	else{
        		document.getElementById("transitionText").style.fontSize = "1.2rem";
        		document.getElementById("transitionText").style.textAlign = "justify";
        		document.getElementById("instructions").style.display = "none";
        	}
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

      function generateEndScreen(){
      	$('body').animate({ scrollTop: top }, 0);
        //Hide elements
        document.getElementById("navBtnCon").style.display = "none";
        document.getElementById("qBox").style.display = "none";
        document.getElementById("choicesBox").style.display = "none";
        document.getElementById("transitionTextCon").style.display = "none";

        // Generate screen elements, button to exit or new respondent
        document.getElementById("endScreen").style.display = "block";
        
        // If not facilitated, hide additional elements
        if(facilitated == false){
        	document.getElementById("newRespondent").style.display = "none";
        	document.getElementById("exit").style.display = "none";
        }
        
        document.body.style.backgroundColor = "#0f8514";
        
        qNumber = 0;
        
        uploadResults();
      }
      

        function exit(){
        	window.location.replace("http://ootomast.000webhostapp.com/index.php");
        }

        function newRespondent(){
        	qIndex = 0;
        	cIndex = 0;
        	qidIndex = 1;
        	finished = false;
        	noOfSelectable = 0;
        	routeNext = "";
        	routesTable = [];
        	selectedAnswer = {};
        	autoRedirect = false;

        //Hide end screen
        document.getElementById("endScreen").style.display = "none";

        //Show hidden elements
        document.getElementById("navBtnCon").style.display = "inline-flex";
        document.getElementById("qBox").style.display = "block";
        document.getElementById("choicesBox").style.display = "block";
        document.getElementById("nextBtn").parentElement.style.display = "inline-flex";
        document.getElementById("prevBtn").parentElement.style.display = "inline-flex";
        document.getElementById("nextBtn").disabled = false;
        document.body.style.backgroundColor = "white";

        //Call initialize functions
        initializeResultsArray();
        initializeSurvey();
        setProgressBar();
      }

      function translate(){
      	var survey = surveyData;
      	if(isSurveyFinished == false){
      		if (translated == false){
      			translated = true;
      			if(survey.data[qIndex][(3+1)] != ""){
      				if(survey.data[qIndex][(3+1)] != null){
      					document.getElementById('qText').innerHTML = ""+createTextLinks_(survey.data[qIndex][(3+1)]);
      					document.getElementById('transitionText').innerHTML = ""+createTextLinks_(survey.data[qIndex][(3+1)]);
      				}
      			}
      			
              // Translate choices
              for (var i = 0; i < cIndexes.length; i++) {
              	var choiceTextId = "qChoice"+cIndexes[i];
              	if(survey.data[cIndexes[i]][4] != ""){
              		if(survey.data[cIndexes[i]][4] != null){
              			document.getElementById(choiceTextId).innerHTML = ""+survey.data[cIndexes[i]][4];
              		}
              	}
              }
            }
            else{
            	translated = false;
            	document.getElementById('qText').innerHTML = ""+createTextLinks_(survey.data[qIndex][(3)]);
            	document.getElementById('transitionText').innerHTML = ""+createTextLinks_(survey.data[qIndex][(3)]);
            	
              // Translate choices
              for (var i = 0; i < cIndexes.length; i++) {
              	var choiceTextId = "qChoice"+cIndexes[i];
              	document.getElementById(choiceTextId).innerHTML = ""+survey.data[cIndexes[i]][3];
              }
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
        var surveyLength = survey.data.length;

         // Record answer
         if(resultsArray[resultsIndex][respondentIndex][qCode] == null){
         	if(selectedAnswer.length > 1){
         		resultsArray[resultsIndex][respondentIndex][qCode] = selectedAnswer;

         		if(facilitated == false){
         			sessionStorage["sessionResults"] = JSON.stringify(resultsArray);
         		}
         		else{
         			localStorage["results"] = JSON.stringify(resultsArray);
         		}
         	}
         	else if(selectedAnswer.length == 1){
         		resultsArray[resultsIndex][respondentIndex][qCode] = selectedAnswer[0];
         		if(facilitated == false){
         			sessionStorage["sessionResults"] = JSON.stringify(resultsArray);
         		}
         		else{
         			localStorage["results"] = JSON.stringify(resultsArray);
         		}
         	}
         }
         else if(selectedAnswer.length == 1){
         	resultsArray[resultsIndex][respondentIndex][qCode] = selectedAnswer[0];
         	if(facilitated == false){
         			sessionStorage["sessionResults"] = JSON.stringify(resultsArray);
			}
			else{
				localStorage["results"] = JSON.stringify(resultsArray);
			}
		 }
		 else if(selectedAnswer.length > 1){
			resultsArray[resultsIndex][respondentIndex][qCode] = selectedAnswer;

			if(facilitated == false){
				sessionStorage["sessionResults"] = JSON.stringify(resultsArray);
			}
			else{
				localStorage["results"] = JSON.stringify(resultsArray);
			}
		}

         if(routeNext == ""){
         	var existingRoute = Object.keys(routesTable)[Object.values(routesTable).indexOf(qCode)];
         	if(existingRoute != null){
         		while(found != true){
         			if(surveyLength != iterate){
         				if(survey.data[iterate][0] == "^"){
         					if(survey.data[iterate][2] == existingRoute){
         						found = true;
         						qNumber+=1;
         						qIndex = iterate;
         					}
         					else{
         						qNumber+=1;
         						iterate = iterate + 1;
         					}
         				}
         				else if(survey.data[iterate][0] == null){
         					finished = true;
         				}
         				else{
         					iterate = iterate + 1;
         				}
         			}
         			else{
         				found = true;
         				finished = true;
         			}  
         		}
         	}
         	else{
         		while(found != true){
         			if(surveyLength != iterate){
         				if(survey.data[iterate][0] == "^"){
         					found = true;
         					qNumber+=1;
         					qIndex = iterate;              
         				}
         				else if(survey.data[iterate][0] == null){
         					finished = true;
         					found = true;
         				}
         				else{
         					iterate = iterate + 1;
         				}
         			}
         			else{
         				found = true;
         				finished = true;
         			}  
         		}
         	}
         }
         else{
         	deleteRoute(qCode);
         	routesTable[routeNext] = qCode; 
         	
         	if(routeNext == "END"){
         		finished = true;
         		found = true;
         		qNumber=totalQuestions;
         	}
         	else{
         		while(found != true){
         			if(survey.data[iterate][0] == "^"){
                  //alert("found");
                  if(survey.data[iterate][2].replace(/\s/g, '') == routeNext){
                  	if(resultsArray[resultsIndex][respondentIndex][survey.data[iterate][2]] == 98){
                  		resultsArray[resultsIndex][respondentIndex][survey.data[iterate][2]] = null;
                  		if(facilitated == false){
					         			sessionStorage["sessionResults"] = JSON.stringify(resultsArray);
					         		}
					         		else{
					         			localStorage["results"] = JSON.stringify(resultsArray);
					         		}
                  	}
                  	qNumber+=1;
                  	found = true;
                  	qIndex = iterate;
                  }
                  else{
                  	if(resultsArray[resultsIndex][respondentIndex][survey.data[iterate][2]] == 98){
                  		resultsArray[resultsIndex][respondentIndex][survey.data[iterate][2]] = null;
                  		if(facilitated == false){
					         			sessionStorage["sessionResults"] = JSON.stringify(resultsArray);
					         		}
					         		else{
					         			localStorage["results"] = JSON.stringify(resultsArray);
					         		}
                  	}
                  	else{
                  		resultsArray[resultsIndex][respondentIndex][survey.data[iterate][2]] = 98;
                  		if(facilitated == false){
					         			sessionStorage["sessionResults"] = JSON.stringify(resultsArray);
					         		}
					         		else{
					         			localStorage["results"] = JSON.stringify(resultsArray);
					         		}
                  	}
                  	qNumber+=1;
                  	iterate = iterate + 1;
                  }
                }
                else if(survey.data[iterate][0] == ""){
                	finished = true;
                	found = true;
                }
                else{
                	iterate = iterate + 1;
                }
              }
            }
            
          }
          
        // Change Question Text
        if(found == true){
        	setProgressBar();
        	if(finished == true){
        		isSurveyFinished = true;
        		qNumber=totalQuestions;
        		setProgressBar();
        		document.getElementById("finishBtn").parentElement.style.display = "inline-flex";
        		document.getElementById('qText').innerHTML = "Please press the 'Done' button below to finish the survey.";
        		document.getElementById('transitionText').innerHTML = "Please press the 'Done' button below to finish the survey.";
        		document.getElementById("passBtn").parentElement.style.display = "none";
        		document.getElementById("prevBtn").parentElement.style.display = "none";
        		document.getElementById("choicesBox").style.display = "none";
        		document.getElementById("nextBtn").parentElement.style.display = "none";
        		
        	}
        	else{
        		noOfSelectable = survey.data[qIndex][1];
        		if(translated == true){
        			translate();
        		}
        		else{
        			document.getElementById('qText').innerHTML = ""+createTextLinks_(survey.data[qIndex][3]);
        		}
        		$('body').animate({ scrollTop: top }, 0);
        	}
        }

        // Check if transition question
        if(finished == false){
        	if(noOfSelectable == 0){
        		generateTransitionScreen(true, createTextLinks_(survey.data[qIndex][3]));
        	}
        	else{
        		generateTransitionScreen(false, createTextLinks_(survey.data[qIndex][3]));
        	}
        }

        // Do choice generation
        if(finished == false){
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
        	$('body').animate({ scrollTop: top }, 0);
        }

        //clear selected answers
        selectedAnswer = [];
        routeNext = ""

        //disable next button
        if(resultsArray[resultsIndex][respondentIndex][survey.data[qIndex][2]] != null || survey.data[qIndex][1] == 0){
        	if(finished == true){
        	}
        	else{
        		document.getElementById("nextBtn").disabled = false;
        	}

        	if(survey.data[qIndex][1] == 0){
        		if(survey.data[qIndex][3].length < 50){
        			document.getElementById('surveyTitle').innerHTML = ""+createTextLinks_(survey.data[qIndex][3]);
        		}
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
              if(survey.data[iterate][2].replace(/\s/g, '') == routesTable[qCode]){
              	found = true;
              	qNumber-=1;
              	qIndex = iterate;
              }
              else{
              	qNumber-=1;
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
                qNumber-=1;
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
          setProgressBar();
		  noOfSelectable = survey.data[qIndex][1];
		  qCode = survey.data[qIndex][2];
          if(translated == true){
          	translate();
            //document.getElementById('qText').innerHTML = ""+survey.data[qIndex][(2+1)];
          }
          else{
          	document.getElementById('qText').innerHTML = createTextLinks_(survey.data[qIndex][3]);
          }
          $('body').animate({ scrollTop: top }, 0);
        }

        // Check if transition question
        if(finished == false){
        	if(noOfSelectable == 0){
        		generateTransitionScreen(true, createTextLinks_(survey.data[qIndex][3]));
        	}
        	else{
        		generateTransitionScreen(false, createTextLinks_(survey.data[qIndex][3]));
        	}
        }
        

        // Do choice generation
        if(survey.data[qIndex][1] > 0){
        	cIndexes = []
        	choicesContainer.innerHTML = "";
        	choicesContainer.innerHTML += findChoices();
        	divItems = document.getElementsByClassName("buttonContainer");
        	$('body').animate({ scrollTop: top }, 0);
        }
        else{
        	cIndexes = []
        	choicesContainer.innerHTML = "";
        	$('body').animate({ scrollTop: top }, 0);
        }

		
		//clear sets
		selectedAnswer = [];
		if(Array.isArray(resultsArray[resultsIndex][respondentIndex][qCode])){
			selectedAnswer = resultsArray[resultsIndex][respondentIndex][qCode];
		}
		else if(resultsArray[resultsIndex][respondentIndex][qCode] != null){
			selectedAnswer.push(resultsArray[resultsIndex][respondentIndex][qCode]);
		}

        routeNext = ""

        if(resultsArray[resultsIndex][respondentIndex][survey.data[qIndex][2]] != null || survey.data[qIndex][1] == 0){
        	document.getElementById("nextBtn").disabled = false;
        	if(survey.data[qIndex][1] == 0){
        		if(survey.data[qIndex][3].length < 50){
        			document.getElementById('surveyTitle').innerHTML = ""+createTextLinks_(survey.data[qIndex][3]);
        		}
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
        var finished = false;
        var iterate = qIndex+1;
        var choicesContainer = document.getElementById("cBox");
        var qCode = survey.data[qIndex][2];
        var surveyLength = survey.data.length;

        // Record answer
        resultsArray[resultsIndex][respondentIndex][qCode] = 99;
        if(facilitated == false){
   				sessionStorage["sessionResults"] = JSON.stringify(resultsArray);
     		}
     		else{
     			localStorage["results"] = JSON.stringify(resultsArray);
     		}

        while(found != true){
        	if(surveyLength != iterate){
        		if(survey.data[iterate][0] == "^"){
        			found = true;
        			qNumber+=1;
        			qIndex = iterate;              
        		}
        		else if(survey.data[iterate][0] == null){
        			finished = true;
        			found = true;
        		}
        		else{
        			iterate = iterate + 1;
        		}
        	}
        	else{
        		found = true;
        		finished = true;
        	} 
        }

        // Change Question Text
        if(found == true){
        	if(finished == true){
        		isSurveyFinished = true;
        		qNumber=totalQuestions;
        		setProgressBar();
        		document.getElementById("finishBtn").parentElement.style.display = "inline-flex";
        		document.getElementById('qText').innerHTML = "Please press the 'Done' button below to finish the survey.";
        		document.getElementById('transitionText').innerHTML = "Please press the 'Done' button below to finish the survey.";
        		document.getElementById("passBtn").parentElement.style.display = "none";
        		document.getElementById("prevBtn").parentElement.style.display = "none";
        		document.getElementById("choicesBox").style.display = "none";
        		document.getElementById("nextBtn").parentElement.style.display = "none";
        	}
          //alert(qIndex);
          setProgressBar();
          noOfSelectable = survey.data[qIndex][1];
          
          if(finished == false){
          	if(translated == true){
          		translate();
                //document.getElementById('qText').innerHTML = ""+survey.data[qIndex][(2+1)];
              }
              else{
              	document.getElementById('qText').innerHTML = ""+createTextLinks_(survey.data[qIndex][(3)]);
              }
            }
            
            $('body').animate({ scrollTop: top }, 0);
          }
          
          if(finished == false){
          	if(noOfSelectable == 0){
          		generateTransitionScreen(true, createTextLinks_(survey.data[qIndex][3]));
          	}
          	else{
          		generateTransitionScreen(false, createTextLinks_(survey.data[qIndex][3]));
          	}
          }

        // Do choice generation
        if(survey.data[qIndex][1] > 0){
        	cIndexes = []
        	choicesContainer.innerHTML = "";
        	choicesContainer.innerHTML += findChoices();
        	divItems = document.getElementsByClassName("buttonContainer");
        	$('body').animate({ scrollTop: top }, 0);
        }
        else{
        	cIndexes = []
        	choicesContainer.innerHTML = "";
        	$('body').animate({ scrollTop: top }, 0);
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
        	if(survey.data[cIndex] == null || survey.data[cIndex][0] == "^"){
        		eof = 1;
        	}
        	else{
            // Generate radio button if only 1 is selectable
            cIndexes.push(cIndex);
            if(noOfSelectable == 1){
            	if(resultsArray[resultsIndex][respondentIndex][survey.data[qIndex][2]] != null){
            		if(resultsArray[resultsIndex][respondentIndex][survey.data[qIndex][2]] == survey.data[cIndex][2]){
            			output+= '<div class="buttonContainer" style="background:#4aa24f2b;" onclick="choiceSelected(this, false)"><input type="radio" onclick="setAnswer('+ survey.data[cIndex][2] +', '+ cIndex +', null)" class="form-check-input" id="choice'+ cIndex +'" name="choice1" value="'+ survey.data[cIndex][2] +'" checked>';
            		}
            		else{
            			output+= '<div class="buttonContainer" onclick="choiceSelected(this, false)"><input type="radio" onclick="setAnswer('+ survey.data[cIndex][2] +', '+ cIndex +', null)" class="form-check-input" id="choice'+ cIndex +'" name="choice1" value="'+ survey.data[cIndex][2] +'">';
            		}
            	}
            	else{
            		output+= '<div class="buttonContainer" onclick="choiceSelected(this, false)"><input type="radio" onclick="setAnswer('+ survey.data[cIndex][2] +', '+ cIndex +', null)" class="form-check-input" id="choice'+ cIndex +'" name="choice1" value="'+ survey.data[cIndex][2] +'">';
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
            			output+= '<div class="buttonContainer" style="background:#4aa24f2b;" onclick="setAnswer('+ survey.data[cIndex][2] +', '+ cIndex +', this)"><input type="checkbox" class="form-check-input" id="choice'+ cIndex +'" name="choice1" value="'+ survey.data[cIndex][2] +'" checked>';
            		}
            		else{
            			output+= '<div class="buttonContainer" onclick="setAnswer('+ survey.data[cIndex][2] +', '+ cIndex +', this)"><input type="checkbox" class="form-check-input" id="choice'+ cIndex +'" name="choice1" value="'+ survey.data[cIndex][2] +'">';
            		}
            	}
            	else{
            		output+= '<div class="buttonContainer" onclick="setAnswer('+ survey.data[cIndex][2] +', '+ cIndex +', this)"><input type="checkbox" class="form-check-input" id="choice'+ cIndex +'" name="choice1" value="'+ survey.data[cIndex][2] +'">';
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

		if(Array.isArray(resultsArray[resultsIndex][respondentIndex][qCode])){
			for(var i = 0; i < resultsArray[resultsIndex][respondentIndex][qCode].length; i++){
				if(resultsArray[resultsIndex][respondentIndex][qCode][i] == num){
					found = true;
				}
      		}
		}
		else{
			if(resultsArray[resultsIndex][respondentIndex][qCode] == num){
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
      		if(finished == false){
      			document.getElementById("nextBtn").disabled = false;
      		}
      	}
      	else{
		  //check first if answer exists in array, if it exists, remove
		  var checkbox = document.getElementById("choice"+choiceIndex);
		  if(!selectedAnswer.includes(num)){
				selectedAnswer.push(num);
				checkbox.checked = true;
				parentDiv.style.backgroundColor = "#4aa24f2b";

          }
          else
          {
			for( var i = 0; i < selectedAnswer.length; i++){ 
          		if ( selectedAnswer[i] === num) {
          			selectedAnswer.splice(i, 1); 
          		}
			  }
			checkbox.checked = false;
          	parentDiv.style.backgroundColor = "white";
			
          }

          if(selectedAnswer.length > 0){
          	document.getElementById("nextBtn").disabled = false;
          }
          else{
          	document.getElementById("nextBtn").disabled = true;
		  }
		  
		  $('#choice'+choiceIndex).click(function(e){e.preventDefault();
			e.stopPropagation();});
        }
      }

      document.getElementById('ckbx-style-7-1').onchange = function(e){

      	if(e.target.checked) {
      		translate()
      	} else {
      		translate()
      	}
      };
      
      function uploadResults(){
      	var resultsArray = [];
      	var qCodeList = [];
        //Find next question
        var survey = surveyData;
        var finished = false;
        var iterate = 1;
        var results = [];
        var surveyLength = survey.data.length;
        var surveyList = []
        surveyList = JSON.parse(localStorage.getItem('surveyList'));
        
        if(surveyName == "none"){
        	for(var i = 0; i < surveyList.length ; i++){
        		if(surveyList[i][0] == surveyID){
        			surveyName = surveyList[i][1];
        		}
        	}
        }
        
        if(facilitated == false){
        	results = JSON.parse(sessionStorage.getItem('sessionResults'));
        }
        else{
        	results = JSON.parse(localStorage.getItem('results'));
        }

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
          	if(facilitated == false){
          	    autoRedirect = true;
                setTimeout(function () {
    							   window.location.href = "http://ootomast.000webhostapp.com/dosurvey"; 
    							}, 1000); //will call the function after 1 secs.
            }
          	
          });
          
          posting.fail(function(xhr, status, error) {
                  //Ajax request failed.
                  var errorMessage = xhr.status + ': ' + xhr.statusText
                  alert('Error - ' + errorMessage);
                  document.getElementById("uploadingScreen").style.display = "none";
                  if(facilitated == false){
              	    autoRedirect = true;
                    setTimeout(function () {
        							   window.location.href = "http://ootomast.000webhostapp.com/dosurvey"; 
        							}, 1000); //will call the function after 1 secs.
                }
            })
        }

        function setProgressBar(){
        	var percent;

        	percent = (qNumber/totalQuestions) * 100
        	$('.progress-bar').css('width', percent+'%').attr('aria-valuenow', percent);
        }
        
        function createTextLinks_(text) {
			videoUrl = [];
			var spaceText;
			var matchText;
			playerCount = 0;
			withMedia = false;

			if(youtubeReady == true){
				text = (text || "").replace(
					/(http:|https:)?\/\/(www\.)?(youtube.com|youtu.be)\/(watch)?(\?v=)?(\S+)?/gi,
					function(match, space, url){
						videoUrl.push(match);
						var replaceText = '<div style="margin: 2%; text-align: center;"><div class="vidPlayer" id="player'+ playerCount +'"></div></div>';
						playerCount++;
						withMedia = true;
						return replaceText;
					}
				);
			}

			text = (text || "").replace(
					/(http:|https:)?\/\/(www\.)?(imgur.com)\/?(a\S+)?(\S+)?/gi,
					function(match, space, url){
						var imgid = imgur_parser(match);
						var replaceText = '<div id="imgContainer" style="margin: 3%; text-align: center;"><img src="'+match+'"></div>';
						withMedia = true;
						return replaceText;
					}
				);

			text = (text || "").replace(
				/([^\S]|^)(((https?\:\/\/)|(www\.))(\S+))/gi,
				function(match, space, url){
				var hyperlink = url;
				if (!hyperlink.match('^https?:\/\/')) {
					hyperlink = 'http://' + hyperlink;
				}
				return space + '<a href="' + hyperlink + '"> Link </a>';
				}
			);

			return text;
        };

      </script>
    </body>
    </html>
