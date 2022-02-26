<?php

require_once("include/login_check.php");
require_once("include/header.php");
require_once("include/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>News</title>
	<link rel="stylesheet" href="style.css">
</head>
	<main>
	<body>
	<?php echo $header; ?>
		<div class="news">
		<h1>BLIZZCON SALE: GET OVERWATCH® FOR $14.99</h1>
		<hr>
		<img src="img/sale.jpg" title="sale" style="width:800px;height:400px;margin-left:15px;margin-right:15px;" align="left">
		<p>Becoming an Overwatch® agent is easier than ever! Join the fight for the future with Overwatch® on PC available at $14.99 now through November 3rd!
			Overwatch® for PC includes 31 heroes, 28 different maps, and endless fun for just $14.99.
			Overwatch® Legendary Edition comes fully loaded along with 5 origin, 5 legendary, and 5 epic skins on PC for $19.99.</p>
		<p>The action is at an all-time high with our newest hero: Sigma. Gravitate into battle as an eccentric astrophysicist equipped with mysterious Hyperspheres, which bounce off of walls and implode after a short duration. Protect your team with the floating Experimental Barrier and freeze incoming projectiles with Kinetic Grasp. Knock your enemies down and out by flinging a mass of debris at your unsuspecting enemies with Accretion. If your find yourself in a pinch, change the spacetime continuum with Gravitic Flux. Take flight then lift enemies in a targeted area and launch them into the sky, then observe as they are slammed back down.</p>
		<p>With 31 unique heroes to choose from on over 28 maps and a variety of game modes, there’s always a new way to experience the ultimate team-based shooter. 
		If you’re ready to experience something new to celebrate the BlizzCon festivities, pick up the Overwatch Standard Edition and join over 50 million players in the ultimate team shooter.</p>
		</div>
		<hr>
		<p><a href="news.php">Back to news</a></p>
	</main>
	<footer>
		<p><p>&copy; MATEJA STEPANIC <a href="https://github.com/MatejaStepanic/NWP-Stepanic"><img src="img/github.png" title="Github" alt="Github" style="width:20px;height:20px;"></a></p></p>
	</footer>

</body>
</html>
