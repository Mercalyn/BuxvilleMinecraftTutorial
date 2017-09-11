<!DOCTYPE html>

<! My code doesnt have bugs, it just develops random features >
<html>
<head>
	<meta name="description" content="Buxville's number one(and only) interactive tutorial." />
	<meta name="keywords" content="bux, buxville, buxville tutorial, buxville interactive tutorial, buxtutonline, buxtut">
	<meta name="author" content="Mercalyn">
	<meta charset="UTF-8">
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
<script type="text/javascript" src="scripts/jquery-ui-1.10.3.custom.min.js"></script>

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
<! MAIN CONTENT UNDER THIS LINE GOES IN AJAX - #PAGECONTAINER STAYS >



<div id="main">
	<div id="pagecontainer">
	
	<div id="pageinner">
	</div>
	
	<div id="pageinnersecond">
	</div>
	
	<! END AJAX >
	<div id="pagesideleft">
		<div class="pageleftin">
		</div>
		<div class="pageleftout">
		</div>
	</div>
	<div id="pagesideright">
		<div class="pagerightin">
		</div>
		<div class="pagerightout">
		</div>
	</div>
			
	
	</div>
	
	<div id="error">
		
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