<?php
//insert data.php

$servername = "localhost";
$username = "root";//root is default user
$password = "";//default pw is blank
$dbname = "junktion";

//create connection
$conn = mysqli_connect
($servername, $username, $password, $dbname);

//check connection
if(!$conn){
  die("Connection Failed".mysqli_connect_error());
}
echo "Connected Successfully!<br><h1>";

$email = $_POST['email'];

$query ="SELECT isAdmin from login where ".$email."=userName";
$response = @mysqli_query($conn,$query);

if($response){header("Location: adminSearch.php");
die();}
else{header("Location: User.php");
die();}
mysqli_close($conn);
 ?>
