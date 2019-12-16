<?php
     include("buyerdetail.php");
	 $con = mysqli_connect("localhost","id11572373_login","login","id11572373_login");
	$pr= $_POST['Fprice'];
	$num= $_COOKIE['rid'];
	  $result = mysqli_query($con,"SELECT * FROM crops");

	while($row = mysqli_fetch_array($result)){
        if($row[8]==$num ){
            $sql = "UPDATE crops SET FarmerPrice=$pr WHERE uid=$num";

        }
    

   
  }
  if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);
}




	 
	 


?>