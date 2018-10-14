<?php  
  include './db.php';
  session_start();

  if(isset($_SESSION['login_user']))
  {
    header("location: newHome.php");
  }  

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to Raspberry Pi Home</title>
  <link rel="icon" href="./img/rpihome.ico">
	
	<!-- MAIN LIBRARIES -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery-3.3.1.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/notify.min.js"></script>
  <!-- =============== -->
</head>
<body>


<div class="container">
  <br><br><h2>WELCOME to Raspberry Pi Home</h2><br>

  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#loginmodal">Have an Account?</button>

  <button type="button" class="btn btn-link" data-toggle="modal" data-target="#contactadmin">No</button>

<!-- The Modal -->
<div class="modal fade" id="loginmodal">
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
          <form>
            <div class="form-group">
              <label for="usr">Username</label>
              <input type="text" class="form-control" id="usr" name="username">
            </div>
            <div class="form-group">
              <label for="pwd">Password</label>
              <input type="password" class="form-control" id="pwd" name="password">
            </div>
            <center>
              <input id="login" type="button" class="btn btn-primary" value="Submit">
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="contactadmin">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Administrator permission required</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
          <p>Contact your administrator to Register</p>
        </div>
      </div>
    </div>
  </div>
</div>  


</body>
</html>

<script>
  $(document).ready(function($) {
    $("#login").click(function(event) {
      $.post('./php/Login.php', {username: $("#usr").val(), password: $("#pwd").val()}, function(data) {
          var _data = JSON.parse(data);

          if (_data == "fail") {
            $.notify("Login Failed!", {position: "top center", className: "error"});
          }
          else {
            $.notify("Login Successful!", {position: "top center", className: "success"});

            setTimeout(function() {
              window.location.href = "./newHome.php";
            }, 1000);   
          }
      });
    });
  });

</script>