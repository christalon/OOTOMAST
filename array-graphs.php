<!DOCTYPE html>
<html>
<head>
	<title>Graph from Arrays</title>
</head>
<body>
	<canvas id="chart" width="800" height="450"></canvas>
	<div name="navButtons" id="navBtnCon">
    	<form id="btnForm">
            <button class="btn btn-primary btn-lg" type="button" id="prevBtn" value="back" onclick="prev()">Back</button>
            <button class="btn btn-primary btn-lg"  type="button" id="nextBtn" value="next" onclick="next()">Next</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

	<script type="text/javascript">
		var results = [["a1a", [25, 75, 90, 100]],
                       ["a2a", [25, 25, 25, 25]],
                       ["a3a", [50, 30, 20, 5, 5]]
                       ];
        initialize();

        function initialize()	{
        	if(results[0][1].length > 3)
        		createBar();
        	else 
        		createPie();
        }

        function next() {
        	
        }

        function prev()	{

        }

        function createBar()	{
        	new Chart(document.getElementById("chart"),{
        		type: 'bar',
        		data: {
        			labels: ["Q1","Q2","Q3", "Q4"],
        			datasets: [{
        				backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
        				data: results[0][1]
        			}]
        		},
        		options:{
        			legend: { display: true},
        			title: {
        				display: true,
        				text: "Hatdog 2"
        			}
        		} 

        	});


        }

        function createPie()	{
        	new Chart(document.getElementById("chart"),	{
        		type: 'pie',
        		data: {
        			labels: ["Yes", "No"],
        			datasets: [{
        				        				backgroundColor: ["#3e95cd", "#8e5ea2"],
        				data: results[0][1]
        			}]
        		},
        		options: {
        			title: {
        				display: true,
        				text: 'Hatdog'
        			} 
        		}
        	});
        }

	</script>
</body>
</html>