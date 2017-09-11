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
		<a href="index.php">
			<h2 class="menumember">
				HOME
			</h2>
		</a>
		
		<! SECOND >
		<a href="index.php">
			<h2 class="menumember">
				BUXTUT
			</h2>
		</a>
		
		<! THIRD >
		<a href="utility.php">
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
			<h1 style="color:white;"><center>Utilities</center></h1>
			<div id="finalinner">
				<p class="about">
				Even if the interactive tutorial is a blunder, this section could still be useful to existing players.
				Utilities from, "How much have I donated?", asking questions about DW/isle size to determine your
				donation amount, to displaying the server time and if you have SQs needing done.  
				</p><p class="about">
				I would plan on making this section more like a virtual desktop, with virtual windows
				that pop into existence, making things like comparing two players pretty easy.
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