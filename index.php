<?php
   include("db.php");
   session_start();

   if(isset($_SESSION['login_user']))
   {
      header("location: home.php");
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
         
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
        echo '<script type="text/javascript"> alert ("'.$error.'")</script>';
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thesis</title>
   <!-- Added -->
   <link rel="stylesheet" href="./css/bootstrap.min.css">
   <!-- ========================= -->
   <link rel="stylesheet" href="./css/login.css">
   <link rel="icon" href="./img/rpihome.ico">
   <link rel="stylesheet" type="text/css" href="./css/mobilelogin.css">

   <!-- Newly Added -->
   <script src="./js/jquery-3.3.1.min.js"></script>
   <script src="./js/popper.min.js"></script>
   <script src="./js/bootstrap.min.js"></script>
   <script src="./js/notify.min.js"></script>
   <!-- ============================= -->
</head>
<wrapper>
<body>
	<div class="container">
      </div>
		<div class="login">
         <div class="loginHeader">
            <img src="./img/rpi.jpg" class="Avatar" alt="">
         </div>
         <div class="headerlogin"><h1>LOGIN</h1></div>
         <div class="loginFields">
            <form action="" method="POST">
               <input type="text" name="username" placeholder="Username">
               <input type="password" name="password" placeholder="Password">
               <div class ="loginbutton">
                  <button class="btn btn-primary font-weight-bold" type="submit">Login</button>
               </div>
            </form>
         </div>
      </div>
<footer>
   <div>
      <p class="developers">Raspberry Pi Home for Thesis purposes made by <a class="footer" href="https://www.facebook.com/Tecause">Tecause</a> and <a class="footer" href="https://www.facebook.com/Luminous13">Luminous.</a></p>
   </div>
   <hr>
   <div>
      <p class="copy">Rpi home &copy 2018</p>
   </div>
</footer>
</body>
</wrapper>
</html>

<script>
   
   $(document).ready(function($) {
      $(".copy").click(function(event) {
         $.notify("You Clicked me!", "info")
      });
   });


</script>