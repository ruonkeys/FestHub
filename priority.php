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
		
			$fp=$val[6];
			$fp=$fp+1;
			
			$query="update `fest` set `fest_priority`='$fp' where `fest_id`='$v'";
		mysqli_query($con,$query);
			
			
		$cid=$val[4];
		$res1=mysqli_query($con,"select * from `college` where `col_id`='$cid'");
			
	while($val1=mysqli_fetch_array($res1))
	{
			$cp=$val1[2];
			$cp=$cp+1;
			
			$query="update `college` set `col_priority`='$cp' where `col_id`='$cid'";
		mysqli_query($con,$query);
	}
			
		//header("location:$val[11]");
		echo" <script>
      window.location.href = '$val[11]';
    </script>";
		}
		
	}	

	
else
{
	echo"<script language='javascript'> alert('You will have to login first.')</script>";
	
	header("location:signUpLogin.php");
}


?>