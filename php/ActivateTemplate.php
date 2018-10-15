<?php  

	if (isset($_POST)) {

		include './db.php';
		
		$sql = "SELECT templateSettings FROM templates WHERE templateName = '".$_POST["templateName"]."'";
		$result = mysqli_query($db,$sql);
		$result = mysqli_fetch_array($result);
		$settings = $result[0];

		for ($i = 1; $i <= strlen($settings); $i++)
		{
			if ($settings[$i - 1] == "1")
			{
				exec("sudo python /home/pi/ch".$i."ON.py");
				$sql = "UPDATE channel SET channelStatus = 1 WHERE channelNumber = ".$i."";
		      	mysqli_query($db,$sql);		      	
			}
			else
			{
				exec("sudo python /home/pi/ch".$i."OFF.py");
				$sql = "UPDATE channel SET channelStatus = 0 WHERE channelNumber = ".$i."";
		      	mysqli_query($db,$sql);
			}  
		}

	}


?>