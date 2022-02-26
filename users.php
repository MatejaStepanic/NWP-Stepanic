<?php
	
	// getting dependencies
	require_once("include/login_check.php");
	require_once("include/check_permissions.php");
	require_once("include/header.php");
	require("include/db.php");
	
	// checking for permissions
	check_permissions("list_users", array('stop_app_on_false' => 1));
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo APP_TITLE; ?></title>
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
					
					// query for getting the users
					// join users and roles
					$query = "SELECT users.id, users.username, users.first_name, users.last_name, roles.name
							FROM users INNER JOIN roles ON roles.id = users.role_id;";
					
					// preparing the statement
					$stmt = $database_connection->prepare($query);
					
					// executing the query
					$stmt->execute();
					
					// binding the result to variables
					$stmt->bind_result($user_id, $user_username, $user_first_name, $user_last_name, $user_full_role_name);
					
					// table headers
					echo "<tr><th>Id</th><th>Username</th><th>FirstName</th><th>LastName</th><th>Role</th>";
					
					// fetching the result, row by row
					while($stmt->fetch()){
							
						// table rows
						$row = "<tr>";
						$row .= 
									'<div><td>' . $user_id . '</td><td>' . $user_username . '</td>
									<td>'. $user_first_name .'</td><td>'. $user_last_name .'</td>
									<td>'. $user_full_role_name .'</td>
									<td><a href="' . URL."edit_users.php?id=". $user_id . '">Edit</a></td>
									<td><a href="' . URL."remove_users.php?id=". $user_id . '">Remove</a></td></div>';
						$row .= "</tr>";
						echo $row;
					}
				?>
			</table>
		</div>
		<a href="add_users.php">New User</a>
		<br>
		<footer>
		<p><p>&copy; MATEJA STEPANIC <a href="https://github.com/MatejaStepanic/NWP-Stepanic"><img src="img/github.png" title="Github" alt="Github" style="width:20px;height:20px;"></a></p></p>
	</footer>
	</body>
</html>