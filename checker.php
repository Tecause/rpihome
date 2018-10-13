<?php  
	include 'db.php';
	header("Content-type: application/json");

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{

		// Check if there are appliances scheduled to be turned on
		$sql = "SELECT * FROM schedules WHERE timeStart < DATE_ADD('".date('Y-m-d H:i:s')."', INTERVAL 60 SECOND) AND timeStart > DATE_SUB('".date('Y-m-d H:i:s')."', INTERVAL 60 SECOND)";
		$result = mysqli_query($db, $sql);
		

		if (mysqli_num_rows($result) > 0)
		{
			while($data = mysqli_fetch_assoc($result))
			{
				echo $data['timeStart'];

				$sql2 = "SELECT channelNumber FROM appliances LEFT JOIN schedules ON appliances.appID = schedules.applianceID WHERE appliances.appID = ".$data['applianceID'];
				$result2 = mysqli_query($db, $sql2);
				while($data2 = mysqli_fetch_array($result2))
				{
					$x = $data2['channelNumber'];
					// Execute the python script
					exec("sudo python /home/pi/ch".$x."on.py");
					/////////////////////////////////////////////

					// Update the Database
					$sql3 = "UPDATE channel SET channelStatus = 1 WHERE channelNumber = ".$x;
			      	mysqli_query($db,$sql3);

			      	// Record the Time the appliance is ON     	

			      	$sql4 = "INSERT INTO transactions(appID, startTime) VALUES (".$data['applianceID'].", '".date('Y-m-d H:i:s')."')";
			      	$result4 = mysqli_query($db,$sql4);
			      	/////////////////////////////////////////////

				}
			}
		}

		// Check if there are appliances scheduled to be turned off
		$sql = "SELECT * FROM schedules WHERE timeEnd < DATE_ADD('".date('Y-m-d H:i:s')."', INTERVAL 60 SECOND) AND timeEnd > DATE_SUB('".date('Y-m-d H:i:s')."', INTERVAL 60 SECOND)";
		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) > 0)
		{
			while($data = mysqli_fetch_assoc($result))
			{
				echo $data['timeEnd'];

				$sql2 = "SELECT channelNumber FROM appliances LEFT JOIN schedules ON appliances.appID = schedules.applianceID WHERE appliances.appID = ".$data['applianceID'];
				$result2 = mysqli_query($db, $sql2);
				while($data2 = mysqli_fetch_array($result2))
				{
					$x = $data2['channelNumber'];
					// Execute the python script
					exec("sudo python /home/pi/ch".$x."off.py");
					/////////////////////////////////////////////

					// Update the Database
					$sql = "UPDATE channel SET channelStatus = 0 WHERE channelNumber = ". $x;
			      	mysqli_query($db,$sql);
			      	/////////////////////////////////////////////

			      	// Record the Time the appliance is ON
			      	$appID = $data['applianceID'];

			      	$sql = "UPDATE transactions SET endTime = '".date('Y-m-d H:i:s')."' WHERE appID = '".$appID."' AND endTime IS NULL";
			      	$result = mysqli_query($db,$sql);
			      	/////////////////////////////////////////////

				}
			}
		}

	}

	if (isset($_GET['counter']))
	{
		$sql = "SELECT * FROM channel WHERE channelStatus = 1";
	    $result = mysqli_query($db, $sql);
	    $data = mysqli_num_rows($result);

	    echo json_encode($data);
	}
?>