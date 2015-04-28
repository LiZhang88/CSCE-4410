<?php
/* Page Header */

//check if session start
if (isset($_SESSION["isLogined"])) {
	// if start do nothing, else set to 0
}
  else {
   $_SESSION["isLogined"] = 0;
}


  echo '<head>';
  echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
  echo "<title>$title</title>";
  echo '<meta http-equiv="X-UA-Compatible" content="IE=6" />';
  echo '<link rel="stylesheet"'. ' href="' .CSSDIR . $cssfile. '" />';
  echo '</head>';
  
  // vister
  if ($_SESSION['isLogined']==0) {
	echo '<body>';
	echo '<div id="Top" class="box">';
	echo  "<h1>$title</h1>"; 
  // User login 
	echo '<p>  <a href="../users/logpage">Log in</a> ';
	echo '</div>';
  }
  
    // user
  else { 
	echo '<body>';
	echo '<div id="Top" class="box">';
	echo  "<h1>$title</h1>"; 
  // User logout
	echo ' <p> <a href="../users/logout">Log out</a> /（ Hello, <b> '.$_SESSION['username'].'</b> ）';
	echo '</div>';
  }	
?>


