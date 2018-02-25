<?php

		if($_GET["cata"])
		{
			session_start();
			$v=$_GET["cata"];
			$uid=$_SESSION["user"];
			$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `college` where `col_id`='$v'");
			
	while($val=mysqli_fetch_array($res))
	{
		//$con=mysqli_connect("localhost","root","","ecommerce");
		
			$fo=$val[3];
			$fo=$fo+1;
			
			$query="update `college` set `follow`='$fo' where `col_id`='$v'";
		echo $query;
		mysqli_query($con,$query);
			
			mysqli_query($con,"insert into `follow`(`user_id`,`col_id`) values('$uid','$v')");

			
		header("location:clgprof.php?cat=$v");

		}
		
	}	

	
else
{
	echo"<script language='javascript'> alert('You will have to login first.')</script>";
	
	header("location:signUpLogin.php");
}


?>