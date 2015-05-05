<?php
/* User page2 */

 // Navigation Bar
		echo '<div id="userbar1" >';	
		//echo '<a href="../users/usershome"> Home<br> </a>  <a href="../users/A"> A<br> </a>  <a href="../users/B"> B<br> </a> <a href="../users/C"> C<br> </a>  <a href="../users/D"> D<br> </a>  <a href="../users/E"> E<br> </a>  <a href="../users/F"> F<br> </a>';
		echo '</div>';	
		echo '<div id="userbar2" >';	
		//echo '<a href="../users/usershome"> Home<br> </a>  <a href="../users/A"> A<br> </a>  <a href="../users/B"> B<br> </a> <a href="../users/C"> C<br> </a>  <a href="../users/D"> D<br> </a>  <a href="../users/E"> E<br> </a>  <a href="../users/F"> F<br> </a>';
		echo '</div>';	
		
?>

<html>
  <head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>User Menu</title>
</head>
<body>

<div id='Umenu'>
	<ul>
	   <li class='active'><a href='../users/usershome'><span>Home</span></a></li>
	   
	   <li class='has-sub'><a href='#'><span>Basic Strategy ▼</span> <b class="caret"></b> </a>
		  <ul>
			 <li><a href='../users/A'><span>Short Call Spread</span></a></li>
			 <li class='last'><a href='../users/B'><span>Long Put Spread</span></a></li>
		  </ul>
	   </li>
	   
	   <li class='has-sub'><a href='#'><span>Advanced Strategy ▼</span> <b class="caret"></b> </a>
		  <ul>
			 <li><a href='../users/C'><span>Skip Strike Butterfly with Calls</span></a></li>
			 <li><a href='../users/D'><span>Back Spread with Calls</span></a></li>
			 <li class='last'><a href='../users/E'><span>Christmas Tree Butterfly with Calls</span></a></li>
		  </ul>
	   </li>
	   
	   <li class='last'><a href='../afks/index'><span>View visitor pages</span></a></li>
	</ul>
	</div>
    
  </body>
</html>