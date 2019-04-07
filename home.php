<?php
session_start();

$_SESSION['thispage'] = "home";

if($_SESSION['loggedin'] != TRUE){
$_SESSION['message'] = "You must login First.";
header("Location: index.php");
exit;
}
?>

<html>

<head> <link rel= "stylesheet" href="home.css" >
</head>

<title> Home </title>

<?php include_once "header.php"; ?>

<body>

<div class = "bigContainer" >

<div class = "container1" >

  <div> <p> Content Goes Here. </p> </div>

  <div> <p> Content Goes Here. </p> </div>
  <div> <p> Content Goes Here. </p> </div>

  <div> <p> Content Goes Here. </p> </div>

</div>


<div class = "container2">


</div>

</div>



</body>

<div id = "footer"> <?php include_once "footer.php"; ?> </div>
</html>
