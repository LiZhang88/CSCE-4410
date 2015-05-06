<script language=JavaScript>
<!--

/* Form Check */
function validate_form()
{
	if( false == test_username()) return false;
	if( false == test_password()) return false;
	if( false == test_repassword()) return false;
	if( false == test_secureanswer()) return false;
	return true;
}

function test_username(){ 
	var data=document.form1.USERS.value;
	if(data.length==0)
	{
		document.getElementById("error_username").innerHTML="Not empty!";
		return false
	}
	else
	{
		apos=data.indexOf("@")
		dotpos=data.lastIndexOf(".")
		if (apos<1||dotpos-apos<2) 
		{
			document.getElementById("error_username").innerHTML="Not valid!";
		  return false
		}
		else 
		{
			document.getElementById("error_username").innerHTML="Correct";
			return true
		}
	} 
}

function test_password(){
	var data=document.form1.PASSWORD.value;
	if(data.length < 6)
	{
		document.getElementById("error_password").innerHTML="Less 6!";
		return false
	}
	else
	{
		document.getElementById("error_password").innerHTML="Correct";
		return true
	}
}

function test_repassword(){
	var data=document.form1.PASSWORD.value;
	var data2=document.form1.REPASSWORD.value;
	if(data2.length < 6)
	{
		document.getElementById("error_repassword").innerHTML="Less 6!";
		return false
	}
	if(data != data2)
	{
		document.getElementById("error_repassword").innerHTML="Not equal";
		return false
	}
	else
	{
		document.getElementById("error_repassword").innerHTML="Correct";
		return true
	}
}

function test_secureanswer(){
	var data=document.form1.SECUREANSWER.value;
	if(data.length == 0)
	{
		document.getElementById("error_securanswer").innerHTML="Not empty!";
		return false
	}
	else
	{
		document.getElementById("error_securanswer").innerHTML="Correct";
		return true
	}
}

function test_code(){
}


//Click to change  the Random picture
function chgVerify(srcValue)
{
	document.getElementById('verifyImg').src=srcValue;
}


-->
</script>


<?php
/*  Register page (front)*/

echo '<form name="form1" action = "../users/regcheck" method = "POST" onsubmit="return validate_form();" >';
echo '<div class="box">';
echo '<ul id="Menu">';
echo '<h2> Register Here </h2>';
echo '<table style="width:60%">';
echo '<tr><th style="text-align:right">EmailAddress:</th><td><input type="text" name="USERS" onblur="test_username()"/><span id="error_username"></span></td></tr>';
echo '<tr><th style="text-align:right">Password:</th><td><input type="password" name="PASSWORD" onblur="test_password()"/><span id="error_password"></span></td></tr>';
echo '<tr><th style="text-align:right">Re Password:</th><td><input type="password" name="REPASSWORD" onblur="test_repassword()"/><span id="error_repassword"></span></td></tr>';
echo '<tr><th style="text-align:right">Secure Question:</th><td>';
echo securequestionSel("SECUREQUESTION");
echo '</td></tr>';
echo '<tr><th style="text-align:right">Secure Answer:</th><td><input type="text" name="SECUREANSWER" onblur="test_secureanswer()"/><span id="error_securanswer"></span></td></tr>';
echo '<tr><th style="text-align:right">verification Code:</th><td><input type="text" name="VCODE" onblur="test_code()"/>
			<img id="verifyImg" style="vertical-align:middle;" src="' . CSSDIR . 'randomPic.php" onclick="chgVerify(this.src)"></img><span id="error_code"></span></td></tr>';
echo '<tr><th ></th><td><input type="submit" name="Sign in" value="Log in"></td></tr>';
echo '</table></ul>';
echo '</form>';
?>


