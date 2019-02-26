<?php
$con=mysqli_connect("localhost","root","","localdb");
// $query = mysqli_query($con, "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('snehal', 'Didimmmmm', 'sd@exam.com')");
mysqli_close($con);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Weather Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/teststyle.css">
</head>
<body>
	<center>
		<div id="page-content">
			  <h2>WEATHER REPORT</h2>
			<form name="zip-form" action="signup.php" method="GET" onsubmit="return allnumeric()">
			<input type="text" pattern="\d{5}" id="zipcode" name="zipcode" placeholder="Enter your zipcode" required>
			<button>GET</button>
			</form>
		</div>
	</center>

</body>
</html>