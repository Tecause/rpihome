<?php  

	include './db.php';

	if (isset($_POST)) {
		$templateName = "";

		$sql = "SELECT applianceID FROM schedules WHERE `scheduleDay` LIKE '%".date('l')."%' AND TIME(`timeStart`) <= '".date('H:i:s')."' AND DATE_ADD(TIME(`timeStart`), INTERVAL 10 SECOND) >= '".date('H:i:s')."'";


		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) != 0 ) {

			while ($data = mysqli_fetch_assoc($result)) {
				$templateName = $data['applianceID'];
			}

		}
		else {
			$templateName = "none";
		}

		echo json_encode($templateName);

	}


?>