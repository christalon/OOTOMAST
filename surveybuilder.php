<head>
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
    padding-top: 3;
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
		margin: 20px;
		box-shadow: 8px 4px 5px 0px rgb(220, 220, 220);
		background: white;
		font-size: 30px;
		font-family: 'Montserrat', sans-serif;
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

	#instructionsBody{
		background-color: #1c4c1b;
	    color: white;
	    padding: 10px;
	    border-radius: 10px;
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
	    margin-top: 20px;
	    background: white;
	    margin: 20px;
    	box-shadow: 8px 4px 5px 0px rgb(220, 220, 220);
    	font-size: 30px;
		font-family: 'Montserrat', sans-serif;
		overflow: hidden;
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

    /* Grid item css */

	</style>
	<title>Survey Builder</title>
	<link rel="stylesheet" href="css/compiled-4.10.1.min.css">
	<script src="https://kit.fontawesome.com/637ce47f6a.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link rel="stylesheet" href="css/light-modal.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">

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
  Uploading Survey...Please Wait
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
    <a href="index.php" class="logo animated fadeInLeft"><img src="assets/ootomast.svg"></a>
      <ul class="main-nav" id="js-menu" style="margin-bottom: 0px;">
        <li>
            <a href="index.php" class="nav-links" style="color: white;">Surveys</a>
        </li>
        <li>
          	<a href="resultsindex.php" class="nav-links">Results</a>
        </li>
        <li>
          	<a href="#" class="nav-links">About Us</a>
        </li>
	</nav>
	<header>
          <div style="margin: 15px 10px ; display: flex;">
              <h3 style="font-size: 25px"> Survey Builder </h3>
          </div>
    </header>

	<div class="animated fadeIn" style="margin: 10px">
   		<h5>Instructions <span class="badge badge-primary">Important!</span></h5>
   		<div id="instructionsBody">
   			<p>Welcome to the Survey Builder! As of the moment, this survey application can only support multiple choice-type questions, so make sure to keep that in my mind!</p><br>
   			<p>Questions structure includes a question code, question text, and question translation</p><br>
   			<p>Transitions are screens in which divides a section of the survey, this is helpful when trying to group together the different topics of the survey. It includes transition text and translation</p><br>
   			<p>Choices has two types, single-choice questions and multiple choice questions. You will need to set the number of selectable answer to specify which choice type you are creating.</p><br>
   			<p>Routes are in which the next question would be if a certain choice has been selected. You will need to input the question code you want to route to.</p>
   			<p>Categories are for mining purposes to help you categorize the choices in identifying groups</p>
   		</div>
  </div>
  <div >
  	<div id = "builderMenu">
  		<button id="newSurveyButton" type="button" class="btn btn-success" onclick="showBuilder(1)">New Survey</button>
  	</div>
  </div>

  <div id = "builderMenu2" style = "display :none">
  		<button id="newSurveyButton2" type="button" class="btn btn-success" onclick="showBuilder(1)">New Survey</button>
  	</div>


  <div id="surveyTitleBuilder" style="display: none; margin: 10px;">
  	<form class="needs-validation" novalidate onsubmit="return showBuilder(2)">
  		<div class="md-form">
	  		<input type="text" id="SurveyTitle" class="form-control" required>
			  <div class="invalid-feedback">
					Please add a survey title.
				</div>
	  		<label for="SurveyTitle">Survey Title</label>
	  	</div>
  		
	  	<button type="submit" class="btn btn-success">Add Survey</button>
	</div>


<div id="questionsMenu" style = "display :none">
	<button id="addQuestionButton" type="button" class="btn btn-success" onclick="showBuilder(3)">Add Question</button>
	<button id="addTransitionButton" type="button" class="btn btn-success" onclick="showBuilder(5)">Add Transition Page</button>
	<button id="menuButton" type="button" class="btn btn-success" onclick="builderMenu()">Back to Builder Menu</button>

  </div>

  <div id = "choiceMenu" style = "display :none">
 
 	<button id="addNewQuestion" type="button" class="btn btn-success" onclick="showBuilder(3)">Add New Question</button>
  	<button id="newChoice" type="button" class="btn btn-success" onclick="showBuilder(4)">Add Choices</button>
  	<button id="addTransitionButton2" type="button" class="btn btn-success" onclick="showBuilder(5)">Add New Transition Page</button>
  	<button id="doneButton" type="button" class="btn btn-success" onclick="saveSurvey()">Done</button>
	</div>
  <div id="builderBody" style = "display :none; margin: 10px;">
  	<h5  id = "qListName" style="margin-bottom: 20px;">Questions List</h5>
  	<div id="questionsTable">
  		<!--Table-->
		<table id="tablePreview" class="table table-sm">
		<!--Table head-->
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Choice Count</th>
		      <th>Question Code</th>
		      <th>Question Text</th>
		      <th>Question Translation</th>
		      <th>Action</th>
		    </tr>
		  </thead>
		  <!--Table head-->
		  <!--Table body-->
		  <tbody>

		  </tbody>
		  <!--Table body-->
		</table>
		<!--Table-->
  	</div>
  	<div id="questionBuilder" style="display: none">
  		<div class="md-form">
	  		<input type="text" id="selectable" class="form-control">
	  		<label for="selectable">Set Number of Selectable Choices</label>
	  	</div>
	  	<div class="md-form">
	  		<input type="text" id="qCode" class="form-control">
	  		<label for="qCode">Question Code</label>
	  	</div>
	  	<div class="md-form">
	  		<textarea id="qText" class="md-textarea form-control" rows="3"></textarea>
	  		<label for="qText">Question Text</label>
	  	</div>
	  	<div class="md-form">
	  		<textarea id="qTranslation" class="md-textarea form-control" rows="3"></textarea>
	  		<label for="qTranslation">Question Translation</label>
	  	</div>
	  	<button id="addQuestionBtn" type="button" class="btn btn-success" onclick="addQuestion()">Add Question</button>
	</div>
  	
  	
  	<div id="choiceBuilder" style="display: none">
  		<h5 style="margin-bottom: 20px;">Choices List</h5>
  		
		
  		<div id="choicesTable">
	  		<!--Table-->
			<table id="tablePreview2" class="table table-sm">
			<!--Table head-->
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>Category</th>
			      <th>Question Code </th>
			      <th>Route</th>
			      <th>Text</th>
			      <th>Translation</th>
			      <th>Action</th>
			      
			    </tr>
			  </thead>
			  <!--Table head-->
			  <!--Table body-->
			  <tbody>
			  </tbody>
			  <!--Table body-->
			</table>
			<!--Table-->
  		</div>

  		<div id="dropDowns">
  			<select class="mdb-select md-form colorful-select dropdown-primary" id="qCodeList" name="qCodeList" value = "Select Question Code" searchable="Search here..">
  				
			</select>

			<select class="mdb-select md-form colorful-select dropdown-primary" id="routeCodeList" name="routeCodeList" value = "Select Route To" searchable="Search here where to route.." data-stop-refresh="true">
  				
			</select>
  		</div>

  		<div class="md-form">
	  		<input type="text" id="category" class="form-control">
	  		<label for="category">Set Choice Category</label>
	  	</div>
	  	<div class="md-form">
	  		<textarea id="cText" class="md-textarea form-control" rows="3"></textarea>
	  		<label for="cText">Choice Text</label>
	  	</div>
	  	<div class="md-form">
	  		<textarea id="cTranslation" class="md-textarea form-control" rows="3"></textarea>
	  		<label for="cTranslation">Choice Translation</label>
	  	</div>
	  
  		<button id="addChoiceBtn" type="button" class="btn btn-success" onclick="addChoice()" >Add</button>
  	</div>

  	<div id="transitionBuilder" style="display: none">
  		<h5 style="margin-bottom: 20px;">Add Transition</h5>
	  	<div class="md-form">
	  		<textarea id="tText" class="md-textarea form-control" rows="3"></textarea>
	  		<label for="tText">Transition Text</label>
	  	</div>
	  	<div class="md-form">
	  		<textarea id="tTranslation" class="md-textarea form-control" rows="3"></textarea>
	  		<label for="tTranslation">Transition Translation</label>
	  	</div>
	  	<button id="addTSlide" type="button" class="btn btn-success" onclick="addTransition()">Add Transition Slide</button>
	</div>


	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
	<script src="js/mdb.min.js"></script>
	<script src="js/papaparse.min.js"></script>

<script type="text/javascript">
	$('.mdb-select').materialSelect({
	});

	var selectedQCode;
	var routeSelected = 1;

	$('#qCodeList').change(function() 
	{
		listChoices($('select#qCodeList').val());
		selectedQCode = $('select#qCodeList').val();
    });

    $('#routeCodeList').change(function() 
    {
		routeSelected = $('select#routeCodeList').val();
    });

	let mainNav = document.getElementById('js-menu');
	let navBarToggle = document.getElementById('js-navbar-toggle');

	navBarToggle.addEventListener('click', function () {
		
		mainNav.classList.toggle('active');
	});


	var survey = {};
	var qCodeList = [];
	var surveyListData = []
	var questionCount = 0;
	var surveyCode;

	(function() {
		'use strict';
		window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
		form.addEventListener('submit', function(event) {
		if (form.checkValidity() === false) {
		event.preventDefault();
		event.stopPropagation();
		}
		form.classList.add('was-validated');
		}, false);
		});
		}, false);
		})();

	initializeSurveyArray();
	
	function createSurveyData(name){
		surveyCode = Math.random().toString(36).substr(2, 6);

		surveyListData = [surveyCode, name];
	}

	function choiceMenu()
	{
		var cMenu = document.getElementById("choiceMenu");
		var cBuilder = document.getElementById("choiceBuilder");
		var qBuilder = document.getElementById("questionBuilder");
		var qTable = document.getElementById("questionsTable");
		var bBody = document.getElementById("builderBody");
		var tBuilder = document.getElementById("transitionBuilder");
		var qListName = document.getElementById("qListName");


		qListName.style.display = "block";
		bBody.style.display = "block";
		tBuilder.style.display = "none";
		cBuilder.style.display = "none";
		cMenu.style.display = "block";
		qBuilder.style.display = "none";
		qTable.style.display = "block";

		document.getElementById("category").value = "";
		document.getElementById("cText").value = "";
		document.getElementById("cTranslation").value = "";



	}

	function initializeSurveyArray(){
		survey.data = [];
	}

	function showBuilder(id)
	{
		
		var qMenu = document.getElementById("questionsMenu");
		var bMenu = document.getElementById("builderMenu2");
		var sBuilder = document.getElementById("surveyTitleBuilder");
		var qBuilder = document.getElementById("questionBuilder");
		var cBuilder = document.getElementById("choiceBuilder");
		var tBuilder = document.getElementById("transitionBuilder");
		var tBuilder2 = document.getElementById("transitionBuilder");
		var qListName = document.getElementById("qListName");

		qBuilder.style.display = "none";
		cBuilder.style.display = "none";
		tBuilder.style.display = "none";
		tBuilder2.style.display = "none";
		qMenu.style.display = "none";
		

		if(id == 1)
		{
			bMenu.style.display = "none";
			sBuilder.style.display = "block";
			newSurveyButton.style.display = "none";
			//qBuilder.style.display = "block";
		}
		else if(id == 2)
		{
			if(document.getElementById("SurveyTitle").validity.valid == true){
				sBuilder.style.display = "none";
				surveyTitleBuilder.style.display = "none";
				qMenu.style.display = "block";

				createSurveyData(document.getElementById("SurveyTitle").value)
			}
		}

		else if(id == 3)
		{
			questionsTable.style.display = "block";
			builderBody.style.display = "block";
			questionBuilder.style.display = "block";
			//cBuilder.style.display = "block";
		}
		else if(id == 4){
			builderBody.style.display = "block";
			questionsTable.style.display = "none";
			qListName.style.display = "none";
			cBuilder.style.display = "block";
			//cBuilder.style.display = "block";
		}
		else
		{
			builderBody.style.display = "block";
			questionsTable.style.display = "none";
			qListName.style.display = "none";
			tBuilder.style.display = "block";
			qMenu.style.display = "none";
			
		}
		
		return false;
	}

	function builderMenu()
	{
		var builderM = document.getElementById("builderMenu2");
		var qMenu = document.getElementById("questionsMenu");
		var cMenu = document.getElementById("choiceMenu");
		var bBuilder = document.getElementById("builderBody");

		cMenu.style.display = "none";
		bBuilder.style.display = "none";
		qMenu.style.display = "none";
		builderM.style.display = "block";

		document.getElementById("SurveyTitle").value = "";
	}

	function addQuestion(){
		var noSelectable = document.getElementById("selectable");
		var qText = document.getElementById("qText");
		var qTranslation = document.getElementById("qTranslation");
		var qTable = document.getElementById("questionsTable").getElementsByTagName('tbody')[0];
		var qCode = document.getElementById("qCode");

		var success = 0;
		var question = [];
		question[0] = "^";

		var qCodeListData = [];

		if(isNaN(parseInt(noSelectable.value)) == false){
			question[1] = noSelectable.value;
			success += 1;
		}
		else{
			alert("Number of Selectable should not be empty and must be a number greater than 0!")
		}

		if(qCode.value != ""){
			if(qCodeList.includes(qCode.value) == false)
			{
				
				question[2] = qCode.value;
				qCodeListData[0] = qCode.value;
				//qCodeList.push(qCode.value);
				success += 1;
			}
			else{
				alert("Question Code already exists!");
			}
			
		}
		else{
			alert("Question Code cannot be empty!")
		}

		if(qText.value != ""){
			question[3] = qText.value;
			qCodeListData[1] = qText.value;
			success += 1;
		}
		else{
			alert("Question Text cannot be empty!")
		}


		question[4] = qTranslation.value;
		success += 1;

		if(success == 4){
			survey.data.push(question);
			noSelectable.value = "";
			qCode.value = ""
			qText.value = "";
			qTranslation.value = "";
			questionCount += 1;

			qTable.innerHTML += "<tr><th scope='row'>"+ questionCount +"</th><td>" +question[1]+ "</td><td>"+ question[2]+ "</td><td>"+  question[3] +"</td><td>"+ question[4] +"</td><td><button id='delete' type='button' class='btn btn-danger' onclick='deleteQuestion()' style='margin:0; padding: 5 15 5 15;'>Delete</button></td></tr>";

			qCodeList.push(qCodeListData);

			alert("Question successfully added!");

			updateQCodeList();

		}
		choiceMenu();
	}

	function updateQCodeList(){
		var codeList = document.getElementById("qCodeList");
		var routeList = document.getElementById("routeCodeList");

		$('#routeCodeList').materialSelect({destroy:true});
		$('#routeCodeList').empty();
		$('#routeCodeList').data('stop-refresh', true);

		routeList.innerHTML = "<option value='1' disabled selected>Select Route To</option><option value=''>None</option><option value='END'>END</option>";
		
		codeList.innerHTML = "<option value='1' disabled selected>Select Question</option>";
		
		for(var i = 0; i < qCodeList.length; i++){
			codeList.innerHTML += "<option value="+ qCodeList[i][0] +">"+ qCodeList[i][1] +"</option>";
			routeList.innerHTML += "<option value="+ qCodeList[i][0] +">"+ qCodeList[i][1] +"</option>";
		}

		$('#routeCodeList').materialSelect();
	}

	function listChoices(qCode){
		var iterate = 0;
		var cIndex = iterate+1;
		var finished = 0;
		var eof = 0;
		var cTable = document.getElementById("choicesTable").getElementsByTagName('tbody')[0];
		cTable.innerHTML = "";

		while(finished != 1){
			if(survey.data[iterate] != null){
				if(survey.data[iterate][0] == "^" || survey.data[iterate][0] == ""){
	                if(survey.data[iterate][2] == qCode){
	                  cIndex = iterate + 1;
	                  while(eof != 1){
	                  	if(survey.data[cIndex] != null){
	                  		if(survey.data[cIndex][0] == "^" || survey.data[cIndex][0] == ""){
		                      finished = 1;
		                      eof = 1;
		                    }
		                    else{
		                      cTable.innerHTML += "<tr><th scope='row'>"+ cIndex +"</th><td>" + survey.data[cIndex][0]+ "</td><td>"+ qCode +"</td><td>"+ survey.data[cIndex][1] +"</td><td>"+ survey.data[cIndex][3] +"</td><td>"+ survey.data[cIndex][4] +"</td><td><button id='delete1' type='button' class='btn btn-danger' onclick='deleteChoice()' style='margin:0; padding: 5 15 5 15;'>Delete</button></td></tr>";
		                      cIndex = cIndex+1;
		                    }
	                  	}
	                  	else{
	                  		finished = 1;
		                    eof = 1;
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
			else{
				finished = 1      
            }
		}
	}

	function addChoice()
	{
		var choice = []
		var routeCode = document.getElementById("routeTo");
		var selectedCode = document.getElementById("qCodeList")
		var category = document.getElementById("category");
		var cText = document.getElementById("cText");
		var cTranslation = document.getElementById("cTranslation");
		var success = 0;
		var cMenu = document.getElementById("choiceMenu");

		if(survey.data.length == 0){
			alert("Survey doesn't have questions yet!");
		}
		else
		{
			success += 1;
		}


		if(category.value != ""){
			if(category.value[1] == null){
				choice[0] = category.value;
				success += 1;
			}
			else{
				alert("Category should only be a single letter!");
			}
		}
		else{
			alert("Category cannot be empty!");
		}

		if(routeSelected != 1){
			choice[1] = routeSelected;
		}
		else{
			choice[1] = "";
		}

	    var selectedValue = selectedCode.options[selectedCode.selectedIndex].value;
		if (selectedValue == "1")
		{
		    alert("Please select question code");
		}

		var index;
		index = findQuestionIndex(selectedQCode);

		
		choice[2] =  ((index[0] - index[1])-1)+"";

		if(cText.value != ""){
			choice[3] = cText.value;
			success += 1;
		}
		else{
			alert("Choice Text cannot be empty!");
		}


		choice[4] =  cTranslation.value;
		success += 1;

		if(success >= 4){
			var indexes;
			indexes = findQuestionIndex(selectedQCode);
			survey.data.splice(indexes[0], 0, choice);
			listChoices(selectedQCode);
			alert("Choice successfully added!");
		}
		else
		{
			alert("Please try again");
		}

		choiceMenu();
		
	}

	function findQuestionIndex(qCode){
		var iterate = 0;
		var finished = 0;
		var eof = 0;
		var result = [];

		while(finished != 1){
              if(survey.data[iterate][0] == "^" || survey.data[iterate][0] == ""){
                if(survey.data[iterate][2] == qCode){
                  cIndex = iterate + 1;
                  while(eof != 1){
                  	if(survey.data[cIndex] != null){
                  		if(survey.data[cIndex][0] == "^" || survey.data[cIndex][0] == ""){
	                      finished = 1;
	                      eof = 1;
	                    }
	                    else{
	                      cIndex = cIndex+1;
	                    }
                  	}
                  	else{
                  		finished = 1;
	                    eof = 1;
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
        result.push(cIndex);
        result.push(iterate);

        return result;
	}

	function addTransition(){
		var bBuilder = document.getElementById("builderBody");
		var transition = [];
		var tText = document.getElementById("tText");
		var tTranslation = document.getElementById("tTranslation");
		var qTable = document.getElementById("questionsTable").getElementsByTagName('tbody')[0];
		var success = 0;
		var qListName = document.getElementById("qListName");

		builderBody.style.display = "block";

		transition[0] = "^";
		transition[1] = "0";
		transition[2] = "aaa";

		if(tText.value != ""){
			transition[3] = tText.value;
			success += 1;
		}
		else{
			alert("Transition text cannot be empty!");
		}


		transition[4] = tTranslation.value;

		if(success == 1)
		{
			survey.data.push(transition);
			questionCount += 1;

			qTable.innerHTML += "<tr><th scope='row'>"+ questionCount +"</th><td>" + "NA" +  "</td><td>" +transition[2]+ "</td><td>"+  transition[3] +"</td><td>"+ transition[4] +"</td><td><button id='delete' type='button' class='btn btn-danger' onclick='deleteQuestion()' style='margin:0; padding: 5 15 5 15;'>Delete</button></td></tr>";

			alert("Transiliton slide successfully added!");
			qListName.style.display = "none";


		}

		choiceMenu();
	}

	function deleteQuestion()
	{
	
		var index, table = document.getElementById("tablePreview");
		for(var i = 1; i < table.rows.length;i++)
		{
			var value = table.rows[i].cells[2].innerHTML;
				

			table.rows[i].cells[5].onclick = function()
			{

				var c = confirm("do you want to delete this row");
				if(c==true)
				{
					for (var j = 0; j < 10;j++)
					{
						
						if (qCodeList[j] == value)
						{
							var count = j;
							qCodeList.splice(count,1);

						}
					}

					index = this.parentElement.rowIndex;
					table.deleteRow(index);
					updateQCodeList();

				}
			}

		}


	}

	function deleteChoice()
	{
		var index, table = document.getElementById("tablePreview2");

		for(var i = 1; i < table.rows.length;i++)
		{
			//var value = table.rows[i].cells[2].innerHTML;
				

			table.rows[i].cells[5].onclick = function()
			{

				var c = confirm("do you want to delete this row");
				if(c==true)
				{
					/*for (var j = 0; j < 10;j++)
					{
						
						if (qCodeList[j] == value)
						{
							var count = j;
							qCodeList.splice(count,1);

						}
					}*/

					index = this.parentElement.rowIndex;
					table.deleteRow(index);

				}
			}

		}

	}

	function uploadSurveyMeta(surveyCode, surveyID, surveyName) {
		var params = "sID=" + surveyID + "&sCode=" + surveyCode + "&sName=" + surveyName;
				
		xhr = new XMLHttpRequest();
		
		xhr.open("POST", "uploadsurvey.php");
		xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhr.onreadystatechange = function() {//Call a function when the state changes.
			if(xhr.readyState == 4 && xhr.status == 200) {
				// Add survey to surveyList
				if(!localStorage.getItem('surveyList')){
					var surveyData = [];
					surveyData.push(surveyListData);

					localStorage.setItem("surveyList", JSON.stringify(surveyData))
				}
				else{
					var surveyData = [];
					surveyData = JSON.parse(localStorage.getItem('surveyList'));
					surveyData.push(surveyListData);

					localStorage.setItem("surveyList", JSON.stringify(surveyData));
				}

				// Set survey data to localStorage
				localStorage.setItem(surveyListData[0], JSON.stringify(survey));

				// Redirect
				setTimeout(function () {
					window.location.replace("http://ootomast.000webhostapp.com/index.php");
				}, 100);
			}
		}

		xhr.send(params);
	}


	function saveSurvey(){
		var r = confirm("Are you sure you want to finish building a survey?");
		if (r == true) {
			document.getElementById("uploadingScreen").style.display = "block";

			//Upload survey to Dropbox
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function () {
				if (xhr.readyState == XMLHttpRequest.DONE) {
					jsonResponse = JSON.parse(xhr.responseText);
					uploadSurveyMeta(surveyListData[0], jsonResponse["id"], surveyListData[1]);
				}
			};
			xhr.open("POST", "https://content.dropboxapi.com/2/files/upload");
			xhr.setRequestHeader("Authorization", "Bearer fk7KkPvKLrAAAAAAAAAAVwRxiFVN59RZPK04m1imA0qk22EGjOP_IUEV8bwb9uJk");
			xhr.setRequestHeader("Content-Type", "application/octet-stream");
			xhr.setRequestHeader(
			"Dropbox-API-Arg",
			'{"path":"/csv/' + surveyListData[1] + '.csv", "mode":{".tag":"overwrite"}}'
			);

			xhr.send(Papa.unparse(survey));
		}
	}

</script>
</body>