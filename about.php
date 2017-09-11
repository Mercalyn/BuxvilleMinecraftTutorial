<!DOCTYPE html>

<! My code doesnt have bugs, it just develops random features >
<html>
<head>
	<meta name="description" content="Leading the edge of unconventional. Welcome - to the Artisans Republic." />
	<meta name="keywords" content="artisan republic, artisan, atlas,">
	<title>Buxville Interactive Tutorial</title>
	<link rel="stylesheet" type="text/css" href="scripts/print.css">
	<link rel="stylesheet" type="text/css" href="scripts/layout.css">
	<link rel="shortcut icon" href="favicon.ico">
</head>

<! Body onload describes first func, remember to add this as first line:
	$("#printcontainer").hide(); 
	or even delete the print function for production
	>
<body onload="loadScripts()">
<script type="text/javascript" src="scripts/print.js"></script>
<script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="scripts/raphael-min.js"></script>
<script type="text/javascript" src="scripts/btomain.js"></script>
<script type="text/javascript" src="scripts/stage.js"></script>


<! MENU >
<div id="titlebar">
	<div class="menubar">
		
		<! FIRST >
		<a href="/about.php">
			<h2 class="menumember">
				HOME
			</h2>
		</a>
		
		<! SECOND >
		<a href="/index.php">
			<h2 class="menumember">
				BUXTUT
			</h2>
		</a>
		
		<! THIRD >
		<a href="/utility.php">
			<h2 class="menumember">
				UTIL
			</h2>
		</a>
	</div>
	
	
	<! CIRCLES >
	<div id="rotaterone">
		<! empty placeholder >
	</div>
</div>
<! MAIN CONTENT UNDER THIS LINE GOES IN AJAX >



<div id="main">
	<div id="pagecontainer">
		
		<! PAGEINNER IS THE AJAX ELEMENT >
		<div id="pageinner">
			<h1 style="color:white;"><center>About</center></h1>
			<div id="finalinner">
				<p class="about">This site is a test to see if Buxville could use a web-interactive tutorial
				so the newcomers aren't turned away by sign-lag and massive amounts of information.
				</p><p class="about">
				To entice newcomers to stay and play with the tutorial for a little while, there could be a
				"what role suits you best" quiz, which then leads into a multiple choice server rules page.
				Whenever a player gets a rule-question wrong, they are told the correct answer, and the webserver
				will add another question before they finish.
				</p><p class="about">
				If this tutorial works out good, whitelist could be instated again with this webserver telling
				Buxville.net who passed the tutorial(automated whitelist?).
				</p>
			</div>
		</div>
		
		
		
		
	</div>
</div>

<div id="footer">
	<h2 class="footermember" id="terms">
		terms of use
	</h2>
	<h2 class="footermember" id="contact">
		contact me
	</h2>
	<h2 class="footermember" id="site">
		site map
	</h2>
</div>


<! dont put anything below #shadow >
<div id="shadow">
		
</div>

<! MAIN CONTENT TO GO ABOVE THIS DEBUG LINE >
<div id="printcontainer">
	<h1 class="pc"><center>
		terminal
	</center></h1>
	<div id="println">
		
	</div>
</div>

</body>
</html>