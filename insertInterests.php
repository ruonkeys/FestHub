<?php
session_start();
if(isset($_POST['interests']) && isset($_POST['ids']))
{
	$interests = $_POST['interests'];
	$ids = $_POST['ids'];
	$conn = mysqli_connect("localhost","root","","festhub") or die();
	$username = $_SESSION["email"];//here fetch username using session
	$sql  = "select * from user_detail where email='$username' limit 1";
	$query = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($query);
	if($num>0)
	{
		$sql1 = "update user_detail set interests='$interests',ids='$ids' where email='$username'";
		$status = mysqli_query($conn, $sql1);
		if($status == true)
		{
			echo "success";
		}
		else
		{
			echo "problem while interacting with database";
		}
	}
}
?>