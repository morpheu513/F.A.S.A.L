<?php

$con = mysqli_connect("localhost","id11572373_login","login","id11572373_login");


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con,"SELECT * FROM farmersignup");
 $v=0;
while($row=mysqli_fetch_array($result))
{
    if($row[0]==$_POST['user']&&$row[1]==$_POST['pass'])
    
    {
        $v=1;
        setcookie("user", "", time() - 3600,"/",$_SERVER['SERVER_NAME']); 
        setcookie('user', $row[0], time() + (86400 * 30), "/",$_SERVER['SERVER_NAME']);
         setcookie("pass", "", time() - 3600,"/",$_SERVER['SERVER_NAME']); 
        setcookie('pass', $row[1], time() + (86400 * 30), "/",$_SERVER['SERVER_NAME']);
        setcookie("email", "", time() - 3600,"/",$_SERVER['SERVER_NAME']); 
        setcookie('email', $row[2], time() + (86400 * 30), "/",$_SERVER['SERVER_NAME']);
        setcookie("address", "", time() - 3600,"/",$_SERVER['SERVER_NAME']); 
        setcookie('address', $row[3], time() + (86400 * 30), "/",$_SERVER['SERVER_NAME']);
        setcookie("phoneno", "", time() - 3600,"/",$_SERVER['SERVER_NAME']); 
        setcookie('phoneno', $row[4], time() + (86400 * 30), "/",$_SERVER['SERVER_NAME']);
    
    
    



 // 86400 = 1 day
        header("Location:../farmer/fdashboard.php");
    }
    else
    {
    
    }
}
if($v==0)
{
    header('Location:../login/index.php');
}





?>
