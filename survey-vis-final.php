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

        <!-- import the webpage's client-side javascript file -->
        <script src="/client.js" defer></script>

        <!-- Load c3.css -->
        <link rel="css/c3.css" rel="stylesheet" type="text/css">

        <!-- Load d3.js and c3.js -->
        <script src="js/d3.min.js"></script>
        <script src="js/c3.min.js"></script>

		<!-- Load papaparse.js -->
		<script src="js/papaparse.js"></script>
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
        <div id="Title" style="margin: 15px 10px ; display: flex;">
            <h1 style="font-size: 25px"> Results </h1>
        </div>
        </header>

        <div id="Question" style="margin: 15px 10px">
        	
        </div>

        <div id="Visualization" style="margin: 15px 10px">
            Enter csv URL: <input type="text" id="url"><br>
            <input type="button" value="Submit" onclick="parse()">

            <script type="text/javascript">

                function parse()    {
                    var url = document.getElementById('url').value;
                    console.log(url)

                    Papa.parse(url, {
                        download: true,
                        complete: function(results) {
                            console.log(results);
                            //localStorage.results = JSON.stringify(results);
                            createGraph(results.data);
                        }
                    });

                }

                function createGraph(data)  {
                    var id = [];
                    var results = [];

                    //Store survey question id to a separate array
                    for(var i = 0; i < data.length; i++)    {
                        //console.log(data[i]);
                        id.push(data[i][0]);                     
                    }

                    // Initialize 2D Array survey results.
                    for(var i = 0; i < data.length; i++)    {
                        results[i] = new Array(7);
                    }

                    // Store each question results to an array.
                    for(var i = 0; i < data.length; i++)    {
                        
                        var j = 1;
                        var k = 0;

                        do{
                            results[i][k]= data[i][j];
                            j++;
                            k++;
                        }while(j < data.length)
                    }

                    //Checkers
                    console.log(id);
                    console.log(results);
                    
                    /*
                    var chart = c3.generate({

                    }); */
                }
                
            </script>
        
        </div>
    </body>