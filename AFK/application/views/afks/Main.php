<script language=JavaScript>
<!--
function startTimer(duration, display) {
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
        diff = duration - (((Date.now() - start) / 1000) | 0);

        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = seconds; 

        if (diff <= 0) {
           // starts at the full duration
            start = Date.now() + 1000;
        }
    };
    timer();
    setInterval(timer, 1000);
}

window.onload = function () {
    var loadingtime = 10 * 1,
        display = document.querySelector('#time');
		startTimer(loadingtime, display);
};

-->
</script>


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
		$url = "http://localhost/afk/users/usershome"; 
	}	
?>   

<!-- Refresh to new page / Go to URL in 10 second (counting down)-->
<html>     
<head>     
<meta http-equiv="refresh" content="10;url=<?php echo $url; ?>">     
</head>     
<body>
<h1>Login sucessfully! </h1>
<div id="load">
<img src='http://i.zeze.com/attachment/forum/201503/13/204338nwojz6flvyptlmqz.gif'/>
</div> 
<h1>Loading ...... </h1>  
<div>Time Left: 
<span id="time"></span> 
seconds!</div>
</body>  
</html>	
