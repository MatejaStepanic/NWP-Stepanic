<?php 
	# Stop Hacking attempt
	define('__APP__', TRUE);
	
	# Start session
    session_start();
	
	# Database connection
	include ("db.php");
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Variables MUST BE STRINGS A-Z
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	
	if (!isset($menu)) { $menu = 1; }
	
	# Classes & Functions
    include_once("functions.php");

print '
<!DOCTYPE html>
<html>
	<head>
		<title>Overwatch</title>		
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
       	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
       	<meta name="description" content="Programiranje web aplikacija">
       	<meta name="keywords" content="overwatch, game">
       	<meta name="author" content="Mateja Stepanic"/>
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 		
	</head>
<body>
	<header>
	<nav>
		<ul>
			 <li><a href="index.php">Home</a></li>
             <li><a href="news.php">News</a></li>
             <li><a href="contact.php">Contact</a></li>
             <li><a href="about-us.php">About</a></li>
             <li><a href="gallery.php">Gallery</a></li>
             <li><a href="signup.php">Sign up</a></li>
             <li><a href="signin.php">Sign in</a></li>
		</ul>
	</nav>

	<div class="background"></div>		
	</header>
	<main>
	
		<figure>
			<img src="img/heroes.jpg" title="heroes">
			<figcaption>Overwatch is set sixty years into the future of a fictionalized Earth, thirty years after the resolution of the "Omnic Crisis". Prior to the Omnic Crisis, humanity had been in a golden age of prosperity and technology development.<figcaption>
		</figure>
	
		<h1>THE WORLD NEEDS HEROES</h1>
		
		
		<p>Soldiers. Scientists. Adventurers. Oddities. </p>
		<p>In a time of global crisis, an international task force of heroes banded together to restore peace to a war-torn world: OVERWATCH.</p>
		<p>Overwatch ended the crisis, and helped maintain peace in the decades that followed, inspiring an era of exploration, innovation, and discovery. But, after many years, Overwatch’s influence waned, and it was eventually disbanded.</p>
		<p>Now, conflict is rising across the world again, and the call has gone out to heroes old and new. Are you with us?</p>
		
		
		<p><a href="http://www.playoverwatch.com">OVERWATCH</a></p>
		
	</main>
	<footer>
		<p><p>&copy; MATEJA STEPANIC <a href="https://github.com/MatejaStepanic/NWP-Stepanic"><img src="img/github.png" title="Github" alt="Github" style="width:20px;height:20px;"></a></p></p>
	</footer>

</body>
</html>
';
?>