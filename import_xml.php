<?php
	
	// loading dependencies
	require_once("include/login_check.php");
	require_once("include/header.php");
	require_once("include/db.php");
	
	// are you uploading file
	if(!empty($_FILES["file"])){
		
		// getting the upload directory
		$upload_dir = ini_get('upload_tmp_dir') ? ini_get('upload_tmp_dir') : sys_get_temp_dir();
		
		// if you have error while uploading
		if($_FILES["file"]["error"] !== UPLOAD_ERR_OK){
			echo "Error!";
			die;
		}
		
		// allow only XML
		if($_FILES["file"]["type"] != "text/xml"){
			echo "Only XML are allowed!";
			die;
		}
		
		// create a secure filename, replace any other character then a-z0-9 with _
		$file_name = preg_replace("/[^A-Z0-9._-]/i", "_", $_FILES["file"]["name"]);
		
		// move the file from tmp to "files" folder
		$success = move_uploaded_file($_FILES["file"]["tmp_name"], XML_UPLOAD_PATH . $file_name);
		
		// if the moving is not successful
		if (!$success) { 
	        echo "Unable to save file!";
	        exit;
	    }
		
		// creating the XML object (for validating)
		$xml_for_validating = new DOMDocument();
		$xml_for_validating->load(XML_UPLOAD_PATH . $file_name);
		if(!$xml_for_validating->schemaValidate(XML_UPLOAD_PATH . 'gamesschema.xsd')){
			echo "XML is not valid!";
			die;
		}
		
		// creating the XML parser
		$xml = simplexml_load_file(XML_UPLOAD_PATH . $file_name);
		
		// query for inserting into cars
		$query = "INSERT INTO games SET name = ?, genre = ?, year = ?;";
		
		// preparing the statement
		$stmt = $database_connection->prepare($query);
		
		// foreach car in xml file
		foreach($xml as $game){
			
			// binding the parameters
			$stmt->bind_param('ssi', $game->Name, $game->Genre, $game->Year);
			
			// executing the statement
			$stmt->execute();
			
		}
		
		// tell that XML is imported
		echo "XML imported!";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>OW import XML</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php echo $header; ?>
		<form action="import_xml.php" enctype="multipart/form-data" method="POST" >
			<input type="file" name="file" id="file"><br>
			<br>
			<input type="submit" name="submit" value="Upload">
		</form>
		<br>
		<footer>
		<p><p>&copy; MATEJA STEPANIC <a href="https://github.com/MatejaStepanic/NWP-Stepanic"><img src="img/github.png" title="Github" alt="Github" style="width:20px;height:20px;"></a></p></p>
	</footer>
	</body>
</html>