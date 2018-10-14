<?php  

	if (isset($_POST)) {
		include './db.php';

		$sql = "INSERT INTO templates(templateName, templateSettings) VALUES('".$_POST['templateName']."', '".$_POST['templateSettings']."')";
		mysqli_query($db, $sql);

	}


?>