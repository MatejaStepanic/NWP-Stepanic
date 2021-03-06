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
	<h1>New Overwatch hero Moira announced at BlizzCon</h1>
	<hr>
	<img src="news/moira.png" title="moira" style="width:600px;height:400px;margin-left:15px;" align="left">
	
	<p>Overwatch has its angelic healer in Mercy, its grizzled healer in Ana, and now its flat-out evil(?) healer in Moira, shown off in a new trailer at BlizzCon 2017 today. "She does a tremendous amount of healing. She can also do a tremendous amount of damage as well," said Jeff Kaplan. 

	Check out the video above for a look at Moiras abilities, which include a yellow healing orb that can chain to multiple friendly heroes, a bouncing purple orb that dishes out the damage, a teleport, and a combined yellow/purple beam that looks like it heals friendlies while also liquidating enemies.

	Moiras playable at BlizzCon right now, but no word on when shell hit PTR or the live game. </p>

	<p>The full details on Moiras abilities are available on Overwatchs hero site now. Heres the description, and the full breakdown: 

	Moira’s biotic abilities enable her to contribute healing or damage in any crisis. While Biotic Grasp gives Moira short-range options, her Biotic Orbs contribute longer-range, hands-off damage and healing; she can also Fade to escape groups or remain close to allies in need of support. Once she’s charged Coalescence, Moira can save multiple allies from elimination at once or finish off weakened enemies. 

	Biotic Grasp: Using her left hand, Moira expends biotic energy to heal allies in front of her. Her right hand fires a long-range beam weapon that saps enemies’ health, healing Moira and replenishing her biotic energy. 

	Biotic Orb: Moira launches a rebounding biotic sphere; she can choose between a regeneration effect that heals the allies it passes through, or a decay effect that deals damage to enemies.

	Fade: Moira quickly teleports a short distance. 

	Coalescence: Moira channels a long-range beam that both heals allies and bypasses barriers to damage her enemies. </p>
	</div>
	<hr>
	<p><a href="news.php">Back to news</a></p>
	</main>
	<footer>
		<p>&copy; MATEJA STEPANIC <a href="https://github.com/MatejaStepanic/NWP-Stepanic"><img src="img/github.png" title="Github" alt="Github" style="width:20px;height:20px;"></a></p>
	</footer>
</body>
</html>
';
?>