
<!DOCTYPE html>
<html>
<head>
	<title>BUYER DETAILS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--required CDN's-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="buyerdetail.css">
          <link rel='shortcut icon' href='..\..\..\favicon.png'>

        <style type="text/css">
          input{
            background: rgba(255,255,255,0.4);
            border-radius: 10px;
            border: none;
          }
          #button{
            background-color: midnightblue;
            color: white;
          }
        </style>
        
        
</head>
<body>
	<div class="heading">
		<h1>FARMER</h1>
	</div>
	<div id="navbar">
  		<a href="..\farmer\fdashboard.php">Home</a>
  		<a href="..\addcrop\addcrop.html">Add Crop</a>
  		<a href="..\crop details\cropdetails.php">Crop Details</a>
  		<a class="active" href="..\buyerdetail\buyerdetail.php">Buyer Details</a>
  		<a href="..\Fquery\Fquery.php">Query</a>
  		<a href="../../../index.php">Sign Out</a>
    </div>
    <br><br><br>

      <table style="border: 10px groove; text-align: center; padding: 20px; -webkit-backdrop-filter: blur(10px); 
      backdrop-filter: blur(10px); width: 85%; font-size: 17px; margin:auto; color: midnightblue;">
        <tr style="border-bottom: 2px groove;">
        <th><h3>Unique ID</h3></th>
        <th><h3>Buyer</h3></th>
          <th><h3>Crop Type</h3></th>
          <th><h3>Crop Name</h3></th>
          <th><h3>Quantity</h3></th>
          <th><h3>BuyerPrice</h3></th>
          <th><h3>Status</h3></th>
          <th><h3>FarmerPrice</h3></th>
        </tr>
        <?php
           $con = mysqli_connect("localhost","id11572373_login","login","id11572373_login");
    
       $sql = "SELECT * FROM crops";
       
       $records = mysqli_query($con,$sql);


       while ($row = mysqli_fetch_array($records)) {
           if($row[7]==$_COOKIE['user']){
               $rid = $row['uid'];
               $farprice = $row['FarmerPrice'];
         echo "<tr style='border-bottom: 2px solid;'>";
        echo "<td>".$row['uid']."</td>";
         echo "<td>".$row['person']."</td>";
         echo "<td>".$row['CropType']."</td>";
         echo "<td>".$row['CropName']."</td>";
         echo "<td>".$row['Quantity']."</td>";
         echo "<td>".$row['Price']."</td>";
        echo "<td>".$row['Status']."</td>";



         

        echo "<form method = 'POST' action = 'update.php'>";
        
         echo "<td><input type='number' name='Fprice' >&nbsp;&nbsp;
         <input id='button' type='submit' onclick='count($rid)'></td>";


         echo "</form>";

    
            

              }
             

            
          }
        ?>
      </table>
      <br><br><br><br><br><br><br><br><br><br><br><br>;

    <div class="footer">
        <table align="center">
            <tr>
                <td width="400" height="30"><u><b>Contact Us</b></u></td>
                <td width="400" height="30"><u><b>About Us</b></u></td>
                <td width="400" height="30"><b>Share & Subscribe</b></td>
             </tr>
            <tr>
                <td width="400" height="10">+91 9876543210</td>
                <td width="400" height="10"><u>FAQ's</u></td>
                <td width="400" height="40"><u><a href="#" class="fa fa-facebook"></a><a href="#" class="fa fa-twitter"></a></u></td>
             </tr>
            <tr>
                <td width="400" height="10">+91 9893634698</td>
                <td width="400" height="10">Developers & Designers</td>
                <td width="400" height="40"><u><a href="#" class="fa fa-google"></a><a href="#" class="fa fa-linkedin"></a></u></td>
            </tr>
        </table>
    </div>
    <script>
    function count(p){ 
        
$(document).ready(function () { 
    document.cookie = "rid= ; expires = Thu, 01 Jan 1970 00:00:00 GMT"

    createCookie("rid", p, "1"); 
}); 
   
function createCookie(name, value, days) { 

    var expires; 

      
    if (days) { 
        var date = new Date(); 
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
        expires = "; expires=" + date.toGMTString(); 
    } 
    else { 
        expires = ""; 
    } 
      
    document.cookie = escape(name) + "=" +  
        escape(value) + expires + "; path=buyerdetail.php"; 
} 
}
      
    </script>
</body>

</html>

