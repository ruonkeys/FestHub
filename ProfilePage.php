<!--to constraint user to login first start-->

<?php
session_start();
//$upass=$_SESSION["pass"];
if(isset($_SESSION["user"]))
{
	$uid=$_SESSION["user"];
}
else
{
	header('location: signUpLogin.php');
	//exit();
}

?>
<!-- end -->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile page</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="myCSS/MenuBar.css" />
<link rel="stylesheet" type="text/css" href="myCSS/profilePageDsgn.css" />
<script src="myJS/common.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

<!--signup content-->
<link rel="stylesheet" href="signStyle.css"/>
	<script type="text/javascript" src="signJS.js"></script>
<!--signup content-->

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

<div class="side1" onclick="displayUploadHide()">
<div class="inner1">


<!-- personal details listing start-->
<?php
			
			$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `user_detail` where `user_id`='$uid'");
			
			while($val=mysqli_fetch_array($res))
		{
		echo"
<div style='float:left'><img src='$val[7]' alt='' class='profile_pic' onmouseover='displayUploadShow()'/></div>
<div class='user_name' style='float:left'>

<b style='font-size:28px;' class='my_name'>$val[1] $val[2]</b><!--<a href='#' class='edit_link link_hover'>Edit</a>--><br/><br/>

<div class='details'>
	$val[5]
</div>
<div class='details'>
    $val[6]
</div>
";
		}
		?>

<!--end-->

</div>
</div>

<div class="upload_image" id="upload_image_id"><i class="fa fa-camera camera_icon"></i></div>

<div>

<div class="exlft">

<?php
$conn = mysqli_connect("localhost","root","","festhub") or die();
$username = $_SESSION['email'];//here fetch username using session
$sql  = "select interests,ids from user_detail where email='$username' limit 1";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
$interests_rslt = $row['interests'];
$interests = explode(",",$interests_rslt);
$ids = explode(",", $row['ids']);
// print_r($interests);

$sql = "select * from interests limit 1";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($query);
$all = $row[1];
$all_interests = explode(",",$all);
$all_ids = explode(",", $row[2]);
$length = count($interests);
// $selected = array();
// $unselected = array();
for($i=0;$i<$length;$i++)
{
	if(in_array($interests[$i],$all_interests))
	{
		// array_push($selected, $all_interests[$i]);
		$key = array_search($interests[$i], $all_interests);
		// unset($all_interests[$key]);
		// unset($all_ids[$key]);
		$all_interests[$key] = null;
		$all_ids[$key] = null;
		// echo "in if block of check";
	}
	// else
	// {
	// 	echo "in else block of check";
	// }
}

/////////////////////choices layout/////////////////////////////
$choice_layout = "";
$len = count($all_interests);
for($j=0;$j<$len;$j++)
{
	if($all_ids[$j] != null)
	{
	$choice_layout .= "<li id='li_$all_ids[$j]'><input type='checkbox' onclick='insertChoice($all_ids[$j]); displaySaveBtn(\"save_btn_id\");'/>&nbsp;<span id='$all_ids[$j]'>$all_interests[$j]</span></li>";
	}
}

////////////////////////selected choices layout/////////////////////
$selected_choices = "";
// print_r($interests);
$length = count($interests);
for($i=0;$i<$length;$i++)
{
	if($interests[0] != "")
	{
	$selected_choices .= "<span id='btn_$ids[$i]' class='my_choice_btn'><span id='cnt_$ids[$i]' style='position: relative;'>$interests[$i]</span>&nbsp;<i class='fa fa-close cross' style='cursor:pointer;' onclick='normalList($ids[$i]); displaySaveBtn(\"save_btn_id\");'></i></span>";
	$selected_choices .= "<span id='not_chosen'></span>";
    }
    else
    {
    	$selected_choices = "<div id='not_chosen'>You have not chosen anything yet</div>";
    }
}

?>

<div class="feed">
Select Interests
</div>

<ul id="all">
<?php echo $choice_layout; ?>
<!--<li id="li_ch2"><input type="checkbox" onclick="insertChoice('ch2'); displaySaveBtn();" /><span id="ch2"> Writing</span></li>
<li id="li_ch3"><input type="checkbox" onclick="insertChoice('ch3'); displaySaveBtn();" /><span id="ch3"> Coding</span></li>
<li id="li_ch4"><input type="checkbox" onclick="insertChoice('ch4'); displaySaveBtn();" /><span id="ch4"> Debate</span></li>
<li id="li_ch5"><input type="checkbox" onclick="insertChoice('ch5'); displaySaveBtn();" /><span id="ch5"> Robocon</span></li>
<li id="li_ch6"><input type="checkbox" onclick="insertChoice('ch6'); displaySaveBtn();" /><span id="ch6"> Singing</span></li>
<li id="li_ch7"><input type="checkbox" onclick="insertChoice('ch7'); displaySaveBtn();" /><span id="ch7"> Dancing</span></li>
<li id="li_ch8"><input type="checkbox" onclick="insertChoice('ch8'); displaySaveBtn();" /><span id="ch8"> Technical Symposium</span></li>
<li id="li_ch9"><input type="checkbox" onclick="insertChoice('ch9'); displaySaveBtn();" /><span id="ch9"> Treasure Hunt</span></li>
<li id="li_ch10"><input type="checkbox" onclick="insertChoice('ch10'); displaySaveBtn();"/><span id="ch10"> Nukkad Natak</span></li>
<li id="li_ch11"><input type="checkbox" onclick="insertChoice('ch11'); displaySaveBtn();" /><span id="ch11"> Junkyards</span></li>-->
</ul>

</div>

<div class="mid">
</div>

<div class="exrt">

<div class="feed">
Your Selected Interests
<button class="save_btn btn btn-primary" id="save_btn_id" onclick="insertDb()">Save your choices</button>
</div>

<div id="choices">
<?php echo $selected_choices; ?>
</div>
<script>
var arr = [];
<?php
for($i=0;$i<count($ids);$i++)
{
?>
	arr.push(<?php echo $ids[$i]; ?>);
<?php	
}
?>
console.log(arr);
function insertChoice(ele)
{
	var allList = document.getElementById("all");
	var listCntnt = document.getElementById(ele);
	var objList = document.getElementById("li_"+ele);
	var dv = document.getElementById("choices");
	var btn = document.createElement("span");
	btn.style.backgroundColor = "#e4e4e4";
	btn.style.display = "block";
	btn.style.width = "110px";
	btn.style.float = "left";
	btn.style.borderRadius = "30px";
	btn.style.paddingLeft = "20px";
	btn.style.paddingRight = "20px";
	btn.style.paddingTop = "10px";
	btn.style.paddingBottom = "10px";
	btn.style.marginRight = "15px";
	btn.style.marginTop = "20px";
	btn.style.boxSizing = "content-box";
	var listCurrentHTML = listCntnt.innerHTML;
	btn.innerHTML ="<span id='cnt_"+ele+"' style='position: relative;'>"+listCurrentHTML+"</span>"+" "+"<i class='fa fa-close cross' style='cursor:pointer;' onclick='normalList("+ele+"); displaySaveBtn(\"save_btn_id\")'></i>";
	btn.setAttribute("id","btn_"+ele);
	dv.appendChild(btn);
	allList.removeChild(objList);
	arr.push(ele);
	console.log("insert choice");
	console.log(arr);
	document.getElementById("not_chosen").style.display = "none";
}
function normalList(ele)
{
	var allList = document.getElementById("all");
	var dv = document.getElementById("choices");
	var btnToRemove = document.getElementById("btn_"+ele);
	var btnCntnt = document.getElementById("cnt_"+ele).innerHTML;
	var listItem = document.createElement("li");
	var listItemCntnt = "<input type='checkbox' onclick='insertChoice("+ele+"); displaySaveBtn(\"save_btn_id\")'/>&nbsp;<span id="+ele+">"+btnCntnt+"</span>";
	listItem.innerHTML = listItemCntnt;
	listItem.setAttribute("id","li_"+ele);
	allList.appendChild(listItem);
	dv.removeChild(btnToRemove);
	if(arr.indexOf(ele)>=0)
	{
		var index = arr.indexOf(ele);
		delete arr[index];
		console.log("index "+index);	
	}
	
	// arr = arr.map(function(item){
	// 	if(item != ele)
	// 	{
	// 		return item;
	// 	}
	// });
	console.log("normal list");
	console.log(arr);
}
function displaySaveBtn(x)
{
	var btn = document.getElementById(x);
	// alert(btn.style.display);
	// if(btn.style.display == "none")
	// {
	// 	btn.style.display = "block";
	// }
	//alert(btn.style.display.value);
	btn.style.display = "block";
}
function displayUploadShow()
{
	document.getElementById("upload_image_id").style.display = "block";
}
function displayUploadHide()
{
	document.getElementById("upload_image_id").style.display = "none";
}
function insertDb()
{
	var i;
	var cntn_id;
	var l = arr.length;
	var interestId = [];
	var userInterests = [];
	var count = 0;
	for(i=0; i<l; i++)
	{
		cntn_id = arr[i];
		if(cntn_id != undefined)
		{
			count++;
			userInterests.push(document.getElementById("cnt_"+arr[i]).innerHTML); 
			interestId.push(cntn_id);
		}
	}

	var ajx = new XMLHttpRequest();
	ajx.open("POST", "insertInterests.php", true);
	ajx.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajx.onreadystatechange = function()
	{
		if(ajx.readyState==4 && ajx.status==200)
		{
			if(ajx.responseText == "success")
			{
				alert("Your choices has been saved successfully");
				document.getElementById('save_btn_id').style.display = "none";
				if(count == 0)
				{
					document.getElementById("not_chosen").style.display = "block";
				}
			}
			else
			{
				alert("problem while interacting with database");
			}
		}
	}
	ajx.send("interests="+userInterests+"&ids="+interestId);
}
</script>

</div>


</div>

</div>

<div class="side3">
RaAy
</div>

<div class="side2">

<div class="ans">
Your Profile Status
</div>

<div class="progress my_prog">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
  </div>
</div>

<div class="about">
You are following:
</div>


<!-- followed colleges listing start-->
<?php
			
			$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `follow` where `user_id`='$uid'");
			
			while($val=mysqli_fetch_array($res))
		{
			
			$res1=mysqli_query($con,"select * from `college` where `col_id`='$val[1]'");
		
		while($val1=mysqli_fetch_array($res1))
		{
			
		echo"

<ul class='follows'>
	<li><a href='clgprof.php?cat=$val1[0]'>$val1[1]</a></li>
</ul>
";
		}
		}
		?>
</div>

</div>

<!--add sign up content here-->

<!--signup content start-->
<?php include 'signUpContent.php'; ?>
<!--signup content end-->


</body>
</html>
