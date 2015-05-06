<?php
/* User page5 */

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
<h1>Christmas Tree Butterfly with Calls</h1>
    
<h2>The Strategy</h2>
<p>
You can think of this strategy as simultaneously buying one long call spread with strikes A and C and selling two short call spreads with strikes C and D. Because the long call spread skips over strike B, the distance between its strikes will be twice as wide as the strikes in the short call spread. In other words, if the width from strike A to strike C is 5.00, the width from strike C to strike D will be 2.50.

Whereas a traditional long call butterfly is often used as a neutral strategy, this strategy is usually run with a slightly bullish directional bias. To reach the sweet spot, the stock price needs to increase a bit.

Selling two short call spreads with half the width of the long call spread usually makes this strategy less expensive to run than a traditional butterfly with calls. The tradeoff is that you're taking on more risk than you would with a traditional butterfly. If the stock continues to rise above strike C, your profit will decline at an accelerated rate and the trade could become a loser fairly quickly. That's because you're short two call spreads, and there's half as much distance between strike C and strike D (short spreads) as there is between strike A and strike C (long spread).

Ideally, you want the options at strike C and D to expire worthless, while retaining maximum value for the long call at strike A.</p>

<h2>Maximum Potential Profit</h2>

<p>Potential profit is limited to strike C minus strike A minus the net debit paid.</p>

<h2>Maximum Potential Loss</h2>

<p>Risk is limited to the net debit paid.</p>

<h2>Break-even at Expiration</h2>

<p>
There are two break-even points for this strategy:

Strike A plus the net debit paid
Strike D minus one-half of the net debit paid
</p>

<h2>TradeKing Margin Requirements</h2>

<p>After the trade is paid for, no additional margin is required.</p>

<h2>As Time Goes By</h2>
<p>
For this strategy, time decay is your friend. Ideally, you want all of the options except the call with strike A to expire worthless.</p>

<h2>Implied Volatility</h2>
<p>
After the strategy is established, the effect of implied volatility depends on where the stock is relative to your strike prices.

If the stock is at or near strike C, you want volatility to decrease. Your main concern is the three options you sold. A decrease in implied volatility will cause those near-the-money options to decrease in value, thereby increasing the overall value of the butterfly. In addition, you want the stock price to remain stable around strike C, and a decrease in implied volatility suggests that may be the case.

If the stock price is approaching or outside strike A or D, in general you want volatility to increase. An increase in volatility will increase the value of the option you own at the near-the-money strike, while having less effect on the short options at strike C.</p> 
</div>

<img src="https://www.tradeking.com/sites/default/files/xmas_tree_calls_big.png">
	
  </body>
</html>