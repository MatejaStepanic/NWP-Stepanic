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
	<title>About</title>
	<link rel="stylesheet" href="style.css">
</head>
	<main>
		<body>
			<?php echo $header; ?>
	</header>
	<main>
		<h1>About Overwatch</h1>
		<hr>
		<h2>WELCOME TO OVERWATCH</h2>
		<video width="50%" controls poster="video/cover.jpg" >
		  <source src="video/moiraorigin.mp4" type="video/mp4">
		  Your browser does not support HTML5 video.
		</video>
		<p>Overwatch is a team-based multiplayer online first-person shooter video game developed and published by Blizzard Entertainment. It was released in May 2016 for Windows, PlayStation 4, and Xbox One. Overwatch assigns players into two teams of six, with each player selecting from a roster of 25 pre-defined characters, known as heroes, each with a unique style of play, whose roles are divided into four general categories: Offense, Defense, Tank, and Support. Players on a team work together to secure and defend control points on a map or escort a payload across the map in a limited amount of time. Players gain cosmetic rewards that do not affect gameplay, such as character skins and victory poses, as they play the game.</p>
		<p>In Overwatch, you control one of several heroes in competitive 6-person team shooting matches. Battle over objectives, take down the other team, and achieve victory</p>
		<p>Each hero has a primary attack or skill and at least two additional skills that can be invoked at any time, some requiring a brief cooldown period before they can be used again. Furthermore, each player slowly builds up a meter towards their characters "ultimate" skill; this meter builds up over time but can build up faster for defeating opponents or performing other beneficial tasks for their team such as healing other team members. Once ready, the player can use this skill at any time which may last for a few seconds (such as increased attack strength or immunity to attacks) or be a single powerful action (such as resurrecting any recently-fallen team members), after which they then must wait for the meter to fill up again. Opposing players will be alerted to the use of this ultimate ability by an exclamation from the character, often in the characters native language; for example, gunslinger McCree will call out "Its high noon" as the player engages the ultimate ability to target multiple visible enemies and deal lethal damage to those still in sight. This gives opposing players a brief moment to try to take cover or respond appropriately.</p>
		<p>Before you begin a game of Overwatch, you’ll need to choose a hero to play.</p>
		<p>Maybe controlling a cannon-toting, genetically-engineered ape from the moon appeals to you. Or, you might prefer zipping around as a teleporting, time-traveling freedom fighter. Who do you want to be?</p>
		<p>In Overwatch, heroes do battle in diverse locations around the world. From the technological marvel of Numbani to the manufacturing powerhouse of Volskaya, each map has a unique layout and specific win conditions that your team must meet in order to secure victory.</p>
	</main>
	<footer>
		<p><p>&copy; MATEJA STEPANIC <a href="https://github.com/MatejaStepanic/NWP-Stepanic"><img src="img/github.png" title="Github" alt="Github" style="width:20px;height:20px;"></a></p></p>
	</footer>
</body>
</html>
