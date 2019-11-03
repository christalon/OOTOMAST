/*
 * Parse the data and create a graph with the data.
 */
function parseData(createGraph) {
	Papa.parse("http://localhost/OOTOMAST/csv/3-sample_results.csv", {
    	download: true,
    	step: function(row) {
        	console.log("Row:", row.data);
    	},
    	complete: function() {
        	console.log("All done!");
    	}
	});
}

function createGraph(data)	{
	
}

parseData(createGraph);