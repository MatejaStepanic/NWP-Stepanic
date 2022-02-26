<?php
	
	// database parameters
	$database_host = "localhost";
	$database_name = "xmlapp";
	$database_username = "root";
	$database_password = "";
	
	// try connecting to database
	// if not connected, break the application
	$database_connection = new mysqli($database_host, $database_username, $database_password, $database_name);
	
	// if not connected
	if(mysqli_connect_errno()){
		echo "Database connection failed!";
		die;
	}
?>