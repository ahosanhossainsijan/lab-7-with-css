<?php
$name= $_POST["Name"];
$email= $_POST["email"];
$password= $_POST["psw"];
$uname= $_POST["Username"];
$gender= $_POST["gender"];


?>

<?php
$servername = "localhost";
$username = "root";

$dbname = "sdb";

// Create connection
$conn = mysqli_connect($servername, $username, "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (email, name,uname,password,gender)
VALUES ('$email','$name', '$uname', '$password' , '$gender' )";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
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
<h1>Register</h1>
<form action="" method="post">
  <div class="container">

    <label for="email"><b>Email : </b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>
    <label for="Name"><b>Name : </b></label>
    <input type="text" placeholder="Enter Name" name="Name" required><br>
    <label for="Username"><b>Username : </b></label>
    <input type="text" placeholder="Enter Username" name="Username" required><br>

    <label for="psw"><b>Password : </b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    
   <input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>

    <button type="submit" class="registerbtn">Submit</button>
    <button type="submit" class="registerbtn">Reset</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>

  <p class="copyright">Copyright &copy; 2017<p>
</form>
</body>
</html>


