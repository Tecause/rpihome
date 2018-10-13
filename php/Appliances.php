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

	<div class="iconButton">
		<a href="#addAppliance">
			<span class="toolTipText">Add Appliance</span>
			<i class="fas fa-plus-circle" id="btnAddAppliance" data-toggle="modal" data-target="#addAppliance"></i>
		</a>
	</div>

</div>

<div class="modal fade" id="addAppliance">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <label id="aircon" for="aircon" class="radio" onclick="checkRadio(this)">
						<img src="./img/aircon.png" alt="">
						<input type='radio' name='appPic[]' value='./img/aircon.png' id="aircon"/>
					</label>
					
					<label for="charge" class="radio" onclick="checkRadio(this)">
						<img src="./img/charge.png" alt="">
						<input type='radio' name='appPic[]' value='./img/charge.png' id="charge"/>
					</label>

					<label for="fan" class="radio" onclick="checkRadio(this)">
						<img src="./img/fan.png" alt="">
						<input type='radio' name='appPic[]' value='./img/fan.png' id="fan"/>
					</label>
					
					<label for="light" class="radio" onclick="checkRadio(this)">
						<img src="./img/light.png" alt="">
						<input type='radio' name='appPic[]' value='./img/light.png' id="light"/>
					</label>

					<label for="ref" class="radio" onclick="checkRadio(this)">
						<img src="./img/ref.png" alt="">
						<input type='radio' name='appPic[]' value='./img/ref.png' id="ref"/>
					</label>

					<label for="tv" class="radio" onclick="checkRadio(this)">
						<img src="./img/tv.png" alt="">
						<input type='radio' name='appPic[]' value='./img/tv.png' id="tv"/>
					</label>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>