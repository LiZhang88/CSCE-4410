<?php
/* Home page */
 // Navigation Bar
?>
 
<html>
  <head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Visitor Menu</title>
</head>
<body>

<div id='Vmenu'>
<ul>
   <li><a href='../afks/index'>Home</a></li>
   <li class='active has-sub'><a href='../afks/A'>Individual task description</a>
      <ul>
         <li class='has-sub'><a href='#'>Jinqqi Hu </a>
            <ul>
               <li><a href='../afks/C'>ReadMe</a></li>
               <li><a href='../afks/D'>Complete tasks</a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'>Zhang Li </a>
            <ul>
               <li><a href='#'>ReadMe</a></li>
               <li><a href='#'>Complete tasks</a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='../afks/B'>About</a></li>
</ul>
</div>
    
  </body>
</html>

<?php		
		echo "<h1>Sweet Home! </h1>";
		
		echo "<img src='http://www.hdwallshub.com/files/submissions/One_piece_ace_hd_wallpaper_1891642713.jpg'/>";	
?>
