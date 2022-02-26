<?php
	
	// require database connectivity and checking for permissions
	require("db.php");
	require_once("check_permissions.php");
	
	// setting the header, depends on your role (Administrator or User)
	
	if(check_permissions("see_admin_menu")){
		$header = '<head>
		<title>Overwatch</title>		
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
       	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
       	<meta name="description" content="Programiranje web aplikacija">
       	<meta name="keywords" content="overwatch, game">
       	<meta name="author" content="Mateja Stepanic"/>
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 		
	</head>
<body>
	<header>
	<nav>
		<ul>
			<li><a href=".">Home</a></li> | 
			<li><a href="import_xml.php">ImportXML</a></li> | 
			<li><a href="show_data.php">ShowData</a></li> |
			<li><a href="users.php">Users</a></li> |
            Welcome ' . $_SESSION['logged_user']['username'] . ',
            <a href="logout.php">Log out</a>
            </div>	
		</ul>
	</nav>
	<div class="background" style="height: 200px;"></div>		
	</header>
';
	}else if(check_permissions("see_user_menu")){
		$header = '<head>
		<title>Overwatch</title>		
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
       	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
       	<meta name="description" content="Programiranje web aplikacija">
       	<meta name="keywords" content="overwatch, game">
       	<meta name="author" content="Mateja Stepanic"/>
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 		
	</head>
<body>
	<header>
	<div class="background" style="height: 200px;"></div>		
	<nav>
		<ul>
			<li><a href=".">Home</a></li> 
            <li><a href="news.php">News</a></li> 
            <li><a href="contact.php">Contact</a></li> 
            <li><a href="about-us.php">About</a></li> 
            <li><a href="gallery.php">Gallery</a></li> 
            <li><a href="boredapi.php">Bored API</a></li> 
            Welcome ' . $_SESSION['logged_user']['username'] . ', 
            <a href="logout.php">Log out</a>
            </div>	
		</ul>
	</nav>
	<hr>
	</header>';
	}else{
		$header = "";
	}
	
?>