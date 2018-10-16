<?php  
	include '../db.php';
	
	if (isset($_POST)) {

		$name = $_POST['data'];
		$channelNumber = (int)filter_var($name, FILTER_SANITIZE_NUMBER_INT);

		// Execute the python script
		exec("sudo python /home/pi/".$name.".py");
		/////////////////////////////////////////////

		
		if (strpos($name, "ON")) {	

			// Update the Database
			$sql = "UPDATE channel SET channelStatus = 1 WHERE channelNumber = $channelNumber";
	      	mysqli_query($db,$sql);


	      	$sql = "INSERT INTO transactions(appID, startTime) VALUES (".$_POST['appId'].", '".date('Y-m-d H:i:s')."')";
      		mysqli_query($db,$sql);

	    }
	    else {
	    	$sql = "UPDATE channel SET channelStatus = 0 WHERE channelNumber = $channelNumber";
	      	mysqli_query($db,$sql);

	      	$sql = "UPDATE transactions SET endTime = '".date('Y-m-d H:i:s')."' WHERE appID = '".$_POST['appId']."' AND endTime IS NULL";
      		$result = mysqli_query($db,$sql);
	    }
	}

?>