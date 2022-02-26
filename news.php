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
		<h1>News</h1>
		<hr>
		<div class="news">
			<p><time datetime="2019-11-31">31 November 2022</time></p>
			<img src="img/sale.jpg" title="Sale">
			<a href="sale-news.php"><h2>BLIZZCON SALE: GET OVERWATCH® FOR $14.99</h2></a>
			<p>Becoming an Overwatch® agent is easier than ever! Join the fight for the future with Overwatch® on PC available at $14.99 now through November 3rd! <a href="sale-news.php">More ...</a></p>
			<hr>
			<p><time datetime="2019-11-05">5 November 2022</time></p>
			<img src="img/panel.jpg" title="Panel">
			<a href="panel-news.php"><h2>REVVING UP THE ENGINE—OVERWATCH 2 “EVOLVING THE ART” PANEL RECAP</h2></a>
			<p>At BlizzCon 2019, we presented a first look at the sequel to Overwatch. With improved visuals, technology, and immersive storytelling <a href="panel-news.php">More ...</a></p>
			<hr>
			<p><time datetime="2019-11-08">8 November 2022</time></p>
			<img src="news/moira.png" title="Moira">
			<a href="moira-news.php"><h2>Moira Origin, Concept Art, Skins for All and More</h2></a>
			<p>Equal parts brilliant and controversial, scientist Moira ODeorain is on the cutting edge of genetic engineering, searching for a way to rewrite the fundamental building blocks of life. <a href="moira-news.php">More ...</a></p>
			<hr>
			<p><time datetime="2019-09-05">5 September 2022</time></p>
			<img src="news/cat.png" title="Jetpack cat">
			<a href="cat-news.php"><h2>Here’s Overwatch’s canceled Jetpack Cat hero</h2></a>
			<p>Meet the flying feline that was too weird for Overwatch <a href="cat-news.php">More ...</a></p>
			<hr>
			<p><time datetime="2019-08-19">19 August 2022</time></p>
			<img src="img/mercy.jpg" title="Mercy">
			<a href="mercy-news.php"><h2>TAKE FLIGHT IN MERCYS RECALL CHALLENGE!</h2></a>
			<p>Fly into action and take up the mantle of the Valkyrie in Mercy’s Recall Challenge! <a href="mercy-news.php">More ...</a></p>
			<hr>	
		</div>
	</main>
	<footer>
		<p>&copy; MATEJA STEPANIC <a href="https://github.com/MatejaStepanic/NWP-Stepanic"><img src="img/github.png" title="Github" alt="Github" style="width:20px;height:20px;"></a></p>
	</footer>
</body>
</html>
