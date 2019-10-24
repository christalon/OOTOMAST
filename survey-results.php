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
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
		<!--<link rel="stylesheet" href="/mdb.min.css">
		<!-- import the webpage's client-side javascript file -->
		<script src="/client.js" defer></script>
        <meta charset="utf-8">
        
		<style>
            table {
                border-collapse: collapse;
                border: 2px black solid;
                font: 12px sans-serif;
				margin-left:auto; 
				margin-right:auto;
            }

            td {
                border: 1px black solid;
                padding: 5px;
            }
        </style>
		
    </head>
    <body>
		<header>
		<div style="margin: 15px 10px ; display: flex;">
			<h1 style="font-size: 25px"> Results </h1>
		</div>
		</header>
		
		<div>
        <script src="http://d3js.org/d3.v3.min.js"></script> 

        <script type="text/javascript"charset="utf-8">
            d3.text("http://localhost/OOTOMAST/data.csv", function(data) {
                var parsedCSV = d3.csv.parseRows(data);

                var container = d3.select("body")
                    .append("table")

                    .selectAll("tr")
                        .data(parsedCSV).enter()
                        .append("tr")

                    .selectAll("td")
                        .data(function(d) { return d; }).enter()
                        .append("td")
                        .text(function(d) { return d; });
            });
        </script>
		</div>
		
    </body>
</html>