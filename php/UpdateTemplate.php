<?php  

	if (isset($_POST)) {

		include './db.php';

		$sql = "UPDATE templates SET templateSettings = '".$_POST['settings']."' WHERE templateName = '".$_POST['templateName']."'";
		mysqli_query($db, $sql);

	}

?>