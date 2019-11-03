<!DOCTYPE html>
<html lang="en">
    <head>
        <title>OOTOMAST</title>

        <!-- Load c3.css -->
        <link rel="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.11/c3.css" rel="stylesheet" type="text/css">

        <!-- Load d3.js and c3.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.12.0/d3.min.js" charset="utf-8"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.11/c3.min.js"></script>

		<!-- Load papaparse.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.1.0/papaparse.js"></script>

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

        <script src="http://localhost/OOTOMAST/js/create-graph.js"></script>
        
        </div>

    </body>