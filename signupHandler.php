<?php
session_start();

$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$rePassword = $_POST['rePassword'];

if ($password !== $rePassword){
  $_SESSION['message'] = "Password do not match.";
  header("Location: signup.php");
  exit;
}

require_once 'validation.php';
$val = new validation();
$isPassValid = $val->validatePassword($password);
//echo $isPassValid;
if($isPassValid == 0){
  //echo "in if";
  $_SESSION['message'] = "Password must be of at least 8 characters and Atleast one upper and one lower case letter\n";
  header("Location: signup.php");
  exit;
}

//echo " in here";
require_once 'Dao.php';
echo " in here too";
$dao = new Dao();
//echo " inhere3";
$dao->createUser($username, $firstname, $lastname, $email, $password);
echo "success";
header("Location: index.php");
exit;

?>
