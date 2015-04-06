<?php
if ( 0 == $isLogined)
	{
		echo '<div class="box">';
		echo '<ul id="Menu">';  
		echo "<p><b> o(╯□╰)o Sorry !!! </b>"; 
		echo "<p><b>Your password or username does not match in this system.</b>"; 
		echo "<p><b>Please go back and try it again. <p>Thank you ~</b>"; 
		echo '</div></ul>';
	}
	else {
		echo '<p> <a href="../afks/index"> Home </a> / <a href="../users/A"> A</a> / <a href="../users/B"> B</a> / <a href="../users/C"> C</a> / <a href="../users/D"> D</a> / <a href="../users/E"> E</a> / <a href="../users/F"> F</a>';
		echo '<h3> Login sucessfully!<br>';
		echo ' O(∩_∩)O Enjoying~~ </h3>';
		 
		//$isLogined ==1;
	/*
		echo '<div class="box">';
		echo '<ul id="Menu">';
		
		echo  '<table width="100%"><tr><th>';


		echo '</div>';	
	*/	
	}
?>