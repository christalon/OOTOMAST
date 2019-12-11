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
	.navbar {
	  font-size: 18px;
      background: linear-gradient(to right, rgba(78,126,78,1) 0%, rgba(9,58,8,1) 100%);
      border: 1px solid rgba(0, 0, 0, 0.2);
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

	@media screen and (min-width: 768px) {
    .navbar {
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

    /* Grid item css */

	</style>
	<script src="https://kit.fontawesome.com/637ce47f6a.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css"> 
</head>

<body>
	<nav class="navbar">
		<span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fas fa-bars"></i>
    </span>
    <a href="#" class="logo"><img src="assets/ootomast.svg" class="animated fadeInLeft"></a>
      <ul class="main-nav" id="js-menu">
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
              <h3 style="font-size: 25px"> Survey Results Available </h3>
          </div>
    </header>

	<div class="animated fadeIn">
    <form id="form-id" method="post" action="visualization.php">
  		<div class="cards animated fadeIn" id="gridItemHolder">

  		</div>
    </form>
	</div>


<script type="text/javascript">
	// Generate survey list elements
	var itemHolder = document.getElementById("gridItemHolder");
	itemHolder.innerHTML += generateSurveyList();

	let mainNav = document.getElementById('js-menu');
	let navBarToggle = document.getElementById('js-navbar-toggle');

	navBarToggle.addEventListener('click', function () {
	    
	    mainNav.classList.toggle('active');
	});

  function deleteSurvey(){

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
		if(!localStorage.getItem('surveyList')) {

		} else {
	    var surveyList = [];
	    var results = [];
	    surveyList = JSON.parse(localStorage.getItem('surveyList'));
		  results = JSON.parse(localStorage.getItem('results'));
		  for(var i = 0; i < surveyList.length ; i++){
		  	for(var j = 0; j < results.length; j++){
		  		if(surveyList[i][0] == results[j][0]){
		  			output+= '<button type="submit" class="card animated fadeIn" name="survey" value="'+ surveyList[i][0] +'"> '+ surveyList[i][1] +'</button>';
		  		}
		  	}
		  }
		}
		return output;
	}


	function addSurvey(){

	}
</script>
</body>