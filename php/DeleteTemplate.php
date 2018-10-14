<?php  

	if (isset($_POST)) {

		include './db.php';

		$sql = "DELETE FROM templates WHERE templateName = '".$_POST['templateName']."'";
		mysqli_query($db, $sql);

	}

?>