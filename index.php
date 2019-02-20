<html>

<head>
	<link rel="stylesheet" href="login1.css">
</head>

<?php include_once "header.php"; ?>

<body>
<div class="loginForm">
	<form method="post">
		<p> Login to Share My writings </p>
		<div> <input type="text" id="username_tb" name="username" placeholder="Username or Email"></div>
		<div> <input type="password" id="pass_tb" name="password" placeholder="Password"> </div>
		<div> <input type="submit" id= "loginButton" value="Login"> </div>
	</form>

</div>

<div id= "footer" >  <?php include_once "footer.php"; ?>
</div>
</body>
</html>
