<?php
   include("db.php");
   session_start();

   if(isset($_SESSION['login_user']))
   {
      header("location: newHome.php");
   }  


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         $_SESSION['login_user'] = $username;
         
         header("location: newHome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
        echo '<script type="text/javascript"> alert ("'.$error.'")</script>';
      }
   }
?>








<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Raspberry Pi Home</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="./css/bootstrap.min.css">


	<script src="./js/jquery-3.3.1.min.js"></script>
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</head>
<body>


  <div class="container">
      <br><br><h2>WELCOME to Raspberry Pi Home</h2><br>
    
      <!-- Button to Open the Modal -->
      <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#myModal">Have an Account?</button>
  </div>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          

			<div class="container">
		  		<form action="newHome.php">
		    		<div class="form-group">
		      			<label for="usr">Username</label>
		      			<input type="text" class="form-control" id="usr" name="username">
		    		</div>
		    		<div class="form-group">
		      			<label for="pwd">Password</label>
		      			<input type="password" class="form-control" id="pwd" name="password">
		    		</div>
		    		<center><button type="submit" class="btn btn-primary">Submit</button>
		  		</form>
			</div>
        </div>
        
        
      </div>
    </div>
  </div>
  
</div>



	


</body>
</html>