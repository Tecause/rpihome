<div>

<?php  
	include './db.php';

	if (isset($_POST)) {
		$sql = "SELECT appID, appName, appPlace, appWatts, appPic, appliances.channelNumber, channelStatus FROM appliances LEFT JOIN channel ON appliances.channelNumber = channel.channelNumber ORDER BY channelNumber";

		if ($result = mysqli_query($db, $sql)) {

			while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
				echo '<div class="imgDiv" onmouseover="showOptions(this)" onmouseleave="hideOptions(this)">
						
					<img id="imgCh1" src="' .$data["appPic"].'">

					<a href="home.php?editApplianceName='.md5($data["appName"]).'" class="editTemplate" name="editTemplate"><i class="fas fa-edit"></i></a> <a href="home.php?removeApplianceName='.md5($data["appName"]).'" class="removeTemplate" name="removeTemplate" onclick="return removeTemplate();"><i class="fa fa-times"></i></a>

					<h4>'. $data["appPlace"] .'</h4>

					<h4 id="wattage'.$data["channelNumber"].'"></h4>

					<h4>Channel: '. $data["channelNumber"] .'</h4>

					<label class="switch">					
						<input type="checkbox" class="button" id="button'.$data["channelNumber"].'" name="'; if ($data["channelStatus"] == 1) echo 'ch'.$data["channelNumber"].'OFF" checked'; else echo 'ch'.$data["channelNumber"].'ON"'; echo '>	
						<span class="slider round"></span>
					</label>
					

					<input type="hidden" name="saveTransAppID'.$data["channelNumber"].'" value="'.$data["appID"].'">
					
				  </div>';
			}
		}
	}

?>	

</div>