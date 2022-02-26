<?php
	
	// require dependencies
	require_once("include/login_check.php");
	require("include/check_permissions.php");
	require_once("include/db.php");
	require_once("include/header.php");
	
	// check for permissions
	// if you don't have permission, close the app
	check_permissions("add_users", array('stop_app_on_false' => 1));
	
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
		<title><?php echo APP_TITLE; ?></title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php echo $header; ?>
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
				
				// creating the select field in HTML
				$select = 'Role: <select name="role_id">';
				while($stmt->fetch()){
					$select .= '<option value="'. $role_id .'">'.$role_name."</option>";
				}
				$select .= "</select><br />";
				echo $select;
			?>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>