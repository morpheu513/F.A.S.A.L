<?php
    $con = mysqli_connect("localhost","id11572373_login","login","id11572373_login");
    if(!$con)
    {
        echo "Not Connected to server";
    }
    if(!mysqli_select_db($con , 'id11572373_login'))
    {
        echo "Database not connected";
    }
    $username = $_COOKIE['user'];
    $crop_type = $_POST['crop_type'];
    $crop_name = $_POST['crop_name'];
    $crop_quantity = $_POST['crop_quantity'];
    $crop_planted_date = $_POST['crop_planted_date'];
    $sql_ins = "INSERT INTO add_crop (user,crop_type,name,quantity,date_planted_on) VALUES ('$username','$crop_type','$crop_name','$crop_quantity','$crop_planted_date')";
    if(!mysqli_query($con,$sql_ins))
    {
        echo "Not inserted";
    }
    else
    {
        echo '<script>alert("Inserted")</script>';
    }
    include "addcrop.html"
?>