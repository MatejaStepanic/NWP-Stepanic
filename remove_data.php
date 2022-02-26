<?php
	
	// load dependencies
	require_once("include/login_check.php");
	require_once("include/db.php");
	
	// getting car's id from url
	$game_id = $database_connection->escape_string($_GET['id']);

	// prepare the statement - security for SQL Injection
	$stmt = $database_connection->prepare("DELETE FROM games WHERE id = ?;");
	
	// binding parameters
	$stmt->bind_param('i', $game_id);
	
	// executing the statement
	$stmt->execute();
	
	// redirecting to show_data.php
	header("Location: " . URL . "show_data.php");
?>