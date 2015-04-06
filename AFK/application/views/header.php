<?php
/* Page Header */

//session_start();
//$_SESSION["isLogined"] = 0;

/*
   $state = '';

if (isset($_SESSION["isLogined"])) {
  $state = $_SESSION["isLogined"]; 
}
  else {
   $state = 1;
   $_SESSION["isLogined"] = $state;
}
*/

  echo '<head>';
  echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
  echo "<title>$title</title>";
  echo '<meta http-equiv="X-UA-Compatible" content="IE=6" />';
  echo '<link rel="stylesheet"'. ' href="' .CSSDIR . $cssfile. '" />';
  echo '</head>';
  
  // vister
  if ($isLogined==0) {
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
	echo  /* <p> <a href="../afks/index"> Home </a> / */' <p> <a href="../users/logout">Log out</a> /（ Hello, <b> '.$USERS.'</b> ）';
	echo '</div>';
  }
  	//echo '<p> <a href="../afks/index"> Home </a> / <a href="../users/A"> A</a> / <a href="../users/B"> B</a> / <a href="../users/C"> C</a> / <a href="../users/D"> D</a> / <a href="../users/E"> E</a> / <a href="../users/F"> F</a>';
		
?>


