<?php
	
	// load dependencies
	require_once("include/login_check.php");
	require_once("include/check_permissions.php");
	require_once("include/db.php");
	require_once("include/header.php");
	
	// checking the permissions for editing users
	check_permissions("edit_users", array('stop_app_on_false' => 1));
	
	// getting the user's id from url
	$user_id = $database_connection->escape_string($_GET['id']);
	
	// if you are posting
	if(!empty($_POST)){
		
		// query variable
		$query = "";
		
		// if the password is not provided, ignore adding password to query
		if($_POST['password'] != ''){
			
			// query for updating user (with password)
			$query = "UPDATE users SET username = ?, password = ?, first_name = ?, last_name = ?, role_id = ? WHERE id = ?;";
			
			// preparing the statement
			$stmt = $database_connection->prepare($query);
			
			// binding parameters
			$stmt->bind_param('ssssii', $_POST['username'], $_POST['password'], $_POST['first_name'], $_POST['last_name'], $_POST['role_id'], $user_id);
		
		}else{
			
			// query for updating user (without password)
			$query = "UPDATE users SET username = ?, first_name = ?, last_name = ?, role_id = ? WHERE id = ?;";
			
			// preparing the statement
			$stmt = $database_connection->prepare($query);
		
			// binding parameters
			$stmt->bind_param('sssii', $_POST['username'], $_POST['first_name'], $_POST['last_name'], $_POST['role_id'], $user_id);
		
		}
		
		// executing the query
		$stmt->execute();
		
		// redirect to users.php
		header("Location: " . URL . "users.php");
	}
	
	// if $_GET variables are set
	if(isset($_GET['id'])){
		
		// query for selecting users
		$query = "SELECT username, first_name, last_name, role_id
			FROM users WHERE id = ?;";
			
		// preparing the statement
		$stmt = $database_connection->prepare($query);
		
		// binding parameters to query
		$stmt->bind_param('i', $user_id);
		
		// executing the query
		$stmt->execute();
		
		// binding result to variables
		$stmt->bind_result($user_username, $user_first_name, $user_last_name, $user_role_id);
		
		// fetching the result
		$stmt->fetch();
		
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo APP_TITLE; ?></title>
		<link href="style/main.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php echo $header; ?>
		<form name="input" action="http://<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>" method="POST">
			Id: <?php echo $user_id; ?><br />
			Username: <input type="text" name="username" value="<?php echo $user_username; ?>" /><br />
			Password: <input type="password" name="password" /><br />
			FirstName: <input type="text" name="first_name" value="<?php echo $user_first_name; ?>" /><br />
			LastName: <input type="text" name="last_name" value="<?php echo $user_last_name; ?>" /><br />
			<?php
				
				// getting dependencies
				require("include/db.php");
				
				// query for selecting roles
				$query = "SELECT id, name FROM roles;";
				
				// preparing the statement
				$stmt = $database_connection->prepare($query);
				
				// executing the statement
				$stmt->execute();
				
				// binding result to variables
				$stmt->bind_result($role_id, $role_name);
				
				// creating select with roles
				$select = 'Role: <select name="role_id">';
				while($stmt->fetch()){
					
					// if the selected user and $role_id are the same, select option inside the "select element"
					if($user_role_id === $role_id){
						$select .= '<option value="'. $role_id .'" selected="">'.$role_name."</option>";
					}else{
						$select .= '<option value="'. $role_id .'">'.$role_name."</option>";
					}
				}
				$select .= "</select><br />";
				echo $select;
			?>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>