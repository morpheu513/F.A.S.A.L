<!DOCTYPE html>
<html>
	<head>
		<title>FARMER DASHBOARD</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- footer icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="fdashboard.css" rel="stylesheet" type="text/css">
          <link rel='shortcut icon' href='..\..\..\favicon.png'>


	</head>
	<body>
		<div class="heading">
			<h1>FARMER</h1>
		</div>
		<div id="navbar">
  			<a class="active" href="..\farmer\fdashboard.php">Home</a>
  			<a href="..\addcrop\addcrop.html">Add Crop</a>
  			<a href="..\crop details\cropdetails.php">Crop Details</a>
  			<a href="..\buyerdetails\buyerdetail.php">Buyer Details</a>
  			<a href="..\Fquery\Fquery.php">Query</a>
  			<a href="../../../index.php">Sign Out</a>
		</div>
		<div id="mySidenav" class="sidenav">
		  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  	<h2>Profile Details</h2>
		    <div  ><img  src='userphoto.png'></div>
		    <ul>
		       <li><b>Name:</b> <?php echo $_COOKIE['user'];?></li>
		       <li><b>Email:</b> <?php echo $_COOKIE['email'];?></li>
		       <li><b>Address:</b> <?php echo $_COOKIE['address'];?></li>
		       <li><b>Phone No:</b><?php echo $_COOKIE['phoneno'];?></li>
		   	</ul>
		</div>
		<div id="main">
		  	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
		</div>
		<div class="content">
		  	<div>
			  	<h1 class="table-head">CURRENT HARVEST DETAILS</h1>
			  		<table style="border: 10px groove;text-align: center; padding: 20px; -webkit-backdrop-filter: blur(10px); backdrop-filter: blur(10px); width: 50%; font-size: 17px; margin:auto; margin-bottom: 15%; color: midnightblue;">
							<tr style="border-bottom: 2px groove; text-align: center;">
								<th style:"padding-left:10px;" >Crop Type</th>
								<th style:"padding-left:10px;">Crop Name</th>
								<th style:"padding-left:10px;">Quantity</th>
								<th style:"padding-left:10px;">Planted on</th>
							</tr>
							<?php require 'f_dashboard.php'; ?>
					</table>
		  	</div>
		</div>
		<br><br><br><br><br><br><br><br><br>;
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
                        <td width="400" height="40"><u><a href="www.facebook.com" class="fa fa-facebook"></a><a href="www.twitter.com" class="fa fa-twitter"></a></u></td>
                      </tr>
                      <tr>
                        <td width="400" height="10">+91 9893634698</td>
                        <td width="400" height="10">Developers & Designers</td>
                        <td width="400" height="40"><u><a href="google.com" class="fa fa-google"></a><a href="www.linkedin.com" class="fa fa-linkedin"></a></u></td>
                      </tr>
                </table>
        	</div>
		<script src="fdashboard.js"></script>
	</body>
</html>
