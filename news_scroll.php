<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>News</title>

<base target="_parent">

<link rel="stylesheet" href="css/news_scroll.css" type="text/css">

</head>

<body class="news-scroll" onMouseover="scrollspeed=0" onMouseout="scrollspeed=current" OnLoad="NewsScrollStart();">


<!-- START NEWS FEED -->
<div id="NewsDiv">
<div class="scroll-text-if">

<!-- SCROLLER CONTENT STARTS HERE -->


<?php
  
		$con=mysqli_connect("localhost","root","","festhub");
		$res=mysqli_query($con,"select *,`col_priority`+`follow` as 'abhi' from `college` ORDER BY (`abhi`) desc;");
			while($val=mysqli_fetch_array($res))
			{
				$cid=$val[0];
				$res1=mysqli_query($con,"select * from `fest` where `col_id`='$cid';");
			  
			  while($val1=mysqli_fetch_array($res1))
			{
				echo"
<span class='scroll-title-if'>
<img src='$val1[12]'></img><br>
</span>
<a href='fest.php?cata=$val1[0]'><h1>$val1[1]</h1></a>

$val1[3]

<br><br>";
			}

		  }
?>



<!-- END SCROLLER CONTENT -->

</div>
</div>
<!-- END NEWS FEED -->




<!-- YOU DO NOT NEED TO EDIT BELOW THIS LINE -->

<script type="text/javascript">


var startdelay 		= 2; 		// START SCROLLING DELAY IN SECONDS
var scrollspeed		= 1.1;		// ADJUST SCROLL SPEED
var scrollwind		= 1;		// FRAME START ADJUST
var speedjump		= 30;		// ADJUST SCROLL JUMPING = RANGE 20 TO 40
var nextdelay		= 0; 		// SECOND SCROLL DELAY IN SECONDS 0 = QUICKEST
var topspace		= "2px";	// TOP SPACING FIRST TIME SCROLLING
var frameheight		= 176;		// IF YOU RESIZE THE CSS HEIGHT, EDIT THIS HEIGHT TO MATCH


current = (scrollspeed);


function HeightData(){
AreaHeight=dataobj.offsetHeight
if (AreaHeight===0){
setTimeout("HeightData()",( startdelay * 1000 ))
}
else {
ScrollNewsDiv()
}}

function NewsScrollStart(){
dataobj=document.all? document.all.NewsDiv : document.getElementById("NewsDiv")
dataobj.style.top=topspace
setTimeout("HeightData()",( startdelay * 1000 ))
}

function ScrollNewsDiv(){
dataobj.style.top=scrollwind+'px';
scrollwind-=scrollspeed;
if (parseInt(dataobj.style.top)<AreaHeight*(-1)) {
dataobj.style.top=frameheight+'px';
scrollwind=frameheight;
setTimeout("ScrollNewsDiv()",( nextdelay * 1000 ))
}
else {
setTimeout("ScrollNewsDiv()",speedjump)
}}


</script>


</body>
</html>
