<?php
/* Author page*/
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
               <li><a href='#'>ReadMe</a></li>
               <li><a href='#'>Complete tasks</a></li>
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
		echo "<div id='Team'>";
		echo "<h1> Authors </h1>";
		echo "</div>";
		echo "<div id='Title'>";
		echo "<h2>Team Memebers:</h2>";
		echo "<h2>Task Allocation:</h2>";
		echo "</div>";
		echo "<div id='JQ'>";
		echo "<h2> Jingqi Hu </h2>";
		echo "<h2> Front-End-Dev </h2>";
		echo "<img src='http://2.im.guokr.com/MdSyQfE6hMNQLDNbJiTrw6V5GxQbVyHSRuAxve6Zn5heAQAA0wAAAEdJ.gif'/>";	
		echo "</div>";	
		echo "<div id='ZL'>";
		echo "<h2> Zhang Li </h2>";
		echo "<h2> Back-End-Dev </h2>";
		echo "<img src='http://mmbiz.qpic.cn/mmbiz/Cnq2VollRqBAXrPTUlgLaiazeNmsIJIaOmQFv4PjSu8jnLZdx0ZIbviaWrttToAANKov4DlJU6jvS9wMLEXHIbnQ/0/mmbizgif'/>";	
		echo "</div>";

?>
