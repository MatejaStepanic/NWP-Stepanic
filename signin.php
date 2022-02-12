<?php 
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
	<div class="background" style="height: 200px;"></div>
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
	</header>';
	
	if ($_POST == FALSE) {
		print '
		<form action="" name="myForm" id="myForm" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">

			<label for="username">Username:*</label>
			<input type="text" id="username" name="username" value="" pattern=".{5,10}" required>
									
			<label for="password">Password:*</label>
			<input type="password" id="password" name="password" value="" pattern=".{4,}" required>
									
			<input type="submit" value="Submit">
			<br>
		</form>';
	}
	else if ($_POST == TRUE) {
		
		$query  = "SELECT * FROM users";
		$query .= " WHERE username='" .  $_POST['username'] . "' AND archive='N'";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if (password_verify($_POST['password'], $row['password'])) {
			#password_verify https://secure.php.net/manual/en/function.password-verify.php
			$_SESSION['user']['valid'] = 'true';
			$_SESSION['user']['id'] = $row['id'];
			# 1 - administrator; 2 - editor; 3 - user
			$_SESSION['user']['role'] = $row['role'];
			$_SESSION['user']['firstname'] = $row['firstname'];
			$_SESSION['user']['lastname'] = $row['lastname'];
			$_SESSION['message'] = '<p>Dobrodošli, ' . $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] . '</p>';
			# Redirect to admin website
			header("Location: index.php?menu=7");
		}
		
		# Bad username or password
		else {
			unset($_SESSION['user']);
			$_SESSION['message'] = '<p>You entered wrong email or password!</p>';
			header("Location: index.php?menu=6");
		}
	}
	print '
	</div>
	<footer>
		<p><p>&copy; MATEJA STEPANIC <a href="https://github.com/MatejaStepanic/NWP-Stepanic"><img src="img/github.png" title="Github" alt="Github" style="width:20px;height:20px;"></a></p></p>
	</footer>
</body>
</html>';
?>