<?php
$link = mysqli_connect("localhost","root","marcy123","demo");
if ($link === false) {
die("ERROR: Could not connect." . mysqli_connect_error());
 }
 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $pswd = $_REQUEST['pswd'];
 $sql = "INSERT INTO marcy12 (name,email,pswd) VALUES('$name','$email', '$pswd')";
if(mysqli_query($link, $sql)){
}else{
    echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
}
mysqli_close($link); 
?>
