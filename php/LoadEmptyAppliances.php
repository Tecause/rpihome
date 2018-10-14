<div id="AddTemplateModal">
	<?php  
	
		include './db.php';
	
		$sql = "SELECT appID, appName, appPlace, appWatts, appPic, appliances.channelNumber, channelStatus FROM appliances LEFT JOIN channel ON appliances.channelNumber = channel.channelNumber ORDER BY channelNumber";
					
		if ($result = mysqli_query($db,$sql)) {
			
			$numRows = mysqli_num_rows($result);		
			
			while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
				echo '<div class="imgDiv">
						
						<img id="imgCh1" src="' .$data["appPic"].'">
			
						<h4>'.$data["appPlace"].'</h4>
			
						<label class="switch">					
							<input type="checkbox" name="editChSet'.$data["channelNumber"].'">
							<span class="slider round"></span>
						</label>																	
					  </div>';
			}
	
		}
	
	?>
		
</div>