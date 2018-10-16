<?php  
	
	include './db.php';

	if (isset($_POST)) {

		$array = array();

		$sql = "SELECT * FROM schedules";
		$result = mysqli_query($db, $sql);

		if ($result) {

			while ($data = mysqli_fetch_assoc($result)) {
				array_push($array, $data);
			}

		}

		echo json_encode($array);
	}


?>