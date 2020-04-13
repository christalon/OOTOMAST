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
	#js-menu a,
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

	#card-container{
		margin-top: 30px;
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
			margin-bottom: 0rem;
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
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css"> 
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/compiled-4.10.1.min.css">
	<title>OOTOMAST</title>
</head>

<body>
	<nav class="navbar" id="navbarvis" style="position: fixed; top: 0; width: 100%; z-index: 9999;">
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

	<header style="margin-top: 100px;">
          <div style="margin: 15px 10px ; display: flex;">
              <h3 style="font-size: 25px; font-family: Roboto; font-weight: 300;"> Survey Results Available </h3>
          </div>
    </header>

	<div class="animated fadeIn" id="card-container">
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

  function deleteResult(resultID){
  	var key = 0;
  	var rList = JSON.parse(localStorage.getItem('results'));

  	if(confirm("Are you sure you want to delete this result? (This will only delete the results within the local storage)") == true){
  		for(i=0; i < rList.length ; i++){
	  		if(rList[i][0] == resultID){
	  			key = i;
	  		}
	  	}

	  	rList.splice(key, 1);

	  	localStorage.setItem('results', JSON.stringify(rList));

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
	    var surveyList = [];
	    var results = [];

		results = JSON.parse(localStorage.getItem('surveyList'));
		for(var j = 0; j < results.length; j++){
			if(results[j][1].length < 30){
				output+= '<div style="display: grid; position: relative;"><button type="submit" class="card animated fadeIn" name="survey" style="border-radius: 20px; display: block; flex-direction: unset;" value="'+ results[j][0] +'"> '+ results[j][1] +'</button><a href="#" class="fas fa-trash-alt" style="position: absolute; top: 40px; right: 40px; color: grey; font-size: 25px;" onclick="deleteResult(\''+ results[j][0] +'\')"></a></div>';
			}
            else{
				output+= '<div style="display: grid; position: relative;"><button type="submit" class="card animated fadeIn" name="survey" style="border-radius: 20px; font-size: 15px; display: block; flex-direction: unset;" value="'+ results[j][0] +'"> '+ results[j][1] +'</button><a href="#" class="fas fa-trash-alt" style="position: absolute; top: 40px; right: 40px; color: grey; font-size: 25px;" onclick="deleteResult(\''+ results[j][0] +'\')"></a></div>';
			}
		  		
		  	}

		 return output;

		 }
</script>
</body>