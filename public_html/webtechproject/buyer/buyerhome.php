
<!DOCTYPE html>
<html>
    <head>
        <title>BUYER DASHBOARD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--required CDN's-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!-- footer icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel='shortcut icon' href='..\..\..\favicon.png'>


        <link href="buyerhome.css" rel="stylesheet" type="text/css">
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
    <body > 
          <script src="buyerhome1.js"></script>
        <script src="buyerhome2.js"></script>
        
        <div class="heading">
            <h1>BUYER</h1>
        </div>      
        <div id="navbar">
                <a class="active" href="..\buyer\buyerhome.php">Home</a>
                <a href="..\requestcrop\requestcrop.html">Request Crop</a>
                <a href="..\Bquery\bquery.php">Query</a>
                <a href="../../../index.php">Sign Out</a>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <h2>Profile Details</h2>
            <div  > <img src='userphoto.png'></div>
                <ul>
                   <li><b>Name:</b> <?php echo $_COOKIE['user'];?></li>
                    <li><b>Email:</b> <?php echo $_COOKIE['email'];?></li>
                    <li><b>Address:</b> <?php echo $_COOKIE['address'];?></li>
                    <li><b>Phone No:</b><?php echo $_COOKIE['phoneno'];?></li>
                </ul>
        </div>
        <div id="main">
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;    
            </span>
            
        </div>
        <h1 class ="table-head "> Recieved Crop Details</h1>
        <div class="cont">
            <table class="table " id="reqtable">
                
                    <tr class="tr">
                         <th>Unique ID</th>
                        <th>Farmer Name</th>
                        <th>Crop Name</th>
                        <th>Quantity</th>
                        <th>Your Price</th>
                        <th>Farmer Price</th>
                        <th>Status</th> 
                        <th>option</th>
                    </tr>
                   <?php
           $con = mysqli_connect("localhost","id11572373_login","login","id11572373_login");
    
       $sql = "SELECT * FROM crops";
       $records = mysqli_query($con,$sql);

       while ($row = mysqli_fetch_array($records)) {
           if($row[0]==$_COOKIE['user'] && $row[6]){
        $rid = $row['uid'];

         echo "<tr style='border-bottom: 2px solid;'>";
         echo "<td>".$row['uid']."</td>";
         echo "<td>".$row['FarmerName']."</td>";
         echo "<td>".$row['CropName']."</td>";
         echo "<td>".$row['Quantity']."</td>";
         echo "<td>".$row['Price']."</td>";
         echo "<td>".$row['FarmerPrice']."</td>";
         echo "<td>".$row['Status']."</td>";

 echo "<form method = 'POST' action = 'final.php'>";
        
        //  echo "<td>&nbsp;<input id='accept' type='radio' name='status' value='accept' >&nbsp;
        //       &nbsp;<input id='decline' type='radio' name='status' value='decline' ></td>";

         echo  "<td><input id='button' name='btn' type='submit' value='accept' onclick='count($rid)'></td>&nbsp;&nbsp; ";
         echo "</form>";
              }
          }
        ?>
            </table>
        </div>
        <br><br>
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
    document.cookie = "newrid= ; expires = Thu, 01 Jan 1970 00:00:00 GMT"

    createCookie("newrid", p, "1");
    
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
        escape(value) + expires + "; path=buyerhome.php"; 
} 
var x= document.getElementById("button");
x.value='accepted';
}
    </script>
    </body>
</html>
