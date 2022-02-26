<?php

	// function for checking permissions
	function check_permissions($action, $options = array()){
		
		// import database configuration
		require("db.php");
		
		// if the action is not provided, finish the function
		if($action == null){
			return 0;
		}
		
		// getting the user's role from session
		$role_id = $_SESSION['logged_user']['role_id'];
		
		// query joining users and roles
		$query = "SELECT actions_roles.allowed FROM 
			roles INNER JOIN actions_roles ON actions_roles.role_id = roles.id
			INNER JOIN actions ON actions_roles.action_id = actions.id
			WHERE roles.id = {$role_id} AND actions.name = '{$action}';";
		
		// preparing the query
		$stmt = $database_connection->prepare($query);
		
		// binding the result
		$stmt->bind_result($allowed);
		
		// executing the script
		$stmt->execute();
		
		// fetching the result
		$stmt->fetch();
		
		// if "stop_app_on_false" is set to 1, if the $allowed is 0, the whole application will stop
		if(isset($options['stop_app_on_false']) && $options['stop_app_on_false'] === 1 && $allowed == 0){
			echo "You don't have permissions!";
			die;
		}
		
		// return 0 or 1
		return $allowed;
	}
?>