<?php  

	include './db.php';


	if (isset($_POST)) {

		$sql = "SELECT * FROM channel WHERE channelStatus = 1";
	    $result = mysqli_query($db, $sql);
	    $data = mysqli_num_rows($result);


	    echo json_encode($data);
	}


?>