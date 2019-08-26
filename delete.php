<?php 
$mID=$_POST['mID'];
?>
<html>
<body>
<?php

$con = mysqli_connect("localhost","root","","movierate");

if (!$con)
  {

  die('Could not connect:'. mysqli_error());
  }

echo $mID;

echo"<br>";

$query1 = mysqli_query($con, "DELETE FROM `mcate` WHERE `movieID` = $mID");
$query2 = mysqli_query($con, "DELETE FROM `mactor` WHERE `movieID` = $mID");
$query3 = mysqli_query($con, "DELETE FROM `movies` WHERE `movieID` = $mID");

echo 'Delete Successful';

echo"<br>";

echo '<br><a href="Admin.html"> back</a>';

mysqli_close($con);
?>
</body>
</html>

