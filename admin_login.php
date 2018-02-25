
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Festhub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  </head>
<body>
	<h3> Login</h3>	
	<hr class="soft"/>
			<form>
				<label for="inputEmail1">Email</label>
				  <input type="text" name="adminid" id="inputEmail1" placeholder="Email">
				<label for="inputPassword1">Password</label>
				  <input type="password" name="adminpass" id="inputPassword1" placeholder="Password">
				  <input type="submit" value="Sign in" name="sub"></input>
			</form>

<?php


if(isset($_REQUEST["sub"]))
{
	$aid=$_REQUEST["adminid"];
	$apass=$_REQUEST["adminpass"];
	
	$con=mysqli_connect("localhost","root","","festhub");
	$res=mysqli_query($con,"select * from `login` where `email`='$aid' and `password`='$apass'");

	if($val=mysqli_fetch_array($res))
	{
		session_start();
		$_SESSION["admin"]=$val[1];
	
		echo"<script language='javascript'> window.location.href='data_entry.php' </script>";
	}
	else
	{
		echo"<script language'javascript'>alert('Incorrect Email Id and Password')</script>";
	}
}
?>
</body>
</html>