<?php
	// getting dependencies
	require_once("include/login_check.php");
	
	// destroying session
	session_destroy();
	
	// redirecting to login.php
	header("Location: " . URL . "login.php");
?>