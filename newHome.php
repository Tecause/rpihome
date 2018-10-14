<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	
	<!-- ADDED CSS -->
	<link rel="stylesheet" type="text/css" href="./css/home.css">
	<link rel="stylesheet" type="text/css" href="./css/body.css">
	<link rel="stylesheet" type="text/css" href="./css/toggleSwitch.css">
	<!-- =============== -->

	<!-- ADDED JS -->
	<script src="./js/OnAndOffAppliances.js"></script>
	<script type="text/javascript" src="./js/mainImages.js"></script>
	<!-- =============== -->


</head>
<body>

	

	<nav class="navbar navbar-expand-sm bg-info navbar-light sticky-top">
		<div class="navbar-brand" href="#">
			<img src="./img/rpi.jpg" alt="Logo" style="width:40px;">
		</div>
			<ul class="navbar-nav font-weight-bold">
			    <li class="nav-item">
			    	<a class="nav-link" href="#">Digital Switch</a>
			    </li>
			    <li class="nav-item">
			     	<a class="nav-link" href="#">Templates</a>
			    </li>
			    <li class="nav-item">
			     	<a class="nav-link" href="#">Scheduling</a>
			    </li>
			</ul>

                          
			<div class="dropdown">
		    	<button class="btn btn-info font-weight-bold dropdown-toggle" type="button" data-toggle="dropdown">Settings<span class="caret"></span></button>
		    	<ul class="dropdown-menu">
			      	<li><a data-toggle="modal" data-target="#changepassword" href="#">Change Password</a></li>
			      	<li><a data-toggle="modal" data-target="#adduser" href="#">New user</a></li>
		   		</ul>
			</div>
	

			<a id="logout" class="nav-link ml-auto" href="./newIndex.php">Logout</a> 
	</nav>



<div class="modal fade" id="changepassword">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Change Password</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="container">
						<form action="newHome.php">
							<div class="form-group">

								<label for="usr">Old Password</label>
								<input type="text" class="form-control" id="oldpassword" name="oldpassword">
							</div>
							<div class="form-group">
								<label for="pwd">New Password</label>
								<input type="password" class="form-control" id="newpassword" name="newpassword">
							</div>
							<div class="form-group">
								<label for="pwd">Verify New Password</label>
								<input type="password" class="form-control" id="verify" name="verify">
							</div>
						<center><button type="submit" class="btn btn-primary">Submit</button></center>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="modal fade" id="adduser">
    <div class="modal-dialog modal-dialog-centered">
    	<div class="modal-content">
      
	        <!-- Modal Header -->
	        <div class="modal-header">
	          <h4 class="modal-title">Add New User</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        
	        <!-- Modal body -->
	        <div class="modal-body">
	        	<div class="container">
	  		  		<form action="newHome.php">
	  		  			<div class="form-group">
	  		      			<label for="pwd">Administrator Password</label>
	  		      			<input type="password" class="form-control" id="adminpassword" name="adminpassword">
	  		    		</div>
	  		  			<div class="form-group">
	  		      			<label for="usr">Name</label>
	  		      			<input type="text" class="form-control" id="name" name="name">
	  		    		</div>
	  		    		<div class="form-group">
	  		      			<label for="usr">Username</label>
	  		      			<input type="text" class="form-control" id="username" name="username">
	  		    		</div>
	  		    		<div class="form-group">
	  		      			<label for="pwd">Password</label>
	  		      			<input type="password" class="form-control" id="password" name="password">
	  		    		</div>
	  		    		<center><button type="submit" class="btn btn-primary">Submit</button></center>
	  		  		</form>
	  		  	</div>
	  		</div>
		</div>
	</div>
</div>
        


<!-- ================================================================ -->

	<div class="container-fluid">
		
		
		<div id="contentHolder">
			
			<?php include './php/Appliances.php'; ?>

		</div>


	</div>
	
</body>
</html>