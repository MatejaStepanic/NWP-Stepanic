<?php
	
	// getting dependencies
	require_once("include/login_check.php");
	require_once("include/db.php");
	require_once("include/header.php");
	
	// getting the car's id from url
	$game_id = $database_connection->escape_string($_GET['id']);
	
	// if you are posting
	if(!empty($_POST)){
		
		// query for updating car
		$query = "UPDATE games SET name = ?, genre = ?, year = ? WHERE id = ?;";
		
		// preparing the statement
		$stmt = $database_connection->prepare($query);
		
		// binding the parameters
		$stmt->bind_param('sssi', $_POST['name'], $_POST['genre'], $_POST['year'], $game_id);
		
		// executing the statement
		$stmt->execute();
		
		// redirecting to show_data.php
		header("Location: " . URL . "show_data.php");
	}
	
	// if there is $_GET['id'] variable
	if(isset($_GET['id'])){
		
		// query for selecting cars with some id
		$query = "SELECT name, genre, year FROM games WHERE id = ?;";
		
		// preparing the statement
		$stmt = $database_connection->prepare($query);
		
		// binding parameters
		$stmt->bind_param('i', $game_id);
		
		// executing the query
		$stmt->execute();
		
		// binding result to variables
		$stmt->bind_result($game_name, $game_genre, $game_year);
		
		// fetching the result
		$stmt->fetch();
		
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php echo $header; ?>
		<form name="input" action="http://<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>" method="POST">
			Id: <?php echo $game_id; ?><br />
			Name: <input type="text" name="name" value="<?php echo $game_name; ?>" /><br />
			Genre: <input type="text" name="genre" value="<?php echo $game_genre; ?>" /><br />
			Year of release: <input type="text" name="year" value="<?php echo $game_year; ?>" /><br />
			<input type="submit" value="Submit">
		</form>
	</body>
</html>