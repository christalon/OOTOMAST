/*
 * Parse the data and create a graph with the data.
 */
function parseData(createGraph) {
	Papa.parse("http://localhost/OOTOMAST/csv/spanish-silver.csv", {
		complete: function(results)	{
			console.log(results);
		}
	});
}

function createGraph(data)	{
	
}

parseData(createGraph);

//http://localhost/OOTOMAST/csv/3-survey_results