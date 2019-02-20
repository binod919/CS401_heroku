
  <html>
  <head>
   <link rel="stylesheet" href="signup.css" >
  </head>
  <title>Sign UP</title>

  <?php include_once "header.php"; ?>

    <body>
    <div class="signupform">
    	<form method="post">
    		<p> Join Share My Writings </p>
    		<div> <input type="text" id="username_tb" name="username" placeholder="Username"></div>
        <div> <input type="text" id="email_tb" name="email" placeholder="Email"></div>
    		<div> <input type="password" id="pass_tb" name="password" placeholder="Password"> </div>
    		<div> <input type="submit" id="signupButton" value="Sign Up"> </div>
    	</form>

    </div>

    <div id = "footer" > <?php include_once "footer.php" ; ?>
    </div>
    </body>

  </html>
