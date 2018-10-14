<?php  

	include './db.php';

	if (isset($_POST)) {

		$sql = "UPDATE appliances SET channelNumber = ".$_POST['channel'].", appName = '".$_POST['name']."', appPlace = '".$_POST['location']."', appWatts = ".$_POST['wattage'].", appPic = '".$_POST['pic']."' WHERE appID = ".$_POST['appID'].";";
		mysqli_query($db, $sql);

	}

?>