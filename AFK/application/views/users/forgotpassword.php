<?php
/*
Forgot Password
*/

echo '<form name="form1" action = "../users/forgetpasswordcheck" method = "POST" >';
echo '<div class="box">';
echo '<ul id="Menu">';
echo '<h2>Get your password back here </h2>';
echo '<table style="width:60%">';
echo '<tr><th style="text-align:right">EmailAddress:</th><td><input type="text" name="USERS" onblur="test_username()"/><span id="error_username"></span></td></tr>';
echo '<tr><th style="text-align:right">Secure Question:</th><td>';
echo securequestionSel("SECUREQUESTION");
echo '</td></tr>';
echo '<tr><th style="text-align:right">Secure Answer:</th><td><input type="text" name="SECUREANSWER" onblur="test_secureanswer()"/><span id="error_securanswer"></span></td></tr>';
echo '<tr><th ></th><td><input type="submit" name="Sign in" value="submit"></td></tr>';
echo '</table></ul>';

echo '</form>';
?>