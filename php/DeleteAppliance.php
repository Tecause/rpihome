<?php  

	include './db.php';

	if (isset($_POST)) {

		$sql = "DELETE FROM appliances WHERE appID = ". $_POST['appID'];
		$result = mysqli_query($db, $sql);

		// echo json_encode($sql);
	}

?>