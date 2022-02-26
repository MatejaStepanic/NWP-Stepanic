<?php

require_once("include/login_check.php");
require_once("include/header.php");
require_once("include/db.php");

echo $header; 
$url = 'https://www.boredapi.com/api/activity';
$json = file_get_contents($url);
$_data = json_decode($json,true);
print'
	<div id="gallery">
	<br> 
		<p>If you are bored you could try this: '.$_data['activity'].'</p>
	</div>
	<br>
	<footer>
		<p><p>&copy; MATEJA STEPANIC <a href="https://github.com/MatejaStepanic/NWP-Stepanic"><img src="img/github.png" title="Github" alt="Github" style="width:20px;height:20px;"></a></p></p>
	</footer>'
?>
