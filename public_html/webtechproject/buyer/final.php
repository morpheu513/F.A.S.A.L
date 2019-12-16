<?php 
    include("buyerhome.php");
     $con = mysqli_connect("localhost","id11572373_login","login","id11572373_login");
     $num=$_COOKIE['newrid'];
     $u=$_COOKIE['user'];

       $sql = "SELECT * FROM crops";
       
       $records = mysqli_query($con,$sql);
       
       while($row = mysqli_fetch_array($records)){
        if( $row[8]==$num && $row[0]==$u){
            $sql = "UPDATE crops SET Status ='accepted' WHERE uid=$num";

        }
      
   
  }
  if (mysqli_query($con, $sql)) {
    // echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);
}


       



?>