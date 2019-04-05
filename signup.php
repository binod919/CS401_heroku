<?php session_start() ?>
  <html>
  <head>
   <link rel="stylesheet" href="signup.css" >
  </head>
  <title>Sign UP</title>

  <?php include_once "header.php"; ?>

    <body>
    <div class="signupform">
    	<form method="POST" action= "signupHandler.php" enctype="multipart/form-data">
    		<p> Join Share My Writings </p>
    		<div> <input type="text" id="username_tb" name="username" placeholder="Username"></div>
        <div> <input type="text" id="firstname_tb" name="firstname" placeholder="Firstname"></div>
        <div> <input type="text" id="lastname_tb" name="lastname" placeholder="Lastname"></div>
        <div> <input type="text" id="email_tb" name="email" placeholder="Email"></div>
    		<div> <input type="password" id="pass_tb" name="password" placeholder="Password"> </div>
        <div> <input type ="password" id = "pass_tb" name = "rePassword" placeholder="Retype Password"> </div>
    		<div> <input type="submit" id="signupButton" value="Sign Up"> </div>
    	</form>
      <?php if (isset($_SESSION['message'])) {
        //echo " is set";
        echo "<div>" .$_SESSION['message'] ."</div>";
      }
      unset($_SESSION['message']);
      ?>
    </div>

    <div id = "footer" > <?php include_once "footer.php" ; ?>
    </div>
    </body>

  </html>
