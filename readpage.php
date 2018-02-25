<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ReadPage</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="myCSS/MenuBar.css" />
<link rel="stylesheet" type="text/css" href="myCSS/readPageDsgn.css" />

<!-- slider files -->
<link href="sliderCss/owl.carousel.css" rel="stylesheet"/>
<link href="sliderCss/owl.theme.css" rel="stylesheet"/>
<!-- slider files -->



<!--signup content-->
<link rel="stylesheet" href="signStyle.css"/>
	<script type="text/javascript" src="signJS.js"></script>
<!--signup content-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="myJS/common.js"></script>

<style>
    #owl-demo .item{
      margin: 3px;
    }
    #owl-demo .item img{
      display: block;
      width: 100%;
      
    }
    #news_iframe_scroll
    {
    	border: 1px solid #e5e5e5;
    	box-shadow: 0 0 2px 2px #777;
    	min-height: 300px;
    	position: fixed;
    }
    .news_scroll-title
    {
    	background-color: #999;
    	color: #f2f2f2;
    	font-size: 15px;
    	padding: 5px;
    }
    .news_frame
    {
    	height: 530px;
    }
</style>

<style>
#log_btn
{
	font-size: 14px;
	padding-top: 16px;
	padding-bottom: 14px;
	border-radius: 3px;
	padding-left: 5px;
	padding-right: 5px;
	display: block;
	cursor: pointer;
}
#mainWrap_id
{
	display: none;
	position: absolute;
	top: 10px;
	left: 0px;
	width: 100%;
	z-index: 2000;
}
#shadow
{
	display: none;
	position: absolute;
	height: 100%;
	width: 100%;
	z-index: 1500;
	background-color: #777;
	opacity: 0.5;
}
#close
{
	display: none;
	cursor: pointer;
	font-size: 25px;
	color: #555;
	font-weight: bold;
	position: absolute;
	top: 14px;
	left: 1030px;
	z-index: 2500;
}
</style>

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



<div class="gap1">
</div>

<div class="side2">

<!-- SLIDER CONTENT START -->

<!-- slider files -->
<script src="sliderJs/jquery-1.9.1.min.js"></script>
<script src="sliderJs/bootstrap-collapse.js"></script>
    <script src="sliderJs/bootstrap-transition.js"></script>
    <script src="sliderJs/bootstrap-tab.js"></script>
<script src="sliderJs/owl.carousel.js"></script>
    <script src="sliderJs/prettify.js"></script>
	  <script src="sliderJs/application.js"></script>
<!-- slider files -->



<!-- most boosted fests as sliders-->
<?php
	/*			
				$con=mysqli_connect("localhost","root","","festhub");
				$res=mysqli_query($con,"select * from `fest` order by `boost` desc");
				
				while($val=mysqli_fetch_array($res))
			{
			echo"
			
<div id='owl-demo'>
    <div class='item'><a href='fest.php?cata=$val[0]'><img src='$val[12]' height='300'/></a></div>
    </div>
			";
			}*/
?>

<div id="owl-demo">
    <div class="item"><a href='fest.php?cata=3'><img src="sliderImages/1.jpg" height="300"/></a></div>
    <div class="item"><a href='fest.php?cata=6'><img src="sliderImages/2.jpg" height="300"/></a></div>
    <div class="item"><a href='fest.php?cata=4'><img src="sliderImages/3.jpg" height="300"/></a></div>
    <div class="item"><a href='fest.php?cata=1'><img src="sliderImages/4.jpg" height="300"/></a></div>
    <div class="item"><a href='fest.php?cata=5'><img src="sliderImages/5.jpg" height="300"/></a></div>
  </div>
<!--end-->


  <script>


    $(document).ready(function() {
     
      $("#owl-demo").owlCarousel({
     
          autoPlay: 3000, //Set AutoPlay to 3 seconds
     
          items :1,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
     
      });
     
    });


  </script>

<!-- SLIDER CONTENT END -->


<div class="s2cnt1">
Top Fests For You
</div>

<div class="s1cnt5" style="width:100%">



<!--fest listing test with cata start-->
<?php
				$i=0;
				$con=mysqli_connect("localhost","root","","festhub");
				$res=mysqli_query($con,"select *,`fest_priority`+`boost` as 'abhi' from `fest` ORDER BY (`abhi`) desc;");
			while($val=mysqli_fetch_array($res))
			{
				$i++;
				if($i<10)
			
				echo"
				<div style='width:20%; float: left; text-align: center'>
				<img src='$val[12]' width='100px' height='100px'></img>
				</div>
				<div style='width:80%; float: left;'>
				<div class='ques'>
				<h3><a href='fest.php?cata=$val[0]' class='t2ln'><b>$val[1]</b></a></h3>
</div>

<div class='s1cnt5c'>
$val[3]</div></div>
			";
			}
			
?>		
<!-- end-->				





</div>

<!--loop end-->
</div>


<div class="gap2">

</div>

<div class="side3">

<!-- START SCROLLING NEWS WINDOW SAMPLE -->
<div id="news_iframe_scroll">
<div class="news_scroll-title">
News and Updates<br>
</div>
<iframe class="news_frame" name="NewsIFrame" src="news_scroll.php" frameborder="0" scrolling="no"></iframe>
</div>
<!-- END SCROLLING NEWS WINDOW SAMPLE -->

</div>


<div class="clearfix"></div>
</div>

<!--signup content start-->
<?php include 'signUpContent.php'; ?>
<!--signup content end-->

</body>
</html>
