<?php
/* User page1 */

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

<div id='A'>
<h1>Short Call Spread</h1>
    
<h2>The Strategy</h2>
<p>
A short call spread obligates you to sell the stock at strike price A if the option is assigned but gives you the right to buy stock at strike price B.

A short call spread is an alternative to the short call. In addition to selling a call with strike A, you’re buying the cheaper call with strike B to limit your risk if the stock goes up. But there’s a tradeoff — buying the call also reduces the net credit received when running the strategy.
</p>

<h2>Maximum Potential Profit</h2>

<p>Potential profit is limited to the net credit received when opening the position.</p>

<h2>Maximum Potential Loss</h2>

<p>Risk is limited to the difference between strike A and strike B, minus the net credit received.</p>

<h2>Break-even at Expiration</h2>

<p>Strike A plus the net credit received when opening the position.</p>

<h2>TradeKing Margin Requirements</h2>

<p>Margin requirement is the difference between the strike prices.</p>

<h2>As Time Goes By</h2>
<p>
For this strategy, the net effect of time decay is somewhat positive. It will erode the value of the option you sold (good) but it will also erode the value of the option you bought (bad).
</p>
<h2>Implied Volatility</h2>
<p>
After the strategy is established, the effect of implied volatility depends on where the stock is relative to your strike prices.

If your forecast was correct and the stock price is approaching or below strike A, you want implied volatility to decrease. That’s because it will decrease the value of both options, and ideally you want them to expire worthless.

If your forecast was incorrect and the stock price is approaching or above strike B, you want implied volatility to increase for two reasons. First, it will increase the value of the near-the-money option you bought faster than the in-the-money option you sold, thereby decreasing the overall value of the spread. Second, it reflects an increased probability of a price swing (which will hopefully be to the downside).
</p> 
</div>

<img src="https://www.tradeking.com/sites/default/files/short_call_spread_big.png">	

  </body>
</html>