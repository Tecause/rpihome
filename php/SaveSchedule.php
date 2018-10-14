<?php  

	if (isset($_POST)) {
		include './db.php';

		$sql = "INSERT INTO schedules(applianceID, scheduleDay, timeStart, timeEnd) VALUES('".$_POST['templateName']."', '".$_POST['scheduleDay']."', '".$_POST['timeStart']."', '".$_POST['timeEnd']."')";
		mysqli_query($db, $sql);
	} 

?>