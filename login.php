<?
session_start();

?>
<?php


$name=$_POST["email"];
$password=$_POST["psw"];






$servername = "localhost";
$username = "root";

$dbname = "sdb";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users where email='$name' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
$_SESSION["name"]= $row["name"];


header("location:dashboard.php");

        //echo "log in successful";

    }
} else {
    echo "0 results";
}
$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
<section class="sec-index">
	
		<img src="logo.PNG" alt="xCompany" class="logo-img">

		<div class="right-float">

			<p><a href="welcome.php"><u>Home</u></a> | <a href="login.php"><u>Login</u></a> | <a href="registration.php"><u>Registration</u></a>

		</div>

	</section>
<hr>
<h1>Login</h1>
<form action="" method="POST">
  <div class="container">

    <label for="email"><b>Email : </b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password : </b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
    <input type="checkbox" placeholder="Remember Me" name="Remember Me" required>Remember Me<br>
    <button type="submit" class="registerbtn">Submit</button>
  </div>

  <div class="container signin">
    <a href="forgot.php">Forget Password?</a>
  </div>

  <p class="copyright">Copyright &copy; 2017<p>
</form>
</body>
</html>
