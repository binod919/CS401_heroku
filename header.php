
<?php
	session_start();
	?>

<html>

<head>
	<link rel="stylesheet" href="header.css">
</head>
<div class="header">
	<img src="Logo.png" alt = "Logo" class="logo">
	<div class="header-right">
		<a class="active" href="home.php"> Home </a>
		<a href="signup.php"> Sign Up </a>
    <a href="index.php">Login </a>
		<a href="index.php"> Logout </a>
		<input id="searchBox" type="text" placeholder="Search" name="search"> </input>
		<button id="searchButton" type="submit" name="Search"> <i class="searchBox"> </i> </button>
	</div>
</div>
</html>
