<?php

if (isset($_POST['username'])) {
    saveDetails();
}

function saveDetails() {
    $con=mysqli_connect("localhost","root","","localdb");
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $query = mysqli_query($con, "INSERT INTO wusers (username, email, password) VALUES('".$username."','". $email."','". $password."')");
    mysqli_close($con);
}
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
      <h2>LOGIN TO CHECK WEATHER</h2>
<input type='checkbox' id='form-switch'>
<form id='login-form' action="weatherReport.php" method='POST' onsubmit="return validateForm()">
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type='submit' id='sbutton'>Login</button>
  <label for='form-switch'><span>Register</span></label>
</form>
<form id='register-form' action="" method='POST' onsubmit="">
  <input type="text" name="username" placeholder="Username" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <input type="password" placeholder="Re Password" required>
  <button type='submit'>Register</button>
  <label for='form-switch'>Login</label>
</form>
</div>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
