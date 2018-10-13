<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>rPi Home</title>
	<link rel="icon" href="./img/rpihome.ico">
	<!-- MAIN LIBRARIES -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./fontawesome/css/all.css">
	<script src="./js/jquery-3.3.1.min.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/notify.min.js"></script>
	<!-- =============== -->

	<!-- ADDED -->
	<script src="./js/OnAndOffAppliances.js"></script>
	<!-- =============== -->

</head>
<body>

	<div class="container-fluid">
		
		
		<div id="contentHolder">
			
			<?php include './php/Appliances.php'; ?>

		</div>


	</div>
	
</body>
</html>