<?php  

if (isset($_POST)) {
	
	$sql = "SELECT templateSettings FROM templates WHERE templateName = '".$_GET["templateName"]."'";
	$result = mysqli_query($db,$sql);
	$result = mysqli_fetch_array($result);
	$settings = $result[0];

	for ($i = 1; $i <= strlen($settings); $i++)
	{
		if ($settings[$i - 1] == "1")
		{
			exec("sudo python /home/pi/ch".$i."on.py");
			$sql = "UPDATE channel SET channelStatus = 1 WHERE channelNumber = ".$i."";
	      	mysqli_query($db,$sql);		      	
		}
		else
		{
			exec("sudo python /home/pi/ch".$i."off.py");
			$sql = "UPDATE channel SET channelStatus = 0 WHERE channelNumber = ".$i."";
	      	mysqli_query($db,$sql);
		}
	}

	header("location: home.php");		
}	


?>