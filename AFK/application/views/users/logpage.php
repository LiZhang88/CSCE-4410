<?php
/*log In page  */

	echo '<form action = "../users/login" method = "POST" >';
	echo '<div class="box">';
	echo '<ul id="Menu">';
	
	//Log
	echo  '<h2>';	
	echo  ' Log In';
	echo  '</h2>';
	echo  '<table style="width:60%"><tr><th style="text-align:right">';
	
	//username:
	echo  'Username';
	echo  '</th><td><input type="text" name="USERS"/></td></tr><tr><th style="text-align:right">';
	
	//Password:	
	echo  'Password';
	echo  '</th><td><input type="password" name="PASSWORD"/></td></tr></table>';
	
	//Submit button
	echo  '<table  style="width:60%"><tr><th width="44%"></th><td width="58%" ><input type="submit" name="Sign in" value="Log in">';
	
	//Registration & Forgotpassword
	echo '</td></tr><tr><td colspan="2">';
	echo '<br/>New User? Please <a href="../users/logon">Registration</a><br/>';
	echo '<br/> ::(>﹏<):: <a href="../users/forgotpassword">Forgot password?</a><br/>';
	echo '</td></tr> </table></ul>';
	
	echo '</form>';
	echo '</div>';
	
	//echo <div col-xs-6>
	//echo "<img src='https://s-media-cache-ak0.pinimg.com/originals/cb/e5/21/cbe521053dd19a5aa3994d8ddd01ffb5.jpg' />";
	//echo </div>
?>