<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FEST DETAILS</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="myCSS/MenuBar.css" />
<link rel="stylesheet" type="text/css" href="myCSS/readPageDsgn.css" />
<!-- first two css files are used for tab n festdisplay-->
<link rel="stylesheet" href="festcss.css"/>

<!--signup content-->
<link rel="stylesheet" href="signStyle.css"/>
  <script type="text/javascript" src="signJS.js"></script>
<!--signup content-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="myJS/common.js"></script>
<style >

.myline
{
  height: 1px;
  width: 100%;
  background-color: #777;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: -20px;
}

.mylist > li
{
  display: block;
  width: 100%;
  
  margin-left: -20px;
}

.soc{
  width: 20%;
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
	#opened{
		display: block;
	}
</style>
<!-- php in always open About tab start-->

<script type="text/javascript">
/*
function openAbout(<?php echo $name1, $name2, $name3 ?>) {
	<!--alert('You will have to login first.');-->
           document.getElementById('open').innerHTML='<h3>Fest Details</h3><p>$name1</p><p>For more Information please visit</p><button>$name2</button><p><button>$name3</button></p>';
        }
       <!-- window.onload = openAbout();-->	
*/
</script>

<!-- end -->
	
</head>
<body>

<div id="shadow"></div>
<span id="close" onclick="hideLogin()"><i class="fa fa-close"></i></span>

<!--____________________MENU BAR START________________________________-->
<?php

if(isset($_SESSION["user"]))
{	

	$uid=$_SESSION["user"];
 include 'menu_bar-log.php'; 
}
else
{
 include 'menu_bar.php'; 
}
?>

<!--____________________MENU BAR END________________________________-->

<div class="container bodyContent">

<!--fest details display start-->

<?php
	if(isset($_GET["cata"]))
		{
			$v=$_GET["cata"];
			$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `fest` where `fest_id`='$v'");
			
			
			while($val=mysqli_fetch_array($res))
			{
		echo"
	
<div id='first' style='width:100%; float:left;'>
	<div style='width: 70%; float:left;'>
  <h2 id='cc'>$val[1]</h2></div>";
  
  
		if(isset($_SESSION["user"]))
	{	

  $res1=mysqli_query($con,"select * from `boost` where `fest_id`='$v' and `user_id`='$uid'");
		
		if($val1=mysqli_fetch_array($res1))
		{
			echo"<div style='width:30%; float:left; margin-top: 1.5%;'><button role='button'><a href='unboost.php?cata=$val[0]'>UNBOOST<i class='fa fa-arrow-down' aria-hidden='true'></i>
  </a></button></div>";
		}
		else
		{
			echo"<div style='width:30%; float:left; margin-top: 1.5%;'><button role='button'><a href='boost.php?cata=$val[0]'>BOOST<i class='fa fa-arrow-up' aria-hidden='true'></i>
  </a></button></div>";
		}
	}
		
  echo"

 </div>
 <br>&nbsp
  <hr WIDTH='90%' SIZE='10' noshade>

<div style='width: 100%'>


<div id='eventimage' style='float:left; width: 20%;'><img id='myImg' src='$val[12]' width=100% height=100%></div>
  <!--beginning of left div-->
  
  <div style='float:left;width:55%;'>";
  
  $res1=mysqli_query($con,"select * from `college` where `col_id`='$val[4]'");
			
			while($val1=mysqli_fetch_array($res1))
			{
				
		echo"
	
 <div id='second'>
 		<ul id='event_name'>College Name:<a href='clgprof.php?cat=$val1[0]'>  $val1[1]</a></ul>
<br>";
			}
			echo"
	
<ul id='category'>Category: $val[2]</ul>
<br>
<ul id='organizer'>Organiser: $val[9]</ul>
<br>
<ul id='location'>Location:  $val[7]</ul>
<br>
<ul id='date'>Fest Date: $val[8]</ul>
<br>
<ul id='reg'><a href='priority.php?cata=$val[0]'>Proceed to registration</a></ul>
</div>



<script type='text/javascript'>
<!--confirm('You will have to login first.');-->
        window.onload = 'openAbout($val[3],$val[11],$val[10])';	
<!--prompt('You will have to login first.');
-->
<!--window.addEventListener('load',openAbout($val[3],$val[11],$val[10]),once);-->

</script>



<div class='tab' >
	<button  style='padding-left: 60px;padding-right: 40px;font-size: 20px' class='tablinks' onclick=\"openfest('About')\"> ABOUT </button>
	<button style='padding-left: 60px;padding-right: 40px;font-size: 20px' class='tablinks' onclick=\"openfest('Event Listing')\"> EVENTS LIST </button>
    <button  style='padding-left: 60px;padding-right: 40px;font-size: 20px' class='tablinks' onclick=\"openfest('Contacts')\"> CONTACT </button>
</div>

<div id='open'></div>
<!--About Details-->

     <div id='About' class='tabcontent' >
     <h3>Fest Details</h3><p>$val[3]</p><p>For more Information please visit</p>  
     <button>$val[11]</button>
     </div>
     
<!--Event List  Details-->
     <div id='Event Listing' class='tabcontent'>";
	 
	 $res2=mysqli_query($con,"select * from `fest_eve` where `fest_id`='$val[0]'");
			while($val2=mysqli_fetch_array($res2))
			{
		echo"
	<p>$val2[1]</p>
	";
			}
			
			
	echo"</div>

        <!--Contact Details-->
        <div id='Contacts' class='tabcontent'><p>$val[10]</p></div>
			
		 </div>
		 ";
		}
		}
?>

<?php
	if(isset($_GET["cat"]))
		{
			$v=$_GET["cat"];
			$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `fest` where `fest_type`='$v'");
			
			
			while($val=mysqli_fetch_array($res))
			{
		echo"
		
		<div id='first'>
  <h2 id='cc'>$val[1]</h2>

 </div>
  <hr WIDTH='90%' SIZE='10' noshade>

<div style='width: 100%'>


<div id='eventimage' style='float:left; width: 20%;'><img id='myImg' src='$val[12]' width=100% height=100%></div>
  <!--beginning of left div-->
  
  <div style='float:left;width:55%'>";
  
  $res1=mysqli_query($con,"select * from `college` where `col_id`='$val[4]'");
			
			while($val1=mysqli_fetch_array($res1))
			{
				
		echo"
	
 <div id='second'>
 		<ul id='event_name'>College Name:<a href='clgprof.php?cat=$val1[0]'>  $val1[1]</a></ul>
<br>";
			}
			echo"
	
<ul id='category'>Category: $val[2]</ul>
<br>
<ul id='organizer'>Organiser: $val[9]</ul>
<br>
<ul id='location'>Location:  $val[7]</ul>
<br>
<ul id='date'>Fest Date: $val[8]</ul>
<br>
<ul id='reg'><a href='$val[11]'>Proceed to registration</a></ul>
</div>



<script type='text/javascript'>
<!--confirm('You will have to login first.');-->
        window.onload = 'openAbout($val[3],$val[11],$val[10])';	
<!--prompt('You will have to login first.');
-->
<!--window.addEventListener('load',openAbout($val[3],$val[11],$val[10]),once);-->

</script>



<div class='tab' >
	<button  style='padding-left: 60px;padding-right: 50px;font-size: 20px' class='tablinks' onclick=\"openfest('About')\"> ABOUT </button>
	<button style='padding-left: 60px;padding-right: 50px;font-size: 20px' class='tablinks' onclick=\"openfest('Event Listing')\"> EVENTS LIST </button>
    <button  style='padding-left: 60px;padding-right: 50px;font-size: 20px' class='tablinks' onclick=\"openfest('Contacts')\"> CONTACT </button>
</div>

<div id='open'></div>
<!--About Details-->

     <div id='About' class='tabcontent' >
     <h3>Fest Details</h3><p>$val[3]</p><p>For more Information please visit</p>  
     <button>$val[11]</button>
     </div>
     
<!--Event List  Details-->
     <div id='Event Listing' class='tabcontent'>";
	 
	 $res2=mysqli_query($con,"select * from `fest_eve` where `fest_id`='$val[0]'");
			while($val2=mysqli_fetch_array($res2))
			{
		echo"
	<p>$val2[1]</p>
	";
			}
			
			
	echo"</div>

        <!--Contact Details-->
        <div id='Contacts' class='tabcontent'><p>$val[10]</p></div>
			
		 </div>
		 ";
		}
		}

?>


<!--end-->


<!-- redirected from search in menu bar-->
<?php
		if(isset($_REQUEST["ser"]))
		{
			$sea=$_REQUEST["search"];
			$con=mysqli_connect("localhost","root","","festhub");
			
			$res=mysqli_query($con,"select * from `fest` where `fest_name`='$sea'");
			$result=mysqli_query($con,"select * from `fest` where `fest_name`='$sea'");
			
			if($val3=mysqli_fetch_array($result))
			{
				
			while($val=mysqli_fetch_array($res))
		{
	
		echo"
		<div id='first'>
  <h2 id='cc'>$val[1]</h2>

 </div>
  <hr WIDTH='90%' SIZE='10' noshade>

<div style='width: 100%'>


<div id='eventimage' style='float:left; width: 20%;'><img id='myImg' src='$val[12]' width=100% height=100%></div>
  <!--beginning of left div-->
  
  <div style='float:left;width:55%'>";
  
  $res1=mysqli_query($con,"select * from `college` where `col_id`='$val[4]'");
			
			while($val1=mysqli_fetch_array($res1))
			{
				
		echo"
	
 <div id='second'>
 		<ul id='event_name'>College Name:<a href='clgprof.php?cat=$val1[0]'>  $val1[1]</a></ul>
<br>";
			}
			echo"
	
<ul id='category'>Category: $val[2]</ul>
<br>
<ul id='organizer'>Organiser: $val[9]</ul>
<br>
<ul id='location'>Location:  $val[7]</ul>
<br>
<ul id='date'>Fest Date: $val[8]</ul>
<br>
<ul id='reg'><a href='$val[11]'>Proceed to registration</a></ul>
</div>



<script type='text/javascript'>
<!--confirm('You will have to login first.');-->
        window.onload = 'openAbout($val[3],$val[11],$val[10])';	
<!--prompt('You will have to login first.');
-->
<!--window.addEventListener('load',openAbout($val[3],$val[11],$val[10]),once);-->

</script>



<div class='tab' >
	<button  style='padding-left: 60px;padding-right: 50px;font-size: 20px' class='tablinks' onclick=\"openfest('About')\"> ABOUT </button>
	<button style='padding-left: 60px;padding-right: 50px;font-size: 20px' class='tablinks' onclick=\"openfest('Event Listing')\"> EVENTS LIST </button>
    <button  style='padding-left: 60px;padding-right: 50px;font-size: 20px' class='tablinks' onclick=\"openfest('Contacts')\"> CONTACT </button>
</div>

<div id='open'></div>
<!--About Details-->

     <div id='About' class='tabcontent' >
     <h3>Fest Details</h3><p>$val[3]</p><p>For more Information please visit</p>  
     <button>$val[11]</button>
     </div>
     
<!--Event List  Details-->
     <div id='Event Listing' class='tabcontent1'>";
	 
	 $res2=mysqli_query($con,"select * from `fest_eve` where `fest_id`='$val[0]'");
			while($val2=mysqli_fetch_array($res2))
			{
		echo"
	<p>$val2[1]</p>
	";
			}
			
			
	echo"</div>

        <!--Contact Details-->
        <div id='Contacts' class='tabcontent2'><p>$val[10]</p></div>
			
		 </div>
		
	";
		
		
		
		}
			}
			else
			{
				echo" <p style='text-align:center'> No items matched your search.</p>";
			}
		}
		?>

<!-- end-->

<script>
function openfest(cityName) {
	document.getElementById("open").style.display="none";
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    /*tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }*/
    document.getElementById(cityName).style.display = "block";
    //evt.currentTarget.className += " active";
}

function jsfunction(a){
  if(a=="event1"){
    document.getElementById("myImg").src="Gbpec.jpg";
  }
  if(a=="event2"){
    document.getElementById("myImg").src="Riwaayat.jpg";
  }
}
</script>

</div>

<!--end of left div and start of right div-->
<!--
<div style="float: right;background-color: #C8C8C8;width: 20%"><p>Similar Events list</p>
   <li><a href="">Event 1</a></li>
   <li><a href="">Event 2</a></li>
   <li><a href="">Event 3</a></li>
   <li><a href="">Event 4</a></li>
</div>   -->
<!--end of right div-->

<!--Loop Start--> 
<div class="soc"  style="width:25%; height: 30%"> 
 
 <br>
 <ul class="mylist" style="list-style-type: none; ">
<div>Similar Events:</div>
<marquee direction="up"  onmouseover="this.stop();" onmouseout="this.start();">
  
  
  <!-- for cata right newsfeed -->
  
  <?php
	if(isset($_GET["cata"]))
		{
			$v=$_GET["cata"];
			$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `fest` where `fest_id`='$v'");
			
			
			while($val=mysqli_fetch_array($res))
			{
				
				$cid=$val[4];
				$res1=mysqli_query($con,"select * from `fest` where `col_id`='$cid' and `fest_id`!='$v'");
			
			
			while($val1=mysqli_fetch_array($res1))
			{
			
		echo"
		<div class='myline'></div>
  <li ><div class='socdiv'>
    <span><a href='fest.php?cata=$val1[0]'><img src='$val1[12]' width='40%' height='40%' ></span>
    <span>$val1[1] </span>
  </div></li>";
			}
		}
		}
		?>
		
		
		<?php
	if(isset($_GET["cat"]))
		{
			$v=$_GET["cat"];
			$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `fest` where `fest_type`='$v'");
			
			
			while($val=mysqli_fetch_array($res))
			{
				
		$cid=$val[4];
				$res1=mysqli_query($con,"select * from `fest` where `col_id`='$cid' and `fest_id`!='$val[0]'");
			
			
			while($val1=mysqli_fetch_array($res1))
			{
			echo"
<div class='myline'></div>
  <li ><div class='socdiv'>
    <span><a href='fest.php?cata=$val1[0]'><img src='$val1[12]' width='40%' height='40%' ></span>
    <span>$val1[1] </span>
  </div></li>";
			}
		}
		}
		?>
		
		
		
  <!-- end-->
  <!--<div class="myline"></div>
  <li><div class="socdiv" onclick="jsfunction('event2')">
    <span><img src="riwaayat.jpg" width="40%" height="40%" ></span>
    <span>Event 2 </span>
  </div></li>
  <div class="myline"></div>
  <li><div class="socdiv" onclick="jsfunction('event3')">
    <span><img src="riwaayat.jpg" width="40%" height="40%" ></span>
    <span>Event 3 </span>
  </div></li>-->
  
  <div class="myline"></div>
  </marquee>
 </ul>
 </div>
 
 <!--Loop end -->

<!--signup content start-->

<?php include 'signUpContent.php'; ?>

<!--signup content end-->
</div>
</body>
</html>