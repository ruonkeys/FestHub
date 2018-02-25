<?php

		if($_GET["cata"])
		{
			session_start();
			$v=$_GET["cata"];
			$uid=$_SESSION["user"];
			$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `fest` where `fest_id`='$v'");
			
	while($val=mysqli_fetch_array($res))
	{
		//$con=mysqli_connect("localhost","root","","ecommerce");
		
			$bo=$val[5];
			$bo=$bo-1;
			
			$query="update `fest` set `boost`='$bo' where `fest_id`='$v'";
		echo $query;
		mysqli_query($con,$query);
			
			mysqli_query($con,"DELETE FROM `boost` WHERE `user_id` = '$uid' and `fest_id` = '$v'");

			
		header("location:fest.php?cata=$v");

		}
		
	}	

	
else
{
	echo"<script language='javascript'> alert('You will have to login first.')</script>";
	
	header("location:signUpLogin.php");
}


?>