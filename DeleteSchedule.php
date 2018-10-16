<?php  

	include './db.php';

	if (isset($_POST)) {

		$sql = "DELETE FROM schedules WHERE scheduleID = " . $_POST['schedID'];
		mysqli_query($db, $sql);


	}


?>