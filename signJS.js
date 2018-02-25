    function borderChange(x)
	{
		//var obj = document.getElementById("inp1");
		x.style.boxShadow = "0px 0px 2px 1px red";
	}
	function borderNormal(x)
	{
		x.style.boxShadow = "none";
	}
	function signUp()
	{
		var signObj = document.getElementById("signup");
		var logObj = document.getElementById("login");
		var sign_b1 = document.getElementById("b1_id");
		var log_b2 = document.getElementById("b2_id");
		signObj.style.display = "block";
		logObj.style.display = "none";
		log_b2.style.opacity = "0.5";
		sign_b1.style.opacity = "1";
	}
	function logIn()
	{
		var signObj = document.getElementById("signup");
		var logObj = document.getElementById("login");
		var sign_b1 = document.getElementById("b1_id");
		var log_b2 = document.getElementById("b2_id");
		signObj.style.display = "none";
		logObj.style.display = "block";
		log_b2.style.opacity = "1";
		sign_b1.style.opacity = "0.5";
	}