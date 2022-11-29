<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<style type="text/css">
	.mn{
      width: 1200px;
       height: 30px;
	}
	.kk{
font-size: 20px;
	}
	.mm{
width: 1200px; height: 30px; background-color: green;
	}
</style>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
include ("header.php");
?>

<?php
$con = mysqli_connect("localhost","root","marcy123","demo");
if ($con === false) {
die("ERROR: Could not connect." . mysqli_connect_error());
 }
	
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `marcy13` (username, password, email) VALUES ('$username', '".md5($password)."', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='log.php'>Login</a></div>";
        }
    }else
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<div class="kk">
username:
<input type="text" name="username" placeholder="Username" required class="mn">
</div>
<br>
<div class="kk">
email:
<input type="email" name="email" placeholder="Email" required class="mn">
</div>
<br>
<div class="kk">
password:
<input type="password" name="password" placeholder="Password" required class="mn">
</div>
<br>

<input type="submit" name="submit" value="Register" class="mm">

</form>
<br /><br />

</div>
<?php
include ("footer.php");
?>
</body>
</html>
