<html>
<head><link rel="stylesheet" type="text/css" href="adminPointsCSS.css"></head>
<?php
  $user_id = $_POST['IDnum'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "junktion";
 ?>
<body>
  <?php
    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
      die("Connection failed:".mysqli_connect_error());
    }echo "Connected Successfully"."<br><h3>";
    $query ="SELECT userID from user";
    $response = @mysqli_query($conn,$query); ?>
<form action="adminSearch.html">
	<div style="margin-left:25%;margin-top:20%; ">
  <h2><?php echo = $respose ;  ?></h2><br/>
  <input type="number" min="1" name="points" value="Points Added">
  <input type="submit" class="button" value="Add points">
  </div>
</form>
</body>
</html>
