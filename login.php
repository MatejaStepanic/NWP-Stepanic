<?php
	
	// getting dependencies
	require_once("include/globals.php");
	
	// starting the session (getting the $_SESSION)
	session_start();
	
	// if you are already logged in, redirect to index.php
	if(!empty($_SESSION)){
		header("Location: " . URL . "index.php");
	}
	
	// checked if you are submitted the login form
	if(!empty($_POST)){
		
		// have you provided username and password
		if(!empty($_POST['username']) && !empty($_POST['password'])){
				
			// connect to the database
			require_once("include/db.php");
			
			// prepare the statement - security for SQL Injection
			$stmt = $database_connection->prepare("SELECT id, username, first_name, last_name, role_id FROM users WHERE users.username = ? AND users.password = ?;");
			
			// binding the parameters for sql statement, 'ss' means 'string, string' (for parameters)
			$stmt->bind_param('ss', $_POST['username'], $_POST['password']);
			
			// executing the query
			$stmt->execute();
			
			// binding columns id and username to variables
			$stmt->bind_result($login_id, $login_username, $login_first_name, $login_last_name, $login_role_id);
			
			// fetching the result
			$stmt->fetch();
			
			// if the login is successful
			if(isset($login_id)){
				
				// save id, username etc. to $_SESSION
				$_SESSION['logged_user'] = array();
				$_SESSION['logged_user']['id'] = $login_id;
				$_SESSION['logged_user']['username'] = $login_username;
				$_SESSION['logged_user']['first_name'] = $login_first_name;
				$_SESSION['logged_user']['last_name'] = $login_last_name;
				$_SESSION['logged_user']['role_id'] = $login_role_id;
				
				// redirect to index.php
				header("Location: " . URL . "index.php");
				
			}else{
				
				// error message
				echo "Username/pasword combination is invalid!";
				
			}
		}else{
			
			// error message
			echo "Username or password not provided!";
			
		}
		
	}
?>
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
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"
	</head>
	<body>
		<div class="background" style="height: 200px;"></div>	
		<li style="background-color: lightgray;"><a href="signup.php">Sign up</a></li>
	</nav>	
		<div id="login_form">
			<h1>Overwatch User Login</h1>
			<form name="input" action="login.php" method="POST" autocomplete="off">
				Username: <input type="text" name="username" /><br />
				Password: <input type="password" name="password" /><br />
				<input id="login_button" type="submit" value="Login" />
			</form>
		</div>
	</body>
</html>