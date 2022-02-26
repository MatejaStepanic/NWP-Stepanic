<?php
	
	// getting dependencies
	require_once("include/login_check.php");
	require_once("include/check_permissions.php");
	require_once("include/db.php");
	
	// checking permissions for this site
	check_permissions("remove_users", array('stop_app_on_false' => 1));
	
	// getting user's id from url
	$user_id = $database_connection->escape_string($_GET['id']);

	// prepare the statement - security for SQL Injection
	$stmt = $database_connection->prepare("DELETE FROM users WHERE id = ?;");
	
	// binding the parameters
	$stmt->bind_param('i', $user_id);
	
	// executing the statement
	$stmt->execute();
	
	// redirect to users.php
	header("Location: " . URL . "users.php");
?>