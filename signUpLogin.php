<!DOCTYPE html>
<html>
<head>
	<title>signUp</title>
	<link rel="stylesheet" href="signStyle.css"/>
	<script type="text/javascript" src="signJS.js"></script>
</head>
<body>
<div class="mainWrap" id="mainWrap_id">
  <div class="wrap">
    <div class="wrap_0">
     <div class="b1" id="b1_id" onclick="signUp()">SignUp</div>
     <div class="b2" id="b2_id" onclick="logIn()">LogIn</div>      


      <div id="signup">
        <h1 style="margin-top: 90px;">SignUp here</h1>

	    <form method="post" autocomplete="on">
	      <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="text"  name="fname" placeholder="First Name*" required/><br/>
	      <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="text" name="lname"  placeholder="Last Name*" required/><br/>
	      <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="email"  name="email"  placeholder="Email Address*" required/><br/>
	      <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="password" name="pass"  placeholder="Set a password*" autocomplete="off" required/><br/>
	      <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="password"  name="cpass" placeholder="Confirm password*" autocomplete="off" required/><br/>
	      <select class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)"  name="college" required>
	       <option value="">---Select your College---</option>
	       <option value="G.B Pant Govt. Engineering College">G.B Pant Govt. Engineering College</option>
	       <option value="College2">College2</option>
	       <option value="College3">College3</option>
	      </select><br/>
	      <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="text" name="phone"  placeholder="Mobile*" autocomplete="off" required/>
	      <input class="sub" type="submit"   name="reg" value="Register"/>
	    </form>
      </div>

      <div id="login">
        <h1 style="margin-top: 90px;">LogIn here</h1>

        <form method="post">
           <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="email"  name="user" placeholder="Email Id*"/><br/>
	       <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="password"  name="pass" placeholder="Password*"/><br/>
	       <a href="../e-commerce\forgetpass.php" class="forgot">Forgot Password</a>
	       <input class="sub" id="inp1" type="submit"   name="subs" value="Log In"/>
        </form>
      </div>

    </div>
    
  </div>
</div>
<!--backend for sign up and login that's to be included in menu bar start-->

<?php
try
{
	if(isset($_SESSION["user"]))
{
}
else
{
  if(isset($_REQUEST["subs"]))
{
	$uid=$_REQUEST["user"];
	$upass=$_REQUEST["pass"];
	
	$con=mysqli_connect("localhost","root","","festhub");
	$res=mysqli_query($con,"select * from `user_detail` where `email`='$uid' and `password`='$upass'");

	if($val=mysqli_fetch_array($res))
	{
		session_start();
		$_SESSION["user"]=$val[0];
		$_SESSION["email"]=$val[3];
		$_SESSION["pass"]=$val[4];
		
		//echo" hi";
		echo"<script language='javascript'> window.location.href='readpage.php' </script>";
		/*if (window.confirm('You have successfully login. Click OK to continue.'))
		{
			window.location.href='index 3.php';
		};
		
		</script>";*/
	}
	else
	{
		//echo"bye";
		echo"<script language'javascript'>alert('Incorrect Email Id and Password')</script>";
	}
}
else
{
	
}
}}
	catch(Exception $ea){}
?>

<?php
try
{
if(isset($_REQUEST["reg"]))
{
	$fn=$_REQUEST["fname"];
	$ln=$_REQUEST["lname"];
	$em=$_REQUEST["email"];
	$pa=$_REQUEST["pass"];
	$cpa=$_REQUEST["cpass"];
	$co=$_REQUEST["college"];
	$ph=$_REQUEST["phone"];
	
	if($pa!=$cpa)
	{
		echo"<script language'javascript'>alert('Password must be same')</script>";
	}
	else
	{
		$con=mysqli_connect("localhost","root","","festhub");
		$query="insert into `user_detail`(`first_name`,`last_name`,`email`,`password`,`college`,`mobile_no`) values('$fn','$ln','$em','$pa','$co','$ph')";
		mysqli_query($con,$query);
	}
	
}}

	catch(Exception $ea){}
?>
<!--end-->

</body>
</html>