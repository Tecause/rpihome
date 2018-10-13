<?php  

	include 'db.php';

	// $sql = "SELECT * FROM schedules WHERE timeStart < DATE_ADD('".date('Y-m-d H:i:s')."', INTERVAL 120 SECOND) AND timeStart > DATE_SUB('".date('Y-m-d H:i:s')."', INTERVAL 120 SECOND)";
	// $result = mysqli_query($db, $sql);
	// while($data = mysqli_fetch_assoc($result))
	// {
	// 	echo $data['scheduleID'] . ', '. $data['applianceID'] . ', '. $data['timeStart'] . '<br>';
	// }

	echo date('Y-m-d H:i:s');
	
?>