
<html>
<body>
<div style="width: 100%">
<?php
session_start();
if($_SESSION["admin"])
{
}
else
{
	echo"<script language='javascript'> alert('You will have to login first.')</script>";
	
	header("location:admin_login.php");
}

?>


<div style="width: 18%; border-right:thin single #000000; float:left;">
<form action="data_entry.php" method="post" enctype="multipart/form-data">

<h2 style="text-transform: uppercase;">College Details</h2>
<hr/>
<table>

<tr>
<td> College Name</td>
<td><input type="text" name="cname" placeholder="college name" required ></td>
</tr>

<tr>
<td> College Address</td>
<td><input type="text" name="cadd" placeholder="college address" required ></td>
</tr>

<tr>
<td>College Contact</td>
<td><input type="text" name="ccon" placeholder="college contact" required></td>
</tr>

<tr>
<td>College Website Link</td>
<td><input type="text" name="clink" placeholder="college website link" required></td>
</tr>

<tr>
<td> College Image</td>
<td><input type="file" name="filetoupload" id="filetoupload" required/></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="sub1" value="submit product" /></td>
</tr>

</table>
</form>

<form action="data_entry.php" method="post" enctype="multipart/form-data">
<input type="submit" name="display1" value="display product" />
</form>
</div>

<div style="width: 21%; border-right:1px; float:left;">
<form action="data_entry.php" method="post" enctype="multipart/form-data">

<h2 style="text-transform: uppercase;">Fest Details</h2>
<hr/>
<table>

<tr>
<td> Fest Name</td>
<td><input type="text" name="fname" placeholder="fest name" required> </td>
</tr>

<tr>
<td> Fest Type</td>
<td><input type="text" name="ftype" placeholder="fest type" required ></td>
</tr>

<tr>
<td>Fest Description</td>
<td><input type="text" name="fdesc" placeholder="Fest description" required></td>
</tr>

<tr>
<td>College Id</td>
<td>
<?php 
$con=mysqli_connect("localhost","root","","festhub");
	$res=mysqli_query($con,"select `col_id` from `college`");
 
	echo"<select name='cid1' required/>";

	while($val=mysqli_fetch_array($res))
	{
		echo"<option>$val[0]</option>";
    }
	
	echo"</select>";
?>
	
<!--<input type="text" name="cid1" placeholder="college id" required</td>-->
</tr>

<tr>
<td>Fest Location</td>
<td><input type="text" name="floc" placeholder="fest location" required></td>
</tr>

<tr>
<td>Fest Date</td>
<td><input type="text" name="fdate" placeholder="fest date" required></td>
</tr>

<tr>
<td>Organizer's Contact</td>
<td><input type="text" name="ocon" placeholder="organizer's contact" required></td>
</tr>

<tr>
<td>Organizer's Name</td>
<td><input type="text" name="oname" placeholder="organizer's name" required></td>
</tr>

<tr>
<td>Registration Link</td>
<td><input type="text" name="rlink" placeholder="registration link" required></td>
</tr>

<tr>
<td> Fest Image</td>
<td><input type="file" name="filetoupload" id="filetoupload" required/></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="sub2" value="submit product" /></td>
</tr>

</table>
</form>

<form action="data_entry.php" method="post" enctype="multipart/form-data">
<input type="submit" name="display2" value="display product" />
</form>
</div>

<div style="width: 21%; border-right:1px; float:left;">
<form action="data_entry.php" method="post" enctype="multipart/form-data">

<h2 style="text-transform: uppercase;">Fest Event Details</h2>
<hr/>
<table>

<tr>
<td> Event Name</td>
<td><input type="text" name="ename1" placeholder="event name" required ></td>
</tr>

<tr>
<td> Event Type</td>
<td><select id="state" name="etype" required>
		<option>-</option>
		<option>Quiz</option><option>Writing</option><option>Coding</option><option>Debate</option><option>Robocon</option><option>Singing</option><option>Dancing</option><option>Technical Symposium</option><option>Treasure Hunt</option><option>Nukkad Natak</option><option>Junkyard</option>
	</select>			
<!--<input type="text" name="etype" placeholder="event type" required </td>-->
</tr>

<tr>
<td>Fest Id</td>
<td>
<?php 
$con=mysqli_connect("localhost","root","","festhub");
	$res=mysqli_query($con,"select `fest_id` from `fest`");
 
	echo"<select name='fid' required/>";

	while($val=mysqli_fetch_array($res))
	{
		echo"<option>$val[0]</option>";
    }
	
	echo"</select>";
?>
	
<!--<input type="text" name="fid" placeholder="fest id" required></td>-->
</tr>

<tr>
<td></td>
<td><input type="submit" name="sub3" value="submit product" /></td>
</tr>

</table>
</form>

<form action="data_entry.php" method="post" enctype="multipart/form-data">
<input type="submit" name="display3" value="display product" />
</form>
</div>

<div style="width: 21%; border-right:1px; float:left;">
<form action="data_entry.php" method="post" enctype="multipart/form-data">

<h2 style="text-transform: uppercase;">Society Details</h2>
<hr/>
<table>

<tr>
<td> Society Name</td>
<td><input type="text" name="sname" placeholder="society name" required ></td>
</tr>

<tr>
<td> Society Description</td>
<td><input type="text" name="sdesc" placeholder="society description" required ></td>
</tr>

<tr>
<td>Organizer's Contact</td>
<td><input type="text" name="ocon" placeholder="organizer's contact" required></td>
</tr>

<tr>
<td>Organizer's Name</td>
<td><input type="text" name="oname" placeholder="organizer's name" required></td>
</tr>

<tr>
<td> Society Image</td>
<td><input type="file" name="filetoupload" id="filetoupload" required/></td>
</tr>

<tr>
<td>College Id</td>
<td>
<?php 
$con=mysqli_connect("localhost","root","","festhub");
	$res=mysqli_query($con,"select `col_id` from `college`");
 
	echo"<select name='cid2' required/>";

	while($val=mysqli_fetch_array($res))
	{
		echo"<option>$val[0]</option>";
    }
	
	echo"</select>";
?>
	
<!--<input type="text" name="cid2" placeholder="college id" required></td>-->
</tr>

<tr>
<td></td>
<td><input type="submit" name="sub4" value="submit product" /></td>
</tr>

</table>
</form>

<form action="data_entry.php" method="post" enctype="multipart/form-data">
<input type="submit" name="display4" value="display product" />
</form>
</div>

<div style="width: 19%; border-right:1px; float:left;">
<form action="data_entry.php" method="post" enctype="multipart/form-data">

<h2 style="text-transform: uppercase;">Society Event Details</h2>
<hr/>
<table>

<tr>
<td> Event Name</td>
<td><input type="text" name="ename2" placeholder="event name" required ></td>
</tr>

<tr>
<td>Society Id</td>
<td>
<?php 
$con=mysqli_connect("localhost","root","","festhub");
	$res=mysqli_query($con,"select `soc_id` from `society`");
 
	echo"<select name='sid' required/>";

	while($val=mysqli_fetch_array($res))
	{
		echo"<option>$val[0]</option>";
    }
	
	echo"</select>";
?>
	
<!--<input type="text" name="sid" placeholder="society id" required></td>-->
</tr>

<tr>
<td> Event Image</td>
<td><input type="file" name="filetoupload" id="filetoupload" required/></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="sub5" value="submit product" /></td>
</tr>

</table>
</form>

<form action="data_entry.php" method="post" enctype="multipart/form-data">
<input type="submit" name="display5" value="display product" />
</form>
</div>

</div>
<?php

if(isset($_REQUEST["sub1"]))
{
	$cn=$_REQUEST["cname"];
	$ca=$_REQUEST["cadd"];
	$cc=$_REQUEST["ccon"];
	$cl=$_REQUEST["clink"];
	$url1="college_img/".$_FILES["filetoupload"]["name"];
	
	$target_file="C:\\wamp\\www\\my\\Festworld\\college_img/".$_FILES["filetoupload"]["name"];
	
	move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file);
	
	/*
	echo $cn;
	echo $ca;
	echo $cc;
	echo $cl;
	echo $url;
	*/
	
	$con=mysqli_connect("localhost","root","","festhub");
	
	/*
	$query="insert into `college`(`col_name`,`col_add`,`col_contact`,`col_link`,`col_img`) values('$cn','$ca','$cc','$cl','$url')";
	echo $query;
	*/
	
	mysqli_query($con,"insert into `college`(`col_name`,`col_add`,`col_contact`,`col_link`,`col_img`) values('$cn','$ca','$cc','$cl','$url1')");
}


if(isset($_REQUEST["display1"]))
{
	$con=mysqli_connect("localhost","root","","festhub");
	$res=mysqli_query($con,"select * from `college`");
	
	echo "<table><tr>
	<th>ID</th>
	<th>College Name</th>
	<th>College Priority</th>
	<th>College Followers</th>
	<th>College Address</th>
	<th>College Contact</th>
	<th>College Link</th>
	<th>College Image</th>
	</tr>";
	while($val=mysqli_fetch_array($res))
	{
		echo"<tr>";
		for($i=0;$i<8;$i++)
			{
				echo"<td>$val[$i]</td>";
			}
		echo"</tr>";	}
	echo"</table>";
}


if(isset($_REQUEST["sub2"]))
{
	$fn=$_REQUEST["fname"];
	$ft=$_REQUEST["ftype"];
	$fd=$_REQUEST["fdesc"];
	$ci=$_REQUEST["cid1"];
	$fl=$_REQUEST["floc"];
	$fd=$_REQUEST["fdate"];
	$oc=$_REQUEST["ocon"];
	$on=$_REQUEST["oname"];
	$rl=$_REQUEST["rlink"];
	$url2="fest_img/".$_FILES["filetoupload"]["name"];
	
	$target_file="C:\\wamp\\www\\my\\Festworld\\fest_img/".$_FILES["filetoupload"]["name"];
	
	move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file);
	
	/*
	echo $cn;
	echo $ca;
	echo $cc;
	echo $cl;
	echo $url;
	*/
	
	$con=mysqli_connect("localhost","root","","festhub");
	
	/*
	$query="insert into `college`(`col_name`,`col_add`,`col_contact`,`col_link`,`col_img`) values('$cn','$ca','$cc','$cl','$url')";
	echo $query;
	*/
	
	mysqli_query($con,"insert into `fest`(`fest_name`,`fest_type`,`fest_desc`,`col_id`,`fest_loc`,`fest_date`,`fest_org_name`,`fest_org_contact`,`reg_link`,`fest_img`) values('$fn','$ft','$fd','$ci','$fl','$fd','$on','$oc','$rl','$url2')");
}


if(isset($_REQUEST["display2"]))
{
	$con=mysqli_connect("localhost","root","","festhub");
	$res=mysqli_query($con,"select * from `fest`");
	
	echo "<table><tr>
	<th>ID</th>
	<th>Fest Name</th>
	<th>Fest Type</th>
	<th>Fest Description</th>
	<th>College Id</th>
	<th>Boost</th>
	<th>Fest Priority</th>
	<th>Fest Location</th>
	<th>Fest Date</th>
	<th>Fest Organizer Name</th>
	<th>Fest Organizer Contact</th>
	<th>Register Link</th>
	<th>Fest Image</th>
	</tr>";
	while($val=mysqli_fetch_array($res))
	{
		echo"<tr>";
		for($i=0;$i<13;$i++)
			{
				echo"<td>$val[$i]</td>";
			}
		echo"</tr>";	}
	echo"</table>";
}


if(isset($_REQUEST["sub3"]))
{
	$en=$_REQUEST["ename1"];
	$et=$_REQUEST["etype"];
	$fi=$_REQUEST["fid"];
	
	/*
	echo $cn;
	echo $ca;
	echo $cc;
	echo $cl;
	echo $url;
	*/
	
	$con=mysqli_connect("localhost","root","","festhub");
	
	/*
	$query="insert into `college`(`col_name`,`col_add`,`col_contact`,`col_link`,`col_img`) values('$cn','$ca','$cc','$cl','$url')";
	echo $query;
	*/
	
	mysqli_query($con,"insert into `fest_eve`(`eve_name`,`eve_type`,`fest_id`) values('$en','$et','$fi')");
}


if(isset($_REQUEST["display3"]))
{
	$con=mysqli_connect("localhost","root","","festhub");
	$res=mysqli_query($con,"select * from `fest_eve`");
	
	echo "<table><tr>
	<th>ID</th>
	<th>Event Name</th>
	<th>Event Type</th>
	<th>Fest Id</th>
	</tr>";
	while($val=mysqli_fetch_array($res))
	{
		echo"<tr>";
		for($i=0;$i<4;$i++)
			{
				echo"<td>$val[$i]</td>";
			}
		echo"</tr>";	}
	echo"</table>";
}


if(isset($_REQUEST["sub4"]))
{
	$sn=$_REQUEST["sname"];
	$sd=$_REQUEST["sdesc"];
	$oc=$_REQUEST["ocon"];
	$on=$_REQUEST["oname"];
	$ci=$_REQUEST["cid2"];
	$url4="society_img/".$_FILES["filetoupload"]["name"];
	
	$target_file="C:\\wamp\\www\\my\\Festworld\\society_img/".$_FILES["filetoupload"]["name"];
	
	move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file);
	
	/*
	echo $cn;
	echo $ca;
	echo $cc;
	echo $cl;
	echo $url;
	*/
	
	$con=mysqli_connect("localhost","root","","festhub");
	
	/*
	$query="insert into `college`(`col_name`,`col_add`,`col_contact`,`col_link`,`col_img`) values('$cn','$ca','$cc','$cl','$url')";
	echo $query;
	*/
	
	mysqli_query($con,"insert into `society`(`soc_name`,`soc_desc`,`contact`,`organizer_name`,`col_id`,`soc_img`) values('$sn','$sd','$oc','$on','$ci','$url4')");
}


if(isset($_REQUEST["display4"]))
{
	$con=mysqli_connect("localhost","root","","festhub");
	$res=mysqli_query($con,"select * from `society`");
	
	echo "<table><tr>
	<th>ID</th>
	<th>Society Name</th>
	<th>Society Description</th>
	<th>Organizer's Contact</th>
	<th>Organizer's Name</th>
	<th>Society Image</th>
	<th>College Id</th>
	</tr>";
	while($val=mysqli_fetch_array($res))
	{
		echo"<tr>";
		for($i=0;$i<7;$i++)
			{
				echo"<td>$val[$i]</td>";
			}
		echo"</tr>";	}
	echo"</table>";
}


if(isset($_REQUEST["sub5"]))
{
	$en=$_REQUEST["ename2"];
	$si=$_REQUEST["sid"];
	$url5="soceve_img/".$_FILES["filetoupload"]["name"];
	
	$target_file="C:\\wamp\\www\\my\\Festworld\\soceve_img/".$_FILES["filetoupload"]["name"];
	
	move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file);
	
	/*
	echo $cn;
	echo $ca;
	echo $cc;
	echo $cl;
	echo $url;
	*/
	
	$con=mysqli_connect("localhost","root","","festhub");
	
	/*
	$query="insert into `college`(`col_name`,`col_add`,`col_contact`,`col_link`,`col_img`) values('$cn','$ca','$cc','$cl','$url')";
	echo $query;
	*/
	
	mysqli_query($con,"insert into `soc_eve`(`eve_name`,`soc_id`,`eve_img`) values('$en','$si','$url5')");
}


if(isset($_REQUEST["display5"]))
{
	$con=mysqli_connect("localhost","root","","festhub");
	$res=mysqli_query($con,"select * from `soc_eve`");
	
	echo "<table><tr>
	<th>ID</th>
	<th>Event Name</th>
	<th>Event Image</th>
	<th>Society Id</th>
	</tr>";
	while($val=mysqli_fetch_array($res))
	{
		echo"<tr>";
		for($i=0;$i<4;$i++)
			{
				echo"<td>$val[$i]</td>";
			}
		echo"</tr>";	}
	echo"</table>";
}
/*
	$con=mysqli_connect("localhost","root","","ecommerce");
	$res=mysqli_query($con,"select `id` from `product`");
 
	echo"<form action='index 3.php' method='post'>";
	echo"<select name='ID'/>";

	while($val=mysqli_fetch_array($res))
	{
		echo"<option>$val[0]</option>";
    }
	
	echo"</select>";
	echo"<input type='submit' name='ser' value='search'/>";
	echo"<br/>";
	echo"<input type='submit' name='delete' value='delete product' />";
	echo"<br/>";
	echo"<input type='submit' name='update' value='update product' />";
	echo"</form>";

if(isset($_REQUEST["ser"]))
{
	$val1=$_REQUEST["ID"];
	$con=mysqli_connect("localhost","root","","ecommerce");
	$res=mysqli_query($con,"select * from `product` where `id`='$val1' ");
	
	echo "<table><tr>
	<th>ID</th>
	<th>Book Name</th>
	<th>Author Name</th>
	<th>Price</th>
	<th>Publisher</th>
	<th>Pages</th>
	<th>Language</th>
	<th>Genre</th>
	<th>Sub-Genre</th>
	<th>Release-Date</th>
	<th>Popular</th>
	<th>Offers</th><th>Image</th>
	<th>Discounted Price</th>
	</tr>";
	while($val=mysqli_fetch_array($res))
	{
		echo"<tr>";
		for($i=0;$i<13;$i++)
			
			{
				echo"<td>$val[$i]</td>";
			}
		echo"</tr>";
	}
	echo"</table>";
}


if(isset($_REQUEST["delete"]))
{
	$val1=$_REQUEST["ID"];
	$con=mysqli_connect("localhost","root","","ecommerce");
	$res=mysqli_query($con,"delete from `product` where `id`='$val1'");
}


	if(isset($_REQUEST["update"]))
	{	
		$val1=$_REQUEST["ID"];

echo"<form action='index 3.php' method='post' enctype='multipart/form-data'>
<fieldset>
<legend style='text-transform: uppercase;'> enter book details</legend>
<table>

<tr>
<td> Product id</td>
<td><input type='text' name='prodid' value='$val1' /> </td>
</tr>

<tr>
<td> Book Name</td>
<td><input type='text' name='bname' placeholder='book name' style='text-transform:capitalize;'</td>
</tr>

<tr>
<td> Author Name</td>
<td><input type='text' name='aname' placeholder='author name'  style='text-transform:capitalize;'</td>
</tr>

<tr>
<td>Price</td>
<td><input type='text' name='bprice' placeholder='book price'  </td>
</tr>

<tr>
<td>Publisher</td>
<td><input type='text' name='bpublisher' placeholder='book publisher'  style='text-transform: capitalize;'</td>
</tr>

<tr>
<td>Pages</td>
<td><input type='text' name='bpages' placeholder='book pages' </td>
</tr>

<tr>
<td> Language </td>
<td><input type='text' name='blanguage' placeholder='book language'  style='text-transform:capitalize;'</td>
</tr>

<tr>
<td> Genre</td>
<td><input type='text' name='bgenre' placeholder='book genre'  style='text-transform:capitalize;'</td>
</tr>

<tr>
<td> Sub-Genre</td>
<td><input type='text' name='bsub' placeholder='book subgenre'  style='text-transform:capitalize;'</td>
</tr>

<tr>
<td> Release Date</td>
<td><input type='text' name='brelease' placeholder='book release' </td>
</tr>

<tr>
<td> Popular</td>
<td><input type='text' name='bpopular' placeholder='book popular' </td>
</tr>

<tr>
<td> Offers</td>
<td><input type=text' name='boffers' placeholder='book offers' </td>
</tr>

<tr>
<td> Image</td>
<td><input type='file' name='filetoupload' id='filetoupload' /></td>
</tr>

<tr>
<td></td>
<td><input type='submit' name='upd' value='update product' />
</td>
</tr>

</table>
</fieldset>
</form>
";
	}
if(isset($_REQUEST["upd"]))
{
	$pn=$_REQUEST["pname"];
	$pp=$_REQUEST["pprice"];
	$val2=$_REQUEST["prodid"];
	$con=mysqli_connect("localhost","root","","ecommerce");
	mysqli_query($con,"UPDATE `product` SET `b_name`='$bn',`author`='$an',`price`='$bp',`publisher`='$bpu',`pages`='$bpa',`language`='$bl',`genre`='$bg',`sub genre`='$bs',`release date`='$br',`popular`='$bpo',`offers`='$bo',`imgurl`='$url' WHERE `id`='$val2'");
}
	

*/
?>
</body>
</html>