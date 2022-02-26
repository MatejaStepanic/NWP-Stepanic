<?php

	// including globals
	require_once("include/globals.php");
	
	// starting the session (getting the $_SESSION variable)
	session_start();
	
	// if you are not logged in, $_SESSION is empty
	// if that's true, redirect to login.php for login
	if(empty($_SESSION)){
		header("Location: " . URL . "login.php");
		die;
	}
?>