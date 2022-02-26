<?php
	
	// require dependencies
	require_once("include/globals.php");
	require_once("include/db.php");

	
	// check for permissions
	// if you don't have permission, close the app
	
	// if the request is POST
	if(!empty($_POST)){
		
		// insert query
		$query = "INSERT INTO users SET username = ?, password = ?, first_name = ?, last_name = ?, role_id = ?;";
		
		// preparing the statement
		$stmt = $database_connection->prepare($query);
		
		// binding the parameters
		// string, string, string, string and integer to "?" marks
		$stmt->bind_param('ssssi', $_POST['username'], $_POST['password'], $_POST['first_name'], $_POST['last_name'], $_POST['role_id']);
		
		// executing the query
		$stmt->execute();
		
		// redirecting to users.php after adding
		header("Location: " . URL . "users.php");
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
		<form name="input" action="http://<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>" method="POST" autocomplete="off">
			Username: <input type="text" name="username" /><br />
			Password: <input type="password" name="password" /><br />
			FirstName: <input type="text" name="first_name" /><br />
			LastName: <input type="text" name="last_name" /><br />
			<?php
				
				// getting dependencies
				require("include/db.php");
				
				// database query
				$query = "SELECT id, name FROM roles;";
				
				// preparing the statement
				$stmt = $database_connection->prepare($query);
				
				// executing the query
				$stmt->execute();
				
				// getting the result to variables
				$stmt->bind_result($role_id, $role_name);
			?>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>