<?php  
	include './db.php';

	if (isset($_POST)) {

		$sql = "INSERT INTO appliances(channelNumber, appName, appPlace, appWatts, appPic) VALUES (".$_POST['channel'].", '".$_POST['name']."', '".$_POST['location']."', ".$_POST['wattage'].", '".$_POST['pic']."')";

		mysqli_query($db, $sql);
	}

?>