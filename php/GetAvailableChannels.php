<?php

	include './db.php';
	
	if (isset($_POST)) {

		$output = array();;

		$sql = "SELECT channelNumber FROM channel WHERE channelNumber NOT IN (SELECT channelNumber FROM appliances)";
		$result = mysqli_query($db, $sql);

		if ($result) {
			while ($data = mysqli_fetch_assoc($result)) {
				array_push($output, $data["channelNumber"]);
			}
		}

		echo json_encode($output);

	}

?>