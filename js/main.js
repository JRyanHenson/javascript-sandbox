var btn = document.getElementById("btn");

if(btn) {
	btn.addEventListener("click", function() {
		var myRequest = new XMLHttpRequest();
		myRequest.open('GET', 'https://bootcamp-coders.cnm.edu/~jhenson9/javascript-sandbox/json/Council_Districts.geojson');
		myRequest.onload = function() {
			var myData = JSON.parse(myRequest.responseText);
			renderHTML(myData.features);
			//console.log(myData);
		};
		myRequest.send();
		}, false);
}
function renderHTML(data) {
	var htmlString = "";
	var jsonContainer = document.getElementById("json");

	for (i = 0; i < data.length; i++) {
		htmlString += "<p>District " + data[i].properties.DISTRICTNUMBER + " City Councilor " + data[i].properties.COUNCILORNAME + "<br>" + "Polygon Coordinates for District:" + "<br>" + data[i].geometry.coordinates[0] + "</p>";
	}
	jsonContainer.innerHTML += htmlString;
}

$(document).ready(function()
{
	$("#baconButton").click(function()
	{
		$.getJSON('https://baconipsum.com/api/?callback=?',
			{ 'type':'meat-and-filler', 'start-with-lorem':'1', 'paras':'3' },
			function(baconGoodness)
			{
				if (baconGoodness && baconGoodness.length > 0)
				{
					$("#baconRoom").html('');
					for (var i = 0; i < baconGoodness.length; i++)
						$("#baconRoom").append('<p>' + baconGoodness[i] + '</p>');
					$("#baconRoom").show();
				}
			});
	});
});