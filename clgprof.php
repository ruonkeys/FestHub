
<!--to constraint user to login first start-->

<?php
session_start();
//$upass=$_SESSION["pass"];
if(isset($_SESSION["user"]))
{
	$uid=$_SESSION["user"];
	echo"hi";
}
else
{
	echo"bye";
	header('location: signUpLogin.php');
	//exit();
}

?>
<!-- end -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>College Profile</title>


<style> 
#society_events{
       transition-timing-function: ease;
       -webkit-transition: opacity 4s;
	opacity: 0;

}
#so_clg{
	text-align: center;
}
.myline
{
	height: 1px;
	width: 100%;
	background-color: #777;
	margin-top: 10px;
	margin-bottom: 10px;
	margin-left: -20px;
}
/*.myline2{
	height: 100%;
	width: 2%;
	float: left;
	background-color: #777;
}*/
.mylist > li
{
	display: block;
	width: 100%;
	
	margin-left: -20px;
}
#a {
       
    /*transition-timing-function: ease;
    -webkit-transition: margin-Top 3s; /* Safari 3.1 to 6.0 */
}

#a:target{
 
    margin-Top:50px;
}
.bl{
 background-color: #00ff80;
 font-size: 150%;
 font-weight: bold;
 border-top-left-radius: 21px;
border-bottom-left-radius: 21px;
border: none; 
}
*[role="button"]{
	background-color: #00d2ff;
margin-left: -8px;
font-size: 150%;
font-weight: bold;
border-top-right-radius: 21px;
border-bottom-right-radius: 21px;
border-top-left-radius: 21px;
border-bottom-left-radius: 21px;

border: none;

}
.br:hover
{
	background-color: #777;
	cursor: pointer;
	border: none;
}

.br:hover{
	cursor: pointer;
}
.soc{
	width: 25%;
	float: left;
	font-size: 150%;
   

    background-color: #f5f5f0;

}
.soc:hover{
	background-color: #d6d6c2;
}

.socdiv:hover{
	cursor: pointer;

}


}
</style>

<!--script is cut from here into php code to the societies section in right-->
<!--<script>

function jsfunction(a) {

/*
	document.getElementById("society_events").innerHTML = "Govind Ballabh Pant Engineering College (also referred to as GBPEC or, colloquially, Pant) is a public engineering college located in Okhla, Delhi, India. It was established in 2007 by the Directorate of Training and Technical Education of the Delhi Government. The college is affiliated to the Guru Gobind Singh Indraprastha
	}
	if(a=="buniyaad"){
		document.getElementById("society_events").innerHTML = a;
	}*/
	if(a=="quiz"){

               document.getElementById("society_events").style.opacity = "1";
	        document.getElementById("college_socity").style.display="block";
	        document.getElementById("myImg").src="Gbpec.jpg";
	        document.getElementById("society_name").innerHTML="Quizzine";
	        document.getElementById("socity_desc").innerHTML = "<br>Govind Ballabh Pant Engineering College (also referred to as GBPEC or, colloquially, Pant) is a public engineering college located in Okhla, Delhi, India. It was established in 2007 by the Directorate of Training and Technical Education of the Delhi Government. The college is affiliated to the Guru Gobind Singh Indraprastha University[1] in Delhi.";
	        document.getElementById("contacts").innerHTML="<br><br>Contact name1::7896541278<br>Contact name2::9874563217"
               var x = document.getElementById("myHR");
               x.style.display = "block";
           }
	if(a=="buniyaad"){
              document.getElementById("society_events").style.opacity = "1";
              document.getElementById("college_socity").style.display="block";
              document.getElementById("myImg").src="Riwaayat.jpg";
              document.getElementById("society_name").innerHTML="BUNNIYAAD";
              document.getElementById("socity_desc").innerHTML = "<br>Govind Ballabh Pant Engineering College (also referred to as GBPEC or, colloquially, Pant) is a public engineering college located in Okhla, Delhi, India. ";
              document.getElementById("contacts").innerHTML="<br><br>Contact name1::7896541278<br>Contact name2::9874563217"
             var x = document.getElementById("myHR");
              x.style.display = "block";
		
	}
	
}
</script>-->
<!-- end -->


<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="myCSS/MenuBar.css" />
<link rel="stylesheet" type="text/css" href="myCSS/readPageDsgn.css" />

<!--signup content-->
<link rel="stylesheet" href="signStyle.css"/>
	<script type="text/javascript" src="signJS.js"></script>
<!--signup content-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="myJS/common.js"></script>

</head>

<body>





<div id="shadow"></div>
<span id="close" onclick="hideLogin()"><i class="fa fa-close"></i></span>

<!--____________________MENU BAR START________________________________-->


<?php

if(isset($_SESSION["user"]))
{	
 include 'menu_bar-log.php'; 
}
else
{
 include 'menu_bar.php'; 
}
?>


<!--____________________MENU BAR END________________________________-->

<div class="container bodyContent">
<div>&nbsp</div>
<br>
<br>
 <div style="width: 100%">
 
	<div  style="width: 75%;float: left;">
	<table >
	

	
	
	<!--college details listing start-->
	
	<?php
	if($_GET["cat"])
		{
			$v=$_GET["cat"];
			$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `college` where `col_id`='$v'");
			
			while($val=mysqli_fetch_array($res))
			{
		echo"
		
	<tr>
	<td rowspan='5' colspan='2'>
	<img src='$val[7]' width=200px height=200px>
		</td>
	<td colspan='3' style='text-align: center;font-size: 300%'>
	$val[1]</td>

	</tr>

<tr> 
<td rowspan='2' colspan='2' style='text-align: left;font-size: 100%;padding-left:3%;' >
	<br>&nbsp
	&nbsp<br>
	ADDRESS:- $val[4]
	<br>&nbsp
</td>
</tr>
<tr></tr>
<tr> 
<td rowspan='2'  colspan='2' style='text-align: left;font-size: 100%;padding-left:3%;' >
	&nbsp<br>
	 PHONE NO.:- $val[5]
	<br>&nbsp
</td>
</tr>
<tr></tr>
<tr> 
<td colspan='2' style='text-align: center;font-size: 150%'> Followers: $val[3]</td>
<td  colspan='2' style='text-align: left;font-size: 100%;padding-left:3%;'>
	&nbsp<br>
	COLLEGE SITE:- <a href='$val[6]'>$val[6] </a>
     <br>&nbsp
</td>

</tr>
<tr> <td style='text-align: center;'> <!-- <input type='button' name='follow'  value='FOLLOW' style='font-size: 110%;background-color: #7bc043'> -->
	<div >
	
	<!-- +1 dont want-->
	
		<!--<button class='bl' disabled='true'>
			+1
		</button>
	
	
		<a href='follow.php?cata=$val[0]' role='button' class='br'>FOLLOW</a>
		-->";
		
		
		$res1=mysqli_query($con,"select * from `follow` where `col_id`='$v' and `user_id`='$uid'");
		
		if($val1=mysqli_fetch_array($res1))
		{
			echo"<button role='button'><a href='unfollow.php?cata=$val[0]'>UNFOLLOW</a></button>";
		}
		else
		{
			echo"<button role='button'><a href='follow.php?cata=$val[0]'>FOLLOW</a></button>";
		}
		
		
	echo"	
	</div>
</td></tr>
		";
		}
		}
		?>
		
		<!-- end -->
		
		
		
	</table> 
<hr style="border-color:#D3D3D3;margin-left:20%;margin-right: 20% ">

	</div>
<!--Loop Start-->	
<div class="soc" > 
 
 <br>
 <ul class="mylist" style="list-style-type: none">
<div>College Societies:</div>
 	<div class="myline"></div>
		
		
		
		<!-- college societies display start-->
		<?php
		if($_GET["cat"])
		{
			$v=$_GET["cat"];
	
		$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `society` where `col_id`='$v'");
			
			
			while($val=mysqli_fetch_array($res))
			{
		
		echo"
		
		<div class='myline'></div>
		<li ><div class='socdiv' onclick=\"jsfunction('$val[5]','$val[1]','$val[2]','$val[4]','$val[3]')\" >
		<span><img src='$val[5]' width='40%' height='15%' ></span>
 		<span>$val[1] </span>
		</div>
		<script>

function jsfunction(img,name,desc,org,con) {
	
               document.getElementById('society_events').style.opacity = '1';
	        document.getElementById('college_socity').style.display='block';
	        document.getElementById('myImg').src=img;
	        document.getElementById('society_name').innerHTML=name;
	        document.getElementById('socity_desc').innerHTML='<br>'+desc;
	        document.getElementById('org_name').innerHTML = '<br>'+org;
	        document.getElementById('contacts').innerHTML='<br>'+con;
               var x = document.getElementById('myHR');
               x.style.display = 'block';
           
}
</script></li>";
 			}
		}
		?>
		<!-- end-->
		
 	<div class="myline"></div>
 </ul>
 </div>
 <!--Loop end -->
 </div>

<div id="society_events" style="width: 75%">
     <div id="college_socity" style="display: none;">

	    <div  id="leftside" style="float: left;width: 30%;">
	 <img id="myImg" src="" width="80%" height="30%" >
	    </div>
	 <div id="rightside" style="width: 100%">
	     <div id="society_name"  style="text-align: center;font-size: 200%;margin-right: 200px">
		     </div>  
		  <div id="socity_desc" style="font-size: 100%;text-align: left;"></div>
		  <div id="org_name" style="font-size: 100%;text-align: left;"></div>
		  <div id="contacts" style="font-size: 100%;text-align: left;"></div>
	 </div>
</div>
</div>

<br><br>
<hr style="border-color:#D3D3D3;margin-left:15%;margin-right: 35% ">

<div id="a" style="width: 75%;text-align: center; height:100%;">
	<h1>FESTS/EVENTS</h1>
	
	
	
	<!-- college societies display start-->
		<?php
		if($_GET["cat"])
		{
			$v=$_GET["cat"];
	
		$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `fest` where `col_id`='$v'");
			
			
			while($val=mysqli_fetch_array($res))
			{
		
		echo"
		<div style='width:33%; float:left;margin-Top:5%'>
	<a href='fest.php?cata=$val[0]' style='font-size: 120%'><img src='$val[12]' alt='Inceptum' width='80%' height='30%' /><br/>
$val[1]</a></div>";
 			}
		}
		?>
		
		<?php
		if($_GET["cat"])
		{
			$v=$_GET["cat"];
	
		$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `society` where `col_id`='$v'");
			
			while($val=mysqli_fetch_array($res))
			{
				
			$res1=mysqli_query($con,"select * from `soc_eve` where `soc_id`='$val[0]'");
		
			while($val1=mysqli_fetch_array($res1))
			{
				
		echo"
		<div style='width:33%; float:left;margin-Top:5%'>
	<a href='#' style='font-size: 120%'><img src='$val1[2]' alt='Inceptum' width='80%' height='30%' /><br/>
$val1[1]</a></div>";
 			}
		}
		}
		?>
		
		

</div>
		
		<!-- end-->
		
<br>
<!--signup content start-->
<!--
<div class="mainWrap" id="mainWrap_id">
  <div class="wrap">
    <div class="wrap_0">
     <div class="b1" id="b1_id" onclick="signUp()">SignUp</div>
     <div class="b2" id="b2_id" onclick="logIn()">LogIn</div>      


      <div id="signup">
        <h1 style="margin-top: 90px;">SignUp here</h1>

	    <form>
	      <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="text" placeholder="First Name*"/><br/>
	      <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="text" placeholder="Last Name*"/><br/>
	      <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="email" placeholder="Email Address*"/><br/>
	      <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="password" placeholder="Set a password*"/><br/>
	      <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="password" placeholder="Confirm password*"/><br/>
	      <select class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)">
	       <option value="">---Select your College---</option>
	       <option value="G.B Pant Govt. Engineering College">G.B Pant Govt. Engineering College</option>
	       <option value="College2">College2</option>
	       <option value="College3">College3</option>
	      </select><br/>
	      <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="text" placeholder="Mobile*"/>
	      <input class="sub" type="submit" value="Register"/>
	    </form>
      </div>

      <div id="login">
        <h1 style="margin-top: 90px;">LogIn here</h1>

        <form>
           <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="email" placeholder="Email Id*"/><br/>
	       <input class="inp" id="inp1" onfocus="borderChange(this)" onblur="borderNormal(this)" type="password" placeholder="Password*"/><br/>
	       <a href="" class="forgot">Forgot Password</a>
	       <input class="sub" id="inp1" type="submit" value="Log In"/>
        </form>
      </div>

    </div>
    
  </div>
</div>-->
<!--signup content start-->

<?php include 'signUpContent.php'; ?>

<!--signup content end-->
</div>


</body>
</html>
