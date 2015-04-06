<script language=JavaScript>
<!--

function validate_form()
{
	if( false == test_password()) return false;
	if( false == test_repassword()) return false;
	return true;
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
-->
</script>


<?php
	if( 0 == $userCheck){
		echo 'your information was wrong!';
	}
	else
	{
		echo '<form name="form1" action = "../users/updatepassword" method = "POST" onsubmit="return validate_form();" >';
		echo '<div class="box">';
		echo '<ul id="Menu">';
		echo '<h2>MYHeMT Reset Password</h2>';
		echo '<table style="width:60%">';
		echo '<input name="USERS" type="hidden" value="'.$username.'">';
		echo '<tr><th style="text-align:right">New Password:</th><td><input type="password" name="PASSWORD" onblur="test_password()"/><span id="error_password"></span></td></tr>';
		echo '<tr><th style="text-align:right">Re Password:</th><td><input type="password" name="REPASSWORD" onblur="test_repassword()"/><span id="error_repassword"></span></td></tr>';
		echo '<tr><th ></th><td><input type="submit" name="Sign in" value="submit"></td></tr>';
		echo '</table></ul>';
		echo '</form>';
	}
?>