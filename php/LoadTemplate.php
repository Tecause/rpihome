<div>
	

	<?php

		include './db.php';
		// Edit Template 
		$loadTemplateSettings = "";

		if (isset($_POST)) {

			$sql = "SELECT templateSettings FROM templates WHERE templateName = '".$_POST['templateName']."'";
			$result = mysqli_query($db,$sql);

			$loadTemplateSettings = mysqli_fetch_array($result);
			$loadTemplateSettings = $loadTemplateSettings[0];

			///////////////////////////////////////////////////////////////////
			$sql = "SELECT appID, appName, appPlace, appWatts, appPic, appliances.channelNumber, channelStatus FROM appliances LEFT JOIN channel ON appliances.channelNumber = channel.channelNumber ORDER BY channelNumber";
				
			if ($result = mysqli_query($db,$sql)) {
				
				$numRows = mysqli_num_rows($result);		
				
				$i = 1;
				while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					echo '<div class="imgDiv">
							
							<img id="imgCh1" src="' .$data["appPic"].'">
				
							<h4>'.$data["appPlace"].'</h4>
				
							<label class="switch">					
								<input type="checkbox" id="ch'.$i.'" name="editChSet'.$data["channelNumber"].'"'; if ($loadTemplateSettings[$data["channelNumber"] - 1] == 1) echo 'checked="checked"'; echo'>
								<span class="slider round"></span>
							</label>																	
						  </div>';
					$i++;
				}

			}
		}

	?>



</div>