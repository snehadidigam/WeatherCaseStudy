<!DOCTYPE html>
<html>
<head>
	<title>Weather Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/wstyle.css">
</head>
<body>
<div id="page-content">
	<nav>
			<p id="pic"></p>
			<p id="desc"></p> 
			<p id="cands"></p>
			<p id="temp"></p>
			<p id="lhtemp"></p>
			<p id="humidity"></p>
			<p id="windSpeed"></p>
			<p id="note"></p>
	</nav>
</div>

<span><a href="signup.php">LOGOUT</a></span>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$.getJSON("https://j9l4zglte4.execute-api.us-east-1.amazonaws.com/api/ctl/weather", function(result){
      console.log(result);
	      $("#desc").append(result.today.temperatureDesc);
	      $("#cands").append(result.today.city, ", ", result.today.state);
	      $("#temp").append("Current Temparature: ", result.today.temperature, ' &#8457;');
	      $("#lhtemp").append("Low Temparature: ", result.today.lowTemperature, " &#8457; and High Temparature: ", result.today.highTemperature, ' &#8457;');
	      $("#humidity").append("Humidity: ", result.today.humidity, " %");
	      $("#windSpeed").append("Wind: ", result.today.windDescShort, " ", result.today.windSpeed, " mph");
	      $("#note").append("The temperature in ",result.today.city, " is ", result.today.temperatureDesc," and the sky is ", result.today.skyDescription);

		  var i = document.createElement("IMG");
	      i.src = result.today.iconLink;
	      i.width = "100";
	      $("#pic").append(i);
    });
});
</script>
</body>
</html>