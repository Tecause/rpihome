<?php  
	include '../db.php';
	
	if (isset($_POST)) {

		$name = $_POST['name'];

		// Execute the python script
		exec("sudo python /home/pi/".$name.".py");
		/////////////////////////////////////////////


	}

?>