
<head>	<meta charset="UTF-8">	<title>IPL MEGA CONTEST</title>	<link rel="stylesheet" href="hw1.css"></head> <body>	<header>		<h1>IPL MEGA CONTEST</h1>		<nav>			<a href="https://forms.gle/mczXrjHcqdau1axeA">Dream Team</a>			<a href="https://forms.gle/6smHzV1oLd6g9uyLA">Player Battles</a>			<a href="https://forms.gle/iNTuaGbmmnDQzx57A">Picks</a>			<a href="orangecap.html" target="_blank">Orange cap</a>
	<a href="purplecap.html" target="_blank">purple cap</a>
	<a href="wallet.html" target="_blank">wallet balance</a>
</nav>	</header>		<main><marquee>Sunday 2nd match contest replaced with picks</marquee>	<marquee>Entry fee and playoff rules announced</marquee> <marquee><a href="results.html">RR VS KXIP Match Winner: Achuyth(683pts)</a></marquee>	<!--	<aside class = "left">		<a href="https://commons.wikimedia.org/wiki/File%3AUltimate_Frisbee%2C_Jul_2009_-_17.jpg"><img src="ipl.jpeg" alt="DREAM 11 Photo" title="By Ed Yourdon [CC BY-SA 2.0 (http://creativecommons.org/licenses/by-sa/2.0)], via Wikimedia Commons"/> 			<a href="https://commons.wikimedia.org/wiki/File%3AUltimate_Frisbee_Colorado_Cup_2005.jpg"><img alt="Ultimate Frisbee Colorado Cup 2005" src="DREAM 11/512px-Ultimate_Frisbee_Colorado_Cup_2005.jpg"/></a> 			<a href="https://www.flickr.com/photos/paradisecoastie/15409853738/" title="Ultimate Frisbee"><img src="dream 11" alt="Ultimate Frisbee">  </a>		</aside>		<section class = "right"> 	-->   <h2>Playoffs Rules</h2>	<p>Total 5 contests are conducted dream team, player battles,picks, orange cap, purple cap</p>	<p>The rules for 1st three are known .For orange cap , purple cap the points of every batsman and bowlers in 5 playoff matches will be considered respectively.the player having high pts in batsman will get orange cap and with high bowlers will get purple cap (all rounders are not considered) <!-- <a href = "htpp://http://www.usaultimate.org/index.html">USA Ultimate</a>.</p>	<p>Other than professional tournaments, games of Ultimate are typically played without referess. Instead, players rely on "The Spirit of the Game" to encourage sportsmanship and self-officiating.</p>	<h2>Sources</h2> 	<ul>		<li><a href = "https://en.wikipedia.org/wiki/Ultimate_(sport)">Ultimate (sport)</a></li>		<li><a href = "http://www.wfdf.org/">World Flying Disc Federation</a></li>	</ul>	</section></main></body></html> -->
 	<h2>Managed by harsh securities</h2>
 
 $content = file_get_contents("http://www.cba.am/am/SitePages/Default.aspx");

preg_match('#<b>USD</b>(.*)<em class="w_50">([0-9\.]*)</em><em class="w_50">([0-9\.]*)</em>#Uis', $content, $USDmatch);
preg_match('#<b>EUR</b>(.*)<em class="w_50">([0-9\.]*)</em><em class="w_50">([0-9\.]*)</em>#Uis', $content, $EURmatch);
preg_match('#<b>GBP</b>(.*)<em class="w_50">([0-9\.]*)</em><em class="w_50">([0-9\.]*)</em>#Uis', $content, $GBPmatch);

$eur = $EURmatch[3];
$usd = $USDmatch[3];
$gbp = $GBPmatch[3];

echo "EUR: $eur USD: $usd GBP: $gbp";

 
 <!--This is comment-->
