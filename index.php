<?php
	
	// loading dependencies
	require_once("include/login_check.php");
	require_once("include/check_permissions.php");
	require_once("include/header.php");
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo APP_TITLE; ?></title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php echo $header; ?>

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