<?php session_start(); ?>
<html>

<head>
	<link rel="stylesheet" href="login1.css">
</head>

<?php include_once "header.php"; ?>

<body>
<div class="loginForm">
	<form method="post" action = "loginHandler.php">
		<p> Login to Share My writings </p>
		<div> <input type="text" id="username_tb" name="username" placeholder="Username or Email"></div>
		<div> <input type="password" id="pass_tb" name="password" placeholder="Password"> </div>
		<div> <input type="submit" id= "loginButton" value="Login"> </div>
	</form>
	<?php

	if (isset($_SESSION['message'])) {
	    echo "<div>" .$_SESSION['message'] ."</div>";
	}
	unset($_SESSION['message']);
	?>
	<a href = "signup.php"> Don't have an account? </a>
</div>
</body>
<footer>
<div id= "footer" >  <?php include_once "footer.php"; ?> </div>
</footer>
</html>
