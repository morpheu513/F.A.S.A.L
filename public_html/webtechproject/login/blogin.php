<?php  
    $con = mysqli_connect("localhost","id11572373_login","login","id11572373_login");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result= mysqli_query($con,"SELECT * FROM buyersignup");
  if (isset($_POST['username']))
  {
  $u=$_POST['username'];
 $pass=$_POST['password'];
 $e=$_POST['email'];
 $add=$_POST['address'];
 $p=$_POST['phone'];
 $c=0;
    while($row = mysqli_fetch_array($result)){
        if($row[0]==$_POST['username']){
            $c = 1;
        }
    
    }
    if($c)
    {
       echo"<script> alert('Username already Existed');</script>";
    }
    else{
        mysqli_query($con,"INSERT INTO buyersignup (b_username,b_password,b_email,b_address,b_phoneno)
VALUES ('$u','$pass','$e','$add','$p')");
    }

  }
  else{
     

      
  }
 
 
mysqli_close($con);



?>



<!DOCTYPE html>
<html>
    <head>
          <link rel='shortcut icon' href='..\..\..\favicon.png'>

       <style>
        body{
	padding-left: 50px;
	padding-top: 50px;
	padding-bottom: 50px;
	padding-right: 50px;
	color:black;
	font:600 16px/18px 'Open Sans',sans-serif;
}
body{
   background-image: url("login.png");
     background-repeat: no-repeat;
    background-size: cover;

}
h1{
	text-align: center;
	text-shadow: 3px 3px black;
	letter-spacing: 2px;
	word-spacing: 2px;
	font-size: 50px;
	padding: 1px;
	color: white;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{
	color:inherit;
	text-decoration:none}
.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	columns: #000000;;
	border-color:#000000;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color: white;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#ffffff;
	font-size:12px;
}
.login-form .group .button{
	background-color: DeepskyBlue;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background: #ffffff;;
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}
.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.tab{
    color:white;
}
.foot-lnk{
	text-align:center;
}
a:link {
  text-decoration: none;
}
a:visited {
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
  cursor: pointer;
}
a:active {
  text-decoration: underline;
}
       </style> 
    </head>
    <body>
    		<h1>BUYER</h1>
            <div class="login-wrap">
                    <div class="login-html">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-form">
                            
                            <form action="..\login\buyer2.php" method='post'>
                            <div class="sign-in-htm">
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="user" name='user' type="text" class="input" required>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" name='pass' type="password" class="input" data-type="password" required>
                                </div>
                                <div class="group">
                                    <input id="check" name='check' type="checkbox" class="check" checked>
                                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                </div>
                                <div class="group">
                                	
                                		<input type="submit" name='check' class="button" value="Sign In"/>
                                
                                </div>
                                
                            </div>
                            </form>
                            
                            
                            <form action="blogin.php" method='post'>
                            <div class="sign-up-htm">
                                
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="user" name='username' type="text" class="input" required>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass"  name ='password' type="password" class="input" data-type="password" required>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Email Address</label>
                                    <input id="pass" name='email' type="email" class="input" required>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Address</label>
                                    <input id="pass"  name='address' type="text" class="input" required>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Phone Number</label>
                                    <input id="pass" name='phone' type="text" class="input" required>
                                </div>
                                <div class="group">
                                		<input  name ='submit'type="submit" class="button" value="Sign Up"/>
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <a><label for="tab-1">Already Member?</label></a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
    </body>
</html>