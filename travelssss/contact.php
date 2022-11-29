<?php

error_reporting(0);
 

$link = mysqli_connect("localhost","root","marcy123","demo");
if ($link === false) {
die("ERROR: Could not connect." . mysqli_connect_error());
 }
 $firstname = $_REQUEST['firstname'];
 $lastname = $_REQUEST['lastname'];
 $country = $_REQUEST['country'];
 $subject = $_REQUEST['subject'];
 $sql = "INSERT INTO marcy7 (firstname,lastname,country,subject) VALUES('$firstname','$lastname','$country','$subject')";
if(mysqli_query($link, $sql)){
  
 }else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link); 




?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>c</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
  
  <?php
include ("header.php");
?>

<h3>Contact Form</h3>

<div class="container">
  <form action="" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="country">Country</label>
    <select id="country" name="country" required>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
<?php
include ("footer.php");
?>

</body>
</html>
