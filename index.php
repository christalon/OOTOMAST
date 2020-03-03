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

	.my_content_container a {
	    color: #000000;
	    display: block;
	    height: 2.5em;
	    padding: 8 1em 0em 1em;
	    width: 5em;       
	    text-decoration: none;
	    background-color: white;     
	    box-shadow: 1px 4px 5px 0px rgb(0, 0, 0);
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
	<script src="https://kit.fontawesome.com/637ce47f6a.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link rel="stylesheet" href="css/light-modal.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
  <title>OOTOMAST</title>
</head>

<body>
	<nav class="navbar" id="navbarvis">
		<span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fas fa-bars"></i>
    </span>
    <a href="#" class="logo animated fadeInLeft"><img src="assets/ootomast.svg"></a>
      <ul class="main-nav" id="js-menu">
        <li>
            <a href="#" class="nav-links" style="color: white;">Surveys</a>
        </li>
        <li>
          	<a href="resultsindex.php" class="nav-links">Results</a>
        </li>
        <li>
          	<a href="#" class="nav-links">About Us</a>
        </li>
	</nav>

	<div class="animated fadeIn">
    <form id="form-id" method="post" action="survey.php">
      <div class="cards animated fadeIn" id="gridItemHolder">

      </div>
    </form>
  </div>

  <img src="assets/clickhere.svg" class="animated bounceIn" id="clickHere" style="width: 60%;max-width: 300px;
    position: fixed;
    bottom: 25;
    right: 100;">

	<a href="#addModal" class="float" id="modalBtn">
		<i class="fas fa-plus"></i>
	</a>

  <div class="light-modal" id="addModal" role="dialog" aria-labelledby="light-modal-label" aria-hidden="false">
        <div class="light-modal-content animated zoomInUp">
            <!-- light modal header -->
            <div class="light-modal-header">
                <h3 class="light-modal-heading">Add Survey</h3>
                <a href="#" class="light-modal-close-icon" aria-label="close">&times;</a>
            </div>
            <!-- light modal body -->
            <div class="light-modal-body">
                <p> Add survey via link</p>
              <input type="text" id="url" placeholder="Enter URL"><br>
              <input type="text" id="surveyNameURL" placeholder="Enter survey name">
              <input type="button" value="Submit" onclick="parseURL()">
              <br><br>
              <p> Add survey via file upload </p>
              <input type="file" value="Upload" id="files">
              <input type="text" id="surveyNameFile" placeholder="Enter survey name">
              <input type="button" value="Upload" onclick="parseUpload()">
              <br><br>
              <p> Create survey via Survey Builder </p>
              <div class="my_content_container">
			    <a class="" href="surveybuilder.php">Create</a>
				</div>    
            </div>
            <!-- light modal footer -->
            <div class="light-modal-footer">
                <a href="#" class="light-modal-close-btn" aria-label="close">Close</a>
            </div>
        </div>
    </div>

<script src="js/papaparse.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="js/mdb.min.js"></script>
<script type="text/javascript">
	// Generate survey list elements
  initializeUI();

	var itemHolder = document.getElementById("gridItemHolder");
	itemHolder.innerHTML += generateSurveyList();

	let mainNav = document.getElementById('js-menu');
	let navBarToggle = document.getElementById('js-navbar-toggle');

	navBarToggle.addEventListener('click', function () {
	    
	    mainNav.classList.toggle('active');
	});
	
	window.onload = () => {
        let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
        bannerNode.parentNode.removeChild(bannerNode);
    }

  $(window).resize(function() {
    var el = $('#clickHere');
    var width = el.width();
    if(window.innerWidth <= 500){
      $("#clickHere").css({'bottom': 25 + (300-width)/6,
                      'right': 100
                     });
    }
    else{
      $("#clickHere").css({'bottom': 25,
                      'right': 100
                     });
    }
  });

  function initializeUI(){
    var el = $('#clickHere');
    var width = el.width();

    if(window.innerWidth <= 500){
      $("#clickHere").css({'bottom': 25 + (300-width)/6,
                      'right': 100
                     });
    }
  }

	function parseURL(){
    var url = document.getElementById('url').value;
    var name = document.getElementById('surveyNameURL').value;

    if(name != ""){
    	//alert(url);
    console.log(url)
    Papa.parse(url, {
		download: true,
		complete: function(results) {
			console.log(results);
				//alert(results.data[0][2]);
				//store("results", results, 1);
				var surveyId = updateSurveyList();
				//localStorage.results = JSON.stringify(results);
				localStorage.setItem(surveyId+'', JSON.stringify(results));
				}
			});
      setTimeout(function(){
        window.location.reload();
      },100);  
    }
    else{
    	// error no survey name entered
    }
  }

  function parseUpload(){
  	var file = document.getElementById("files").files[0];
  	var name = document.getElementById('surveyNameFile').value;

  	if(name != ""){
  		Papa.parse(file, {
		download: true,
		complete: function(results) {
			console.log(results);
				//alert(results.data[0][2]);
				//store("results", results, 1);
				//alert(name);
				var surveyId = updateSurveyList(name);
				//localStorage.results = JSON.stringify(results);
				localStorage.setItem(surveyId+'', JSON.stringify(results));
				}
			});
    	setTimeout(function(){
        window.location.reload();
      },100);   
  	}
  	else{
  		//error no survey name
  	}
  	
  }

  function deleteSurvey(surveyID){
  	var key = 0;
  	var sList = JSON.parse(localStorage.getItem('surveyList'));
  	var clickhere = document.getElementById("clickHere");
  	localStorage.removeItem(surveyID);

  	if(confirm("Are you sure you want to delete this survey?") == true){
  		for(i=0; i < sList.length ; i++){
	  		if(sList[i][0] == surveyID){
	  			key = i;
	  		}
	  	}

	  	sList.splice(key, 1);

	  	localStorage.setItem('surveyList', JSON.stringify(sList));

	  	if(sList.length == 0){
	  		clickhere.style.display = "block";
	  	}

	  	setTimeout(function(){
	        window.location.reload();
	      },100);
	  	}
  	
  }

  function updateSurveyList(surveyName){
  	var id = Math.random();
  	if(!localStorage.getItem('surveyList')) {
  		  var surveyList = [];
		  surveyList.push([id, surveyName]);

		  localStorage.surveyList = JSON.stringify(surveyList);
		} else {
		  var surveyList = [];
		  surveyList = JSON.parse(localStorage.getItem('surveyList'));
		  surveyList.push([id, surveyName]);

		  localStorage.surveyList = JSON.stringify(surveyList);
		}
	return id;
  }

	function generateSurveyList(){
		var output = ""
    	var clickhere = document.getElementById("clickHere");
		if(!localStorage.getItem('surveyList')) {
	      clickhere.style.display = "block";
		} else {
			var surveyList = []
			surveyList = JSON.parse(localStorage.getItem('surveyList'));

			if(surveyList.length == 0){
				clickhere.style.display = "block";
			}
			else{
				clickhere.style.display = "none";
			}
			
			for(var i = 0; i < surveyList.length ; i++){
			  	output+= '<div style="display: grid; position: relative;"><button type="submit" class="card animated fadeIn" name="surveyId" value="'+ surveyList[i][0] +'"> '+ surveyList[i][1] +'</button><input type="hidden" name="surveyName" value="'+ surveyList[i][1] +'" /><a href="#" class="fas fa-trash-alt" style="position: absolute; top: 40px; right: 40px; color: grey; font-size: 25px;" onclick="deleteSurvey('+ surveyList[i][0] +')"></a></div>';
		  }
		}
		return output;
	}


	function addSurvey(){

	}
	
	
</script>
</body>