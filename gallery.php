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
	<title>Gallery</title>
	<link rel="stylesheet" href="style.css">
</head>
	<main>
		<body>
			<?php echo $header; ?>
	</header>
	<main>
		<h1>Gallery</h1>
		<hr>
		<div id="gallery">
			<figure id="1">
				<a href="img/OW1.jpg" target="new">
					<img src="img/OW1.jpg" alt="OW1" width="400" height="300">
				</a>
				<figcaption>Mei, Reinhardt and Tracer<figcaption>
			</figure>
			<figure id="2">
				<a href="img/OW2.jpg" target="new">
					<img src="img/OW2.jpg" alt="OW2" width="400" height="300">
				</a>
				<figcaption>Bastion<figcaption>
			</figure>
			<figure id="3">
				<a href="img/OW3.png" target="new">
					<img src="img/OW3.png" alt="OW3" width="400" height="300">
				</a>
				<figcaption>Lucio and Tracer<figcaption>
			</figure>
			<figure id="4">
				<a href="img/OW4.jpg" target="new">
					<img src="img/OW4.jpg" alt="OW4" width="400" height="300">
				</a>
				<figcaption>Football event skins<figcaption>
			</figure>
			<figure id="5">
				<a href="img/OW5.png" target="new">
					<img src="img/OW5.png" alt="OW5" width="400" height="300">
				</a>
				<figcaption>Gameplay look<figcaption>
			</figure>
			<figure id="6">
				<a href="img/OW6.jpg" target="new">
					<img src="img/OW6.jpg" alt="OW6" width="400" height="300">
				</a>
				<figcaption>Omnic event<figcaption>
			</figure>
			<figure id="7">
				<a href="img/OW7.jpg" target="new">
					<img src="img/OW7.jpg" alt="OW7" width="400" height="300">
				</a>
				<figcaption>Lucio<figcaption>
			</figure>
		</div>
	</main>
	<footer>
		<p>&copy; MATEJA STEPANIC <a href="https://github.com/MatejaStepanic/NWP-Stepanic"><img src="img/github.png" title="Github" alt="Github" style="width:20px;height:20px;"></a></p>
	</footer>
</body>
</html>
