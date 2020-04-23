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
		margin-top: 80px;
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
	<link rel="stylesheet" href="css/light-modal.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/compiled-4.10.1.min.css">
	<title>OOTOMAST</title>
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

	<nav class="navbar" id="navbarvis" style="position: fixed; top: 0; width: 100%; z-index: 9999;">
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

		<div class="animated fadeIn" id="card-container">
			<form id="form-id" method="post" action="survey.php">
				<div class="cards animated fadeIn" id="gridItemHolder">

				</div>
			</form>
		</div>

		<img src="assets/clickhere.svg" class="animated bounceIn" id="clickHere" style="width: 60%;max-width: 300px;
		position: fixed;
		bottom: 25;
		right: 100;">

		<button type="button" class="btn float" data-toggle="modal" id="modalBtn" style="border-radius: 50px; padding: 0; background-color: #229c43;" data-target= "#exampleModalCenter">
			<i class="fas fa-plus" style="display: inline; color: white"></i>
		</button>

		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content" style="border-radius: 20px;">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Add Survey</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<ul class="nav nav-tabs">
						<li class="nav-item"><a class="nav-link active show" href="#file" data-toggle="tab">File</a></li>
						<li class="nav-item"><a class="nav-link" href="#url" data-toggle="tab">URL</a></li>
						<li class="nav-item"><a class="nav-link" href="#code" data-toggle="tab">Code</a></li>
						<li class="nav-item"><a class="nav-link" href="#builder" data-toggle="tab">Survey Builder</a></li>
					</ul>

					<div class="tab-content" style="width: auto;">
						<div class="tab-pane active show" id="file" style="margin-top: 50px;">
							<form class="needs-validation" novalidate onsubmit="return parseUpload()">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">Upload</span>
									</div>
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="fileCSV" accept=".csv" required>
										<div class="invalid-feedback">
											Please choose a csv file.
										</div>
										<label id="fileInputLabel" class="custom-file-label" for="fileCSV" style="overflow: hidden;">Choose file</label>
									</div>
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Name</span>
									</div>
									<input type="text" id="surveyNameFile" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
									<div class="invalid-feedback">
										Please choose survey name.
									</div>
								</div>
									<button type="submit" class="btn btn-success btn-lg btn-block" style="margin-bottom: 50px">Submit</button>
							</form>	
						</div>
							
						
						<div class="tab-pane" id="url" style="margin-top: 50px;">
							<form class="needs-validation" novalidate onsubmit="return parseURL()">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">URL</span>
									</div>
									<input type="text" id="urlFile" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
									<div class="invalid-feedback">
										Please enter URL.
									</div>
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Name</span>
									</div>
									<input type="text" id="surveyNameURL" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
									<div class="invalid-feedback">
										Please add a survey name.
									</div>
								</div>
									<button type="submit" class="btn btn-success btn-lg btn-block" style="margin-bottom: 50px">Submit</button>
							</form>
						</div> 
							
						<div class="tab-pane" id="code" style="margin-top: 50px;">
							<form class="needs-validation" novalidate onsubmit="return getSurveyDB()">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Code</span>
									</div>
									<input type="text" id="surveyCode" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
									<div class="invalid-feedback">
										Please enter a code.
									</div>
								</div>
								<button type="submit" class="btn btn-success btn-lg btn-block" style="margin-bottom: 50px">Submit</button>
							</form>
						</div>
						

						<div class="tab-pane" id="builder">
							<a class="btn btn-success btn-lg btn-block" href="surveybuilder.php">Go to Survey Builder</a>
						</div>
					</div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
			</div>

		<script src="js/papaparse.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.0.slim.min.js" integrity="sha256-MlusDLJIP1GRgLrOflUQtshyP0TwT/RHXsI1wWGnQhs=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="js/mdb.min.js"></script>
		<script src="js/parse-csv.js"></script>
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

	$('input[type="file"]').change(function(e){
		var fileName = "Choose File"
		if(e.target.files[0] != null){
			fileName = e.target.files[0].name;
		}

        $('.custom-file-label').html(fileName);
    });

</script>
</body>