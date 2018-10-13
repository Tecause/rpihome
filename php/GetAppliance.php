<?php  

	include './db.php';

	if (isset($_POST)) {

		$sql = "SELECT * FROM appliances WHERE appID = ".$_POST['appID'];
		$result = mysqli_query($db, $sql);

		if ($result) {
			while ($_data = mysqli_fetch_assoc($result)) {
				$data['appID'] = $_data['appID'];
				$data['channelNumber'] = $_data['channelNumber'];
				$data['appName'] = $_data['appName'];
				$data['appPlace'] = $_data['appPlace'];
				$data['appWatts'] = $_data['appWatts'];
				$data['appPic'] = $_data['appPic'];
			}
		}


		echo json_encode($data);

	}
?>