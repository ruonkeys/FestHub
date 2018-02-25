    function displayLogin()
	{
		var myObj = document.getElementById("mainWrap_id");
		var back = document.getElementById("shadow");
		var closeObj = document.getElementById("close");
		back.style.display = "block";
		closeObj.style.display = "block";
		myObj.style.display = "block";
	}
	function hideLogin()
	{
		var myObj = document.getElementById("mainWrap_id");
		var back = document.getElementById("shadow");
		var closeObj = document.getElementById("close");
		back.style.display = "none";
		closeObj.style.display = "none";
		myObj.style.display = "none";
	}
	function changeWidth(x)
	{
		 x.style.width = "350px";
	}
	function widthNormal(x)
	{
		x.style.width = "200px";
	}