
<?php
	session_start();
	?>

<html>

<head>
	<link rel="stylesheet" href="header.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="js/logout.js"></script>
</head>
<div class="header">
	<img src="logo.png" alt = "Logo" class="logo">
	<div class="header-right">

		<?php
		if(isset($_SESSION['thisPage']) && $_SESSION['thisPage']=== "home"){
			echo '<a class="thisRef" href="home.php"> Home </a>
			<a href="signup.php"> Sign Up </a>
	    <a href="index.php">Login </a>
			<a class = "logout" href="index.php"> Logout </a>';
		}else if(isset($_SESSION['thisPage']) && $_SESSION['thisPage']=== "signup"){
			echo '<a class="active" href="home.php"> Home </a>
			<a class = "thisRef" href="signup.php"> Sign Up </a>
	    <a href="index.php">Login </a>
			<a class = "logout" href="index.php"> Logout </a> ';
		} else if(isset($_SESSION['thisPage']) && $_SESSION['thisPage']=== "login"){
			echo '<a class="active" href="home.php"> Home </a>
			<a href="signup.php"> Sign Up </a>
			<a class = "thisRef" href="index.php">Login </a>
			<a class = "logout" href="index.php"> Logout </a> ';
		}else {

		echo '<a class="active" href="home.php"> Home </a>
		<a href="signup.php"> Sign Up </a>
    <a href="index.php">Login </a>
		<a href="index.php"> Logout </a>';
}
		?>


	</div>
</div>
</html>
