<?php  

	include './db.php';

	if (isset($_POST)) {
		$sql = "SELECT templateName FROM schedules WHERE `scheduleDay` LIKE '%".date('l')."%' AND TIME(`timeStart`) <= '".date('H:m:s')."' AND DATE_ADD(TIME(`timeStart`), INTERVAL 10 SECOND) >= '".date('H:m:s')."'";

		$result = mysqli_query($db, $sql);

		if ($result) {

			while ($data = mysqli_fetch_assoc($result)) {
				$templateName = $data['templateName'];
			}
		}
		else {
			$templateName = "none";
		}

		echo json_encode($templateName);

	}


?>