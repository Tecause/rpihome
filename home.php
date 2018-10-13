<?php  
	include("db.php");
	session_start();


   	// if(!isset($_SESSION['login_user']))
   	// {
   	//    header("location: index.php");
   	// }

   	//Get a counter
	$sql = "SELECT * FROM channel WHERE channelStatus = 1";
	$result = mysqli_query($db, $sql);
	$count = mysqli_num_rows($result);

	//Channel1
	if (isset($_POST['ch1ON']))
	{
		// Execute the python script
		exec("sudo python /home/pi/ch1on.py");
		/////////////////////////////////////////////

		// Update the Database
		$sql = "UPDATE channel SET channelStatus = 1 WHERE channelNumber = 1";
      	mysqli_query($db,$sql);

      	// Record the Time the appliance is ON     	
      	$appID = $_POST["saveTransAppID1"];

      	$sql = "INSERT INTO transactions(appID, startTime) VALUES (".$appID.", '".date('Y-m-d H:i:s')."')";
      	$result = mysqli_query($db,$sql);
      	/////////////////////////////////////////////


      	// Refresh the Page
      	header("Refresh:0");
      	/////////////////////////////////////////////
	}
	if (isset($_POST['ch1OFF']))
	{
		// Execute the python script
		exec("sudo python /home/pi/ch1off.py");
		/////////////////////////////////////////////

		// Update the Database
		$sql = "UPDATE channel SET channelStatus = 0 WHERE channelNumber = 1";
      	mysqli_query($db,$sql);
      	/////////////////////////////////////////////

      	// Record the Time the appliance is ON
      	$appID = $_POST["saveTransAppID1"];

      	$sql = "UPDATE transactions SET endTime = '".date('Y-m-d H:i:s')."' WHERE appID = '".$appID."' AND endTime IS NULL";
      	$result = mysqli_query($db,$sql);
      	/////////////////////////////////////////////

      	// Refresh the Page
      	header("Refresh:0");
      	/////////////////////////////////////////////
	}

	//Channel 2
	if (isset($_POST['ch2ON']))
	{

		// Execute the python script
		exec("sudo python /home/pi/ch2on.py");
		/////////////////////////////////////////////

		// Update the Database
		$sql = "UPDATE channel SET channelStatus = 1 WHERE channelNumber = 2";
      	mysqli_query($db,$sql);

      	// Record the Time the appliance is ON     	
      	$appID = $_POST["saveTransAppID2"];

      	$sql = "INSERT INTO transactions(appID, startTime) VALUES (".$appID.", '".date('Y-m-d H:i:s')."')";
      	$result = mysqli_query($db,$sql);
      	/////////////////////////////////////////////


      	// Refresh the Page
      	header("Refresh:0");
      	/////////////////////////////////////////////

	}
	if (isset($_POST['ch2OFF']))
	{
		// Execute the python script
		exec("sudo python /home/pi/ch2off.py");
		/////////////////////////////////////////////

		// Update the Database
		$sql = "UPDATE channel SET channelStatus = 0 WHERE channelNumber = 2";
      	mysqli_query($db,$sql);
      	/////////////////////////////////////////////

      	// Record the Time the appliance is ON
      	$appID = $_POST["saveTransAppID2"];

      	$sql = "UPDATE transactions SET endTime = '".date('Y-m-d H:i:s')."' WHERE appID = '".$appID."' AND endTime IS NULL";
      	$result = mysqli_query($db,$sql);
      	/////////////////////////////////////////////

      	// Refresh the Page
      	header("Refresh:0");
      	/////////////////////////////////////////////
	}

	//Channel 3
	if (isset($_POST['ch3ON']))
	{
		exec("sudo python /home/pi/ch3on.py");
		$sql = "UPDATE channel SET channelStatus = 1 WHERE channelNumber = 3";
      	mysqli_query($db,$sql);
      	header("Refresh:0");
	}
	if (isset($_POST['ch3OFF']))
	{
		exec("sudo python /home/pi/ch3off.py");
		$sql = "UPDATE channel SET channelStatus = 0 WHERE channelNumber = 3";
      	mysqli_query($db,$sql);
      	header("Refresh:0");
	}

	//Channel 4
	if (isset($_POST['ch4ON']))
	{
		exec("sudo python /home/pi/ch4on.py");
		$sql = "UPDATE channel SET channelStatus = 1 WHERE channelNumber = 4";
      	mysqli_query($db,$sql);
      	header("Refresh:0");
	}
	if (isset($_POST['ch4OFF']))
	{
		exec("sudo python /home/pi/ch4off.py");
		$sql = "UPDATE channel SET channelStatus = 0 WHERE channelNumber = 4";
      	mysqli_query($db,$sql);
      	header("Refresh:0");
	}

	//Channel 5
	if (isset($_POST['ch5ON']))
	{
		exec("sudo python /home/pi/ch5on.py");
		$sql = "UPDATE channel SET channelStatus = 1 WHERE channelNumber = 5";
      	mysqli_query($db,$sql);
      	header("Refresh:0");
	}
	if (isset($_POST['ch5OFF']))
	{
		exec("sudo python /home/pi/ch5off.py");
		$sql = "UPDATE channel SET channelStatus = 0 WHERE channelNumber = 5";
      	mysqli_query($db,$sql);
      	header("Refresh:0");
	}

	//Channel 6
	if (isset($_POST['ch6ON']))
	{
		exec("sudo python /home/pi/ch6on.py");
		$sql = "UPDATE channel SET channelStatus = 1 WHERE channelNumber = 6";
      	mysqli_query($db,$sql);
      	header("Refresh:0");
	}
	if (isset($_POST['ch6OFF']))
	{
		exec("sudo python /home/pi/ch6off.py");
		$sql = "UPDATE channel SET channelStatus = 0 WHERE channelNumber = 6";
      	mysqli_query($db,$sql);
      	header("Refresh:0");
	}

	//Channel 7
	if (isset($_POST['ch7ON']))
	{
		exec("sudo python /home/pi/ch7on.py");
		$sql = "UPDATE channel SET channelStatus = 1 WHERE channelNumber = 7";
      	mysqli_query($db,$sql);
      	header("Refresh:0");
	}
	if (isset($_POST['ch7OFF']))
	{
		exec("sudo python /home/pi/ch7off.py");
		$sql = "UPDATE channel SET channelStatus = 0 WHERE channelNumber = 7";
      	mysqli_query($db,$sql);
      	header("Refresh:0");
	}

	//Channel 8
	if (isset($_POST['ch8ON']))
	{
		exec("sudo python /home/pi/ch8on.py");
		$sql = "UPDATE channel SET channelStatus = 1 WHERE channelNumber = 8";
      	mysqli_query($db,$sql);
      	header("Refresh:0");
	}
	if (isset($_POST['ch8OFF']))
	{
		exec("sudo python /home/pi/ch8off.py");
		$sql = "UPDATE channel SET channelStatus = 0 WHERE channelNumber = 8";
      	mysqli_query($db,$sql);
      	header("Refresh:0");
	}

	//Off ALL
	if(isset($_POST['offAll']))
	{
		exec("sudo python /home/pi/offall.py");
		$sql = "UPDATE channel SET channelStatus = 0";
		mysqli_query($db,$sql);
      	header("Refresh:0");
	}

	/*Get the variables*/
	$picturePath = "";
	$appName = "";
	$appPlace = "";
	$appWatts = "";

	if(isset($_POST['btnAddAppliance']))
	{
		if (isset($_POST['appPic'][0]))
		{
			$picturePath = $_POST['appPic'][0];
		}
		else if (isset($_POST['appPic'][1]))
		{
			$picturePath = $_POST['appPic'][1];
		}
		else if (isset($_POST['appPic'][2]))
		{
			$picturePath = $_POST['appPic'][2];		
		}
		else if (isset($_POST['appPic'][3]))
		{
			$picturePath = $_POST['appPic'][3];
		}
		else if (isset($_POST['appPic'][4]))
		{
			$picturePath = $_POST['appPic'][4];
		}
		else if (isset($_POST['appPic'][5]))
		{
			$picturePath = $_POST['appPic'][5];
		}

		// Check if there's still an available channel

		// Check the number of Channels
		$sql = "SELECT COUNT(*) FROM channel";
		$result = mysqli_query($db,$sql);
		$result = mysqli_fetch_array($result);
		$numberOfChannel = $result[0];


		//Check the number of Appliances
		$sql = "SELECT COUNT(*) FROM appliances";
		$result = mysqli_query($db,$sql);
		$result = mysqli_fetch_array($result);
		$numberOfAppliances = $result[0];

		// Compare
		if ($numberOfAppliances < $numberOfChannel)
		{
			$appName = $_POST['appName'];
			$appPlace = $_POST['appPlace'];
			$appWatts = $_POST['appWatts'];
			$channelNumber = $_POST['channelNumber'];


			$sql = "INSERT INTO appliances(channelNumber, appName, appPlace, appWatts, appPic) VALUES (".$channelNumber.", '".$appName."', '".$appPlace."', ".$appWatts.", '".$picturePath."')";

			// execute command
			mysqli_query($db, $sql);

			echo '<script>alert("Appliance Added Succesfully!");</script>';
			echo '<script>location="home.php"</script>';
			
		}
		else
		{
			echo '<script>alert("All Channles are used!");</script>';
			echo '<script>location="home.php"</script>';		
		}
		
	}


	// Creating template
	if (isset($_POST["saveTemplate"]))
	{
		$templateName = $_POST["templateName"];
		$settings = "";

		// Saving Templates
		// Channel 1
		if (isset($_POST["chSet1"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 2
		if (isset($_POST["chSet2"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 3
		if (isset($_POST["chSet3"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 4
		if (isset($_POST["chSet4"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 5
		if (isset($_POST["chSet5"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 6
		if (isset($_POST["chSet6"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 7
		if (isset($_POST["chSet7"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 8
		if (isset($_POST["chSet8"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 9
		if (isset($_POST["chSet9"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}

		$sql = "INSERT INTO templates(templateName, templateSettings) VALUES ('".$templateName."', '".$settings."')";

		mysqli_query($db,$sql);

	}

	// Activate Template
	if (isset($_GET["templateName"]))
	{
		
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
	
	// Save Edited Template
	if (isset($_POST["saveEditedTemplate"]))
	{
				
		$tmplateName = $_POST["tempName"];
		$settings = "";

		 // Channel 1
		if (isset($_POST["editChSet1"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 2
		if (isset($_POST["editChSet2"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 3
		if (isset($_POST["editChSet3"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 4
		if (isset($_POST["editChSet4"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 5
		if (isset($_POST["editChSet5"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 6
		if (isset($_POST["editChSet6"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 7
		if (isset($_POST["editChSet7"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 8
		if (isset($_POST["editChSet8"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}
		// Channel 9
		if (isset($_POST["editChSet9"]) == "1")
		{
			$settings .= "1";
		}
		else
		{
			$settings .= "0";
		}

		$sql = "UPDATE templates SET templateName = '".$tmplateName."', templateSettings = '".$settings."' WHERE templateName = '".$_POST['hiddenMainTemplateName']."'";

		mysqli_query($db,$sql);

		header("location: home.php");
		
	}

	// Delete A Template
	if (isset($_GET["removeTempName"]))
	{			
		// Find Hash Value
		// Get the has value
		$sql = "SELECT templateName FROM templates";
		$result = mysqli_query($db,$sql);

		while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			if (md5($data["templateName"]) == $_GET['removeTempName'])
			{
				$templateName = $data["templateName"];

				// Delete
				$sql = "DELETE FROM templates WHERE templateName = '".$templateName."'";

				mysqli_query($db,$sql);

				echo '<script>alert("Template Deleted Succesfully!");</script>';
				echo '<script>location="home.php";</script>';
				
			}
		}

	}

	// Delete an Appliance
	if (isset($_GET["removeApplianceName"]))
	{
		// Find Hash Value
		// Get the hash value
		$sql = "SELECT appName FROM appliances";
		$result = mysqli_query($db,$sql);

		while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			if (md5($data["appName"]) == $_GET['removeApplianceName'])
			{
				$appName = $data["appName"];

				// Delete
				$sql = "DELETE FROM appliances WHERE appName = '".$appName."'";

				mysqli_query($db,$sql);

				echo '<script>alert("Appliance Deleted Succesfully!");</script>';
				echo '<script>location="home.php";</script>';
				
			}
		}
	}

	// Edit Appliance
	if (isset($_POST["btnEditAppliance"]))
	{
		$picturePath = "";

		if (isset($_POST['appPic'][0]))
		{
			$picturePath = $_POST['appPic'][0];
		}
		else if (isset($_POST['appPic'][1]))
		{
			$picturePath = $_POST['appPic'][1];
		}
		else if (isset($_POST['appPic'][2]))
		{
			$picturePath = $_POST['appPic'][2];		
		}
		else if (isset($_POST['appPic'][3]))
		{
			$picturePath = $_POST['appPic'][3];
		}
		else if (isset($_POST['appPic'][4]))
		{
			$picturePath = $_POST['appPic'][4];
		}
		else if (isset($_POST['appPic'][5]))
		{
			$picturePath = $_POST['appPic'][5];
		}


		$appID = $_POST["appID"];
		$channelNumber = $_POST["channelNumber"];
		$appName = $_POST["appName"];
		$appPlace = $_POST["appPlace"];
		$appWatts = $_POST["appWatts"];

		$sql = "UPDATE appliances SET channelNumber=".$channelNumber.", appName='".$appName."', appPlace='".$appPlace."', appWatts=".$appWatts.", appPic='".$picturePath."' WHERE appID = '".$appID."'";

		mysqli_query($db,$sql);

		echo '<script>alert("Appliance Edited Successfully!");</script>';
	}

	// Save Schedule
	if (isset($_POST['saveSchedule']))
	{
		$i = 0;
		foreach ($_POST['appID'] as $appID)
		{
			// Get the Variables
			$startTime = $_POST['startTime'][$i];
			$endTime = $_POST['endTime'][$i];

			// Save to Database
			if (!empty($startTime) && !empty($endTime))
			{
				$sql = "INSERT INTO schedules(applianceID, timeStart, timeEnd) VALUES ('".$appID."', '".$startTime."', '".$endTime."')";
				mysqli_query($db,$sql);

				$i++;
			}
			else if (!empty($startTime) && empty($endTime))
			{
				$sql = "INSERT INTO schedules(applianceID, timeStart) VALUES ('".$appID."', '".$startTime."')";
				mysqli_query($db,$sql);

				$i++;
			}
			else if (empty($startTime) && !empty($endTime))
			{
				$sql = "INSERT INTO schedules(applianceID, timeEnd) VALUES ('".$appID."', '".$endTime."')";
				mysqli_query($db,$sql);

				$i++;
			}
			else
			{
				$i++;
			}			
		}

	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>rPi Home</title>
	<!-- Added -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<!-- =============================== -->

	<link rel="stylesheet" type="text/css" href="./css/home.css">
	<link rel="stylesheet" type="text/css" href="./css/toggleSwitch.css">
	<link rel="stylesheet" type="text/css" href="./css/modal.css">
	<link rel="stylesheet" type="text/css" href="./css/pictureCheckbox.css">
	<link rel="stylesheet" type="text/css" href="./css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="./css/span.css">
	<link rel="stylesheet" type="text/css" href="./css/createTemplate.css">
	<link rel="stylesheet" type="text/css" href="./css/body.css">
	<link rel="stylesheet" type="text/css" href="./css/editTemplate.css">
	<link rel="stylesheet" type="text/css" href="./css/modalEditAppliance.css">
		`	
	<link rel="stylesheet" type="text/css" href="./css/mobile.css">
	<link rel="icon" href="./img/rpihome.ico">
	
	<!-- Newly Added -->
	<script src="./js/jquery-3.3.1.min.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/notify.min.js"></script>
	<!-- ============================= -->

 	<script type="text/javascript" src="./js/toggle.js"></script>
	<!-- <script type="text/javascript" src="./js/modal.js"></script> -->
	<script type="text/javascript" src="./js/sidebar.js"></script>
	<script type="text/javascript" src="./js/createTemplate.js"></script>
	<script type="text/javascript" src="./js/editTemplate.js"></script>
	<script type="text/javascript" src="./js/mainImages.js"></script>
	<script type="text/javascript" src="./js/editAppliance.js"></script>
	<script type="text/javascript" src="./js/updateWattage.js"></script>
	
	<script type="text/javascript">
		
		$(document).ready(function() {
			
			function schedule(e) {
				e.preventDefault();
				$.ajax({
					type: 'GET',
					url: 'checker.php?counter=' + $("#counter").val(),
					datatype: 'json',
					success: function(response) {
						var x = $("#counter").val();
						if (x != response)
						{
							window.location.replace("https://https://spathulate-dunlin-4843.dataplicity.io//");
						}
						else
							return false;
					}
				});
			}


			setInterval(schedule, 3000);
		});



	</script>

</head>


<body id="body">
	<input type="hidden" id="counter" value=<?php echo $count; ?>>
	<div class="border">
		<img class="logoRpi" src="./img/rpi.jpg" alt="">
		<button><a class="logout" href="./logout.php">Log Out</a></button>
	</div>
	<img class="logoBG" src="./img/logoBG.png" alt="">
	<div class="mainBody">	
		<?php  
			$sql = "SELECT appID, appName, appPlace, appWatts, appPic, appliances.channelNumber, channelStatus FROM appliances LEFT JOIN channel ON appliances.channelNumber = channel.channelNumber ORDER BY channelNumber";

			if ($result = mysqli_query($db,$sql)) {

				$numRows = mysqli_num_rows($result);

				while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					echo '<div class="imgDiv" onmouseover="showOptions(this)" onmouseleave="hideOptions(this)">
							
							<img id="imgCh1" src="' .$data["appPic"].'">

							<a href="home.php?editApplianceName='.md5($data["appName"]).'" class="editTemplate" name="editTemplate"><i class="fas fa-edit"></i></a> <a href="home.php?removeApplianceName='.md5($data["appName"]).'" class="removeTemplate" name="removeTemplate" onclick="return removeTemplate();"><i class="fa fa-times"></i></a>

							<h4>'. $data["appPlace"] .'</h4>

							<h4 id="wattage'.$data["channelNumber"].'"></h4>

							<h4>Channel: '. $data["channelNumber"] .'</h4>

							<label class="switch">					
								<input type="checkbox" id="ch'.$data["channelNumber"].'" name="ch'.$data["channelNumber"].'" onclick="setTimeout(toogleSwitch'.$data["channelNumber"].', 500)"'; if ($data["channelStatus"] == 1) echo 'checked="checked"'; echo'>
								<span class="slider round"></span>
							</label>
							
							<form method="post" name="formCh'.$data["channelNumber"].'">

							<input type="hidden" name="saveTransAppID'.$data["channelNumber"].'" value="'.$data["appID"].'">
							
							<input type="submit" class="button" id="button'.$data["channelNumber"].'" value='; if ($data["channelStatus"] == 1) echo "OFF"; else echo "ON"; echo' name="'; if ($data["channelStatus"] == 1) echo 'ch'.$data["channelNumber"].'OFF"'; else echo 'ch'.$data["channelNumber"].'ON"'; echo '>
							</form>		
							
						  </div>';
				}

			}


			$sql = "SELECT appID, channelNumber FROM appliances";
			$result = mysqli_query($db,$sql);


			while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				// Get the total of time
				$totalTime = 0;

				$sql2 = "SELECT SUM(TIMESTAMPDIFF(SECOND, startTime, endTime)) AS dateDiff FROM transactions WHERE appID = ".$data["appID"]; 
				$data2 = mysqli_fetch_array(($result2 = mysqli_query($db,$sql2)),MYSQLI_ASSOC);
				$totalTime += $data2["dateDiff"];

				// Get the wattage and multiply it with time
				$sql3 = "SELECT appWatts FROM appliances WHERE appID = '".$data["appID"]."'";
				$data3 = mysqli_fetch_array(($result3 = mysqli_query($db,$sql3)),MYSQLI_ASSOC);
				$wattage = $data3["appWatts"] / 60 / 60;

				$wattageInSecond = $totalTime * $wattage;

				echo '<script> updateWattage('.$data["channelNumber"].', '.round($wattageInSecond/1000, 2).')</script>';
			}
		?>


		<!-- <div class="imgDiv"> -->
			<!-- <a href="#addAppliance">
				<button type="submit">
						<img class="submit" src="./img/add.jpg" alt="">
				</button>
			</a> -->		
		<!-- </div> -->
		<div class="iconButton">
				<a href="#addAppliance">
					<span class="toolTipText">Add Appliance</span>
					<i class="fas fa-plus-circle"></i>
				</a>
		</div>
		
	</div>


	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<form method="POST">
			<div class="templates">
				<h1>Templates</h1>

				<form method="GET">
					<?php

						$sql = "SELECT templateName FROM templates ORDER BY templateID";
						$result = mysqli_query($db,$sql);
						$count = mysqli_num_rows($result);
						
						$i = 1;
						while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

							$templateName = $data["templateName"];
							$removeStr = "";

							if (strlen($templateName) > 12) 
							{
								for ($x = 12; $x < strlen($templateName); $x++) 
								{
									$removeStr .= $templateName[$x];
								}

								$templateName = str_replace($removeStr, "...", $templateName);

							} 

							echo '<a href="home.php?templateName='.$data["templateName"].'" name="template'.$i.'"> '.$i.'. '.$templateName.'</a> <div class="templateOptions"> <a href="home.php?tempName='.md5($data["templateName"]).'" class="editTemplate" name="editTemplate"><i class="fas fa-edit"></i></a> <a href="home.php?removeTempName='.md5($data["templateName"]).'" class="removeTemplate" name="removeTemplate" onclick="return removeTemplate();"><i class="fas fa-times"></i></a></div>';
								$i++;
						}		
					?>						
				</form>	

			</div>
			<div id="btnCreateTemplate">
				<h4> <a href="#createTemplate" onclick="openCreateTemplate()">Create Template...</a> </h4>
			</div>
			<div id="btnCreateSchedule">
				<h4> <a href="#createSchedule" onclick="openCreateSchedule()">Create Schedule...</a> </h4>
			</div>
		</form>
	</div>	
	

	

		<button class="openSideBar" id="openSideBar" onclick="openNav()">
			<div>
				<img class="divmenu" src="./img/divmenu.jpg" alt="">
				<img class="openSideBar" src="./img/menu.png" alt="">
			</div>
		</button>

	
	<div id="addAppliance" class="modalDialog">
		<div class="modal-content">

			<div class="inputs">
				<a href="#close" title="Close" class="close" id="close">X</a>
				<form method="POST">
					

					<!-- <input type='checkbox' name='aircon' value='./img/aircon.png' id="aircon" /><label for="aircon" id="aircon"><img src="./img/aircon.png" alt=""></label>

					<input type='checkbox' name='charge' value='./img/charge.png' id="charge"/><label for="charge"><img src="./img/charge.png" alt=""></label>

					<input type='checkbox' name='fan' value='./img/fan.png' id="fan"/><label for="fan"><img src="./img/fan.png" alt=""></label>

					<input type='checkbox' name='light' value='./img/light.png' id="light"/><label for="light"><img src="./img/light.png" alt=""></label>

					<input type='checkbox' name='ref' value='./img/ref.png' id="ref"/><label for="ref"><img src="./img/ref.png" alt=""></label>

					<input type='checkbox' name='tv' value='./img/tv.png' id="tv"/><label for="tv"><img src="./img/tv.png" alt=""></label> -->


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

					<!-- ============================================== -->

					<hr>

					<label for="appName" class="firstTxtBox">Appliance Name:
						<input type="text" name="appName">
					</label>
					<label for="appPlace">Appliance Location:
						<input type="text" name="appPlace">
					</label>
					<label for="appWatts">Appliance Wattage:
						<input type="text" name="appWatts">
					</label>
					

					<!--Drop of all available channels-->
					<label for="channelNumber">Channel Number:
						<select class="channelNumber" name="channelNumber">
						<?php  
							$sql = "SELECT channelNumber FROM channel WHERE channelNumber NOT IN (SELECT channelNumber FROM appliances)";
							$result = mysqli_query($db, $sql);
							while ($data = mysqli_fetch_array($result))
							{
								echo '<option value="'. $data["channelNumber"] .'">Channel '. $data["channelNumber"] .'</option>';
							}
						?>				
						</select>
					</label>
				
					<input class="btnAddAppliance" type="submit" value="Add Appliance" name="btnAddAppliance">
				</form>
				<script type="text/javascript">checkRad();</script>
			</div>

		</div>
	</div>

	<div id="background">
		<div id="createTemplate">
			<div>

				<form action="home.php" method="POST">
					<div class="upperForm">
						<?php 
							$sql = "SELECT appID, appName, appPlace, appWatts, appPic, appliances.channelNumber, channelStatus FROM appliances LEFT JOIN channel ON appliances.channelNumber = channel.channelNumber ORDER BY channelNumber";
								
							if ($result = mysqli_query($db,$sql)) {
								
								$numRows = mysqli_num_rows($result);		
								
								$i = 1;
								while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
									echo '<div class="imgDiv">
											
											<img id="imgCh1" src="' .$data["appPic"].'">
								
											<h4>'. $data["appPlace"] .'</h4>
								
											<label class="switch">					
												<input type="checkbox" id="ch'.$i.'" name="chSet'.$data["channelNumber"].'"'; if ($data["channelStatus"] == 1) echo 'checked="checked" value="1"'; echo'>
												<span class="slider round"></span>
											</label>																	
										  </div>';
									$i++;
								}
							}  
								
								
						?>
					</div>
					<div class="saveButton">				
						<input type="text" name="templateName">
						<button type="submit" name="saveTemplate">Save</button>
						<button onclick="closeAll()">Exit</button>
					</div>
						
				</form>
		
				
		
			</div> 
		</div>
	</div>

	<div id="editTemplateBG">
		<div id="editTemplate">
			<div>

				<form action="home.php" method="POST">
					<div class="upperFormedit">						
						<?php
							// Edit Template 
							$loadTemplateSettings = "";

							if (isset($_GET["tempName"]))
							{
								// Get the has value
								$sql = "SELECT templateName FROM templates";
								$result = mysqli_query($db,$sql);
								
								while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC))
								{
									if (md5($data["templateName"]) == $_GET['tempName'])
									{
										$templateName = $data["templateName"];

										echo '<input type="hidden" name="hiddenMainTemplateName" value="'.$templateName.'">';
										
									}
								}

								$sql = "SELECT templateSettings FROM templates WHERE templateName = '".$templateName."'";
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

									echo '<script type="text/javascript"> openEditTemplate(); </script>';
								}
							}

						?>
					</div>
					<div class="saveButtonedit">									
						<input type="text" name="tempName">
						<button type="submit" name="saveEditedTemplate">Save</button>
						<button>Exit</button>
					</div>
						
				</form>
				
			</div> 
		</div>
	</div>

	<div id="EditAppliance" class="modalEditApplianceDialog">
		<div class="modalEditAppliance-content">

			<?php
				// Edit Template 
				$loadApplianceSettings = "";

				if (isset($_GET["editApplianceName"]))
				{	

					// Get the hash value
					$sql = "SELECT appID, channelNumber, appName, appPlace, appWatts, appPic FROM appliances";
					$result = mysqli_query($db,$sql);
					
					while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC))
					{
						if (md5($data["appName"]) == $_GET['editApplianceName'])
						{
							$appName = $data["appName"];
							$appPlace = $data["appPlace"];
							$appWatts = $data["appWatts"];
							$appPic = $data["appPic"];
							$channelNumber = $data["channelNumber"];
							$appID = $data["appID"];
										
						}


					}

					echo '<script type"text/javascript">showModalEditAppliance();</script>';

				}						

			?>	

			<div class="inputs">
				<a href="home.php" title="Close" class="close" id="close">X</a>
				<form action="home.php" method="POST">

					<input type="hidden" name="appID" value=<?php echo '"'.$appID.'"'; ?>>
					
					<label id="aircon" for="aircon" class="radio" onclick="checkRadio(this)">
						<img src="./img/aircon.png" alt="">
						<input type='radio' name='appPic[]' value='./img/aircon.png' id="aircon" <?php if ($appPic == "./img/aircon.png") echo 'checked="checked"'; ?>/>
					</label>
					
					<label for="charge" class="radio" onclick="checkRadio(this)">
						<img src="./img/charge.png" alt="">
						<input type='radio' name='appPic[]' value='./img/charge.png' id="charge" <?php if ($appPic == "./img/charge.png") echo 'checked="checked"'; ?>/>
					</label>

					<label for="fan" class="radio" onclick="checkRadio(this)">
						<img src="./img/fan.png" alt="">
						<input type='radio' name='appPic[]' value='./img/fan.png' id="fan" <?php if ($appPic == "./img/fan.png") echo 'checked="checked"'; ?>/>
					</label>
					
					<label for="light" class="radio" onclick="checkRadio(this)">
						<img src="./img/light.png" alt="">
						<input type='radio' name='appPic[]' value='./img/light.png' id="light" <?php if ($appPic == "./img/light.png") echo 'checked="checked"'; ?>/>
					</label>

					<label for="ref" class="radio" onclick="checkRadio(this)">
						<img src="./img/ref.png" alt="">
						<input type='radio' name='appPic[]' value='./img/ref.png' id="ref" <?php if ($appPic == "./img/ref.png") echo 'checked="checked"'; ?>/>
					</label>

					<label for="tv" class="radio" onclick="checkRadio(this)">
						<img src="./img/tv.png" alt="">
						<input type='radio' name='appPic[]' value='./img/tv.png' id="tv" <?php if ($appPic == "./img/tv.png") echo 'checked="checked"'; ?>/>
					</label>
					
					<hr>

					<label for="appName" class="firstTxtBox">Appliance Name:
						<input type="text" name="appName" value=<?php echo '"'.$appName.'"' ?>>
					</label>
					<label for="appPlace">Appliance Location:
						<input type="text" name="appPlace" value=<?php echo '"'.$appPlace.'"' ?>>
					</label>
					<label for="appWatts">Appliance Wattage:
						<input type="text" name="appWatts" value=<?php echo '"'.$appWatts.'"' ?>>
					</label>
					<label for="channelNumber">Channel Number:
						<input type="text" name="channelNumber" value=<?php echo '"'.$channelNumber.'"' ?>>
					</label>
				
					

					<input class="btnEditAppliance" type="submit" value="Save" name="btnEditAppliance">
				</form>
				<script type="text/javascript">checkRad();</script>
			</div>

		</div>
	</div>

	
	<!-- Create Schedule -->
	<div id="">
		<div id="createSchedule">
			<div>

				<form action="home.php" method="POST">
					<div class="upperForm">
						<?php 
							$sql = "SELECT appID, appName, appPlace, appWatts, appPic, appliances.channelNumber, channelStatus FROM appliances LEFT JOIN channel ON appliances.channelNumber = channel.channelNumber ORDER BY channelNumber";
								
							if ($result = mysqli_query($db,$sql)) {
								
								$numRows = mysqli_num_rows($result);		
								
								$i = 1;
								while ($data = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
									echo '<div class="imgDiv">
											
										<div class=	
											<img id="imgCh1" src="' .$data["appPic"].'">

											<input type="hidden" value = "'.$data['appID'].'" name="appID[]">
								
											<h4>'. $data["appPlace"] .'</h4>
										</div>
								
										
											<label>ON</label>
											<input type="datetime-local" name="startTime[]">
											<br>
											<label>OFF</label>
											<input type="datetime-local" name="endTime[]">
										
					
										  </div>';
									$i++;
								}
							}  
								
								
						?>
					</div>
					<div class="saveButton">
						<button type="submit" name="saveSchedule">Save</button>
						<button onclick="closeAll()">Exit</button>
					</div>
						
				</form>
		
				
		
			</div> 
		</div>
	</div>

	

</body>
</html>