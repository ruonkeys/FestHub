
<div class="outer">
<!--header-->
<div class="container">

<div class="area1">
<a href="readpage.php" style="color:#f5f5f5;text-decoration:none;"><i class="fa fa-home"></i></a>
</div>

<div class="area2">


<!-- making form for search-->

<form method="post" action="fest.php" >
<input type="text" placeholder="    Search here"  name='search' class="search_box" id="search_box_id" onfocus="changeWidth(this)" onblur="widthNormal(this)" />
<button type="submit" id="submitButton" name='ser' class="ask_link">Search</button>
</form>
<!--		<a href="" class="ask_link">Search</a>
 end-->


</div>

<div class="area3">
<ul class="nav nav-pills list">

<li class="events"><a><i class="fa fa-file-text-o"></i> <span class="bar">Fest Type</span><i class="fa fa-angle-down mycaret"></i></a>

	<div class="events_menu">
	  <div><a href="fest.php?cat=Technical Fest">Technical Fests</a></div>
	  <div><a href="fest.php?cat=Cultural Fest">Cultural Fests</a></div>
	  <div><a href="fest.php?cat=Management Fest">Management Fests</a></div>
	  <div><a href="fest.php?cat=Seminar">Seminars</a></div>
	  <div><a href="fest.php?cat=Workshop">Workshops</a></div>
	</div>
</li>

<li class="colleges"><a><i class="fa fa-hand-rock-o"></i> <span class="bar">Colleges</span><i class="fa fa-angle-down mycaret"></i></a>

   <div class="colleges_menu">
  
<?php
  
  $i=0;
		$con=mysqli_connect("localhost","root","","festhub");
		$res=mysqli_query($con,"select *,`col_priority`+`follow` as 'abhi' from `college` ORDER BY (`abhi`) desc;");
			while($val=mysqli_fetch_array($res))
			{
				$i++;
				if($i<6)
			  echo"
					<div><a href='clgprof.php?cat=$val[0]'>$val[1]</a></div>";
		  }
?>
   </div>
</li>

<li><a><i class="fa fa-bell-o"></i> <span class="bar">Notifications</span></a></li>
<!--<li><span id="log_btn" onclick="displayLogin()">LogIn/SignUp</span></li>-->

<li class="account"><a><i class="fa fa-user"></i>
<span class="bar">MyAccount</span><i class="fa fa-angle-down mycaret"></i></a>
   <div class="account_menu">
	<div><a href="ProfilePage.php">View Profile</a></div>
	<div><a href="logout.php">Log Out</a></div> 
	
   </div>
</li>
</ul>
</div>
<div class="clearfix"></div>

</div>
</div>