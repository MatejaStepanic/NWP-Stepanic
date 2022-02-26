<?php
	// getting dependencies
	require_once("include/login_check.php");
	require_once("include/db.php");
	require_once("include/header.php")
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Game Database</title>
		<link rel="stylesheet" href="style.css">
		 <style>
      table {
        border-style: ridge;
        border-width: 40px;
        border-color: palevioletred;
        background-color: #d9d9d9;
      }
      th {
        border: 4px solid purple;
      }
      td {
        border: 2px solid mediumpurple;
      }
    </style>
	</head>
	<body>
		<?php echo $header; ?>
		<div id="show_data">
			<table>
				<?php
					
					// query for getting cars
					$query = "SELECT id, name, genre, year FROM games;";
					
					// preparing the statement
					$stmt = $database_connection->prepare($query);
					
					// executing the statement
					$stmt->execute();
					
					// binding the result to variables
					$stmt->bind_result($game_id, $game_name, $game_genre, $game_year);
					
					// table headers
					echo "<tr><th>Id</th><th>Name</th><th>Genre</th><th>Year</th></tr>";
					
					// fetching the result
					while($stmt->fetch()){
						
						// table rows
						$row = "<tr>";
						$row .= 
									'<div><td>' . $game_id . '</td><td>' . $game_name . '</td>
									<td>' . $game_genre . '</td><td>' . $game_year . '</td>
									<td><a href="' . URL."edit_data.php?id=". $game_id . '">Edit</a></td>
									<td><a href="' . URL."remove_data.php?id=". $game_id . '">Remove</a></td>';
						$row .= "</tr></div>";
						echo $row;
					}
				?>
			</table>
		</div>
		<footer>
		<p><p>&copy; MATEJA STEPANIC <a href="https://github.com/MatejaStepanic/NWP-Stepanic"><img src="img/github.png" title="Github" alt="Github" style="width:20px;height:20px;"></a></p></p>
	</footer>
	</body>
</html>