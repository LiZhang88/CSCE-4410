<?php
/* 
 ReadMe
 Jingqi Hu
 */
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

	<div id="ReadMe1">
	<h1>Jingqi's ReadMe </h1>
	<p>	<br><br><br>
		I used XAMPP. <br>
		It is installed in my drive C. <br>
		MyphpAdmin Account: <br>
		username: root <br>
		password: CS4410
	</p>
	</div>
	
	<div id="ReadME2">
	<h2>Steps: </h2>
	<p> 1. Put AFK file to direction <br>
&nbsp;&nbsp;→ XAMPP → htdocs <br>
		2. Open XAMPP Control Panel <br>
&nbsp;&nbsp;-  Start Apache <br>
&nbsp;&nbsp;-  Start MySQL <br>
		3. Open localhost/phpmyadmin <br>
&nbsp;&nbsp;-  Import the database file afk.sql <br>
		( Direction: AFK → database → afk.sql ) <br>
		4. Once import successful! <br>
&nbsp;&nbsp;-  Go to the next step <br>
		5. Open the browser ( I used Google Chrome ) <br>
&nbsp;&nbsp;-  type the Homepage address <br>
		( http://localhost/afk/afks/index ) <br>
		6. Have Fun :D <br><br>
		
		<a href=" http://66.175.223.240:8080/afks/index" target="_blank" >Online Version Available ~ </a>&nbsp;&nbsp; http://66.175.223.240:8080/afks/index
	</p>
	</div>
	
  </body>
</html>


