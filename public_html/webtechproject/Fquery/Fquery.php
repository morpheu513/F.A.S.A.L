<?php 
    
    
    $con = mysqli_connect("localhost","id11572373_login","login","id11572373_login");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_query($con,"SELECT * FROM fquery");
 if (isset($_POST['comp']))
 {
 $u=$_COOKIE['user'];
 $id=$_POST['comp'];
  $email=$_POST['email'];
 $reason=$_POST['reason'];
 $other=$_POST['other'];
 mysqli_query($con,"INSERT INTO fquery (Name,id,email,reason,other)
VALUES ('$u','$id','$email','$reason','$other')");
    $m='siddartmaddi1@gmail.com';
    $subject='FARMER QUERIES';
    $content=$u.' has issue with '.$reason.' and his other queries are '. $other.' so please contact him at '.$email;
    $head='maddisiddart@gmail.com';
    mail($m,$subject,$content,$head);
 }
 
 





?> 





<!DOCTYPE html>
<html>
<head>
	<title>FARMER QUERY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="fquery.css" rel="stylesheet" type="text/css">
              <link rel='shortcut icon' href='..\..\..\favicon.png'>

</head>
<body>
	<div class="heading">
		<h1>FARMER</h1>
	</div>
	<div id="navbar">
  		<a href="..\farmer\fdashboard.php">Home</a>
  		<a href="..\addcrop\addcrop.html">Add Crop</a>
  		<a href="..\crop details\cropdetails.php">Crop Details</a>
  		<a href="..\buyerdetails\buyerdetail.php">Buyer Details</a>
  		<a class="active" href="..\farmer\Fquery.php">Query</a>
  		<a href="../../../index.php">Sign Out</a>
	</div>
	<div class="content">
		<form onsubmit="return results();" action='Fquery.php' method='post'>
		  <input id="input-1" type="text" name ='comp' placeholder="COMP123" required autofocus />
			  <label for="input-1">
			    <span class="label-text">Complain ID</span>
			    <span class="nav-dot"></span>
			    <div class="signup-button-trigger">Start</div>
			  </label>
		  <input id="input-2" type="email" name ='email'  value='<?php echo $_COOKIE['email'];?>' required />
			  <label for="input-2">
			    <span class="label-text">Email</span>
			    <span class="nav-dot"></span>
			  </label>
		  <select id="input-3" name='reason' placeholder="inability to grow crops" required>
		  	<option>Low moisture retention</option>
		  	<option>Low fertility</option>
			<option>Increase in insects</option>
			<option>Lack of utilities</option>
		  </select>
			  <label for="input-3">
			    <span class="label-text">Complain</span>
			    <span class="nav-dot"></span>
			  </label>
		  <input id="input-4" type="text" name='other' placeholder="other"/>
			  <label for="input-4">
			    <span class="label-text">Others</span>
			    <span class="nav-dot"></span>
			  </label>
		  <button type="submit" value="submit">Submit</button>
		  <div class="signup-button">Start</div>
		</form>
	</div>
	<br><br><br>
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
					<td width="350" height="40"><u><a href="#" class="fa fa-facebook"></a><a href="#" class="fa fa-twitter"></a></u></td>
				</tr>
				<tr>
					<td width="400" height="10">+91 9893634698</td>
					<td width="400" height="10">Developers & Designers</td>
					<td width="350" height="40"><u><a href="#" class="fa fa-google"></a><a href="#" class="fa fa-linkedin"></a></u></td>
				</tr>
			</table>
		</div>
	<script type="text/javascript" src="fquery.js"></script>
</body>
</html>
