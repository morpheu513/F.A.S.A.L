<?php
	
  $con = mysqli_connect("localhost","id11572373_login","login","id11572373_login");
    $con1 = mysqli_connect("localhost","id11572373_login","login","id11572373_login");


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_query($con,"SELECT * FROM crops");
   $result = mysqli_query($con1,"SELECT * FROM farmersignup");


 $u= $_COOKIE['user'];
$type = $_POST['croptype'];
$name =$_POST['cropname'];
$quantity =$_POST['qty'];
$price =$_POST['price'];


while($row = mysqli_fetch_array($result))
{
    mysqli_query($con,"INSERT INTO crops (person,CropType,CropName,Quantity,Price,FarmerName)
VALUES ('$u','$type','$name','$quantity','$price','$row[0]')");
}





header("refresh:0.5; url=requestcrop.html");

mysqli_close($con);
    
 ?>