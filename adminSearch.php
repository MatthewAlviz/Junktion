<html>
<head>
<link rel="stylesheet" type="text/css" href="adminSearchCSS.css">
<?php
  $user = $_POST['user'];
  $admin = $_POST['admin'];
  $points = $_POST['points'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "junktion";
  $mydate=getdate(date("U"));
 ?>
</head>
<body>
<form class="search" action="adminPoints.html">
  <input type="input" placeholder="ID Number" name="IDnum" required>
  <button type="submit"><b>Search</b></button>
</form>
<?php
  $conn = mysqli_connect($servername,$username,$password,$database);
  if(!$conn){
    die("Connection failed:".mysqli_connect_error());
  }echo "Connected Successfully"."<br><h3>";
    $sql = "INSERT into transaction(user_id,admin_id,pointsChanged,DOT)
      values(". $user .",'". $admin ."','". $points ."','". $mydate ."');";
      if(mysqli_query($conn,$sql)){
        echo "Records inserted successfully.";
        }else{
          echo "ERROR: Unable to execute $sql." . mysqli_error($conn);
        }    

  $query ="SELECT * from transaction";
  $response = @mysqli_query($conn,$query); ?>
  <table border="1">
  <?php
  if($response){
    while ($row = @mysqli_fetch_array($response)) { ?>
      <tr><td><?php echo $row['transacNum'] ?></td>
      <td><?php echo $row['user_id'] ?></td>
      <td><?php echo $row['admin_id'] ?></td>
      <td><?php echo $row['pointsChanged'] ?></td>
      <td><?php echo $row['DOT'] ?></td></tr>
  <?php
    }
  }
  mysqli_close($conn);
 ?>
</table>
</body>
</html>
