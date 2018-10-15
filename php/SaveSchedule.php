<?php  

	if (isset($_POST)) {
		include './db.php';

		$sql = "INSERT INTO schedules(applianceID, scheduleDay, timeStart) VALUES('".$_POST['templateName']."', '".$_POST['scheduleDay']."', '".$_POST['timeStart']."')";
		mysqli_query($db, $sql);
	} 

?>