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
$isEmailValid = $val->validateEmail($email);
$isFirstnameValid = $val->validateNames($firstname);
$isLastnameValid = $val->validateNames($lastname);

if($isFirstnameValid == 0 || $isLastnameValid == 0){
  $_SESSION['message'] = "Invalid name. Check your first and last name";
  header("Location: signup.php");
  exit;
}

if($isPassValid == 0){
  $_SESSION['message'] = "Password must be of at least 8 characters and Atleast one upper and one lower case letter\n";
  header("Location: signup.php");
  exit;
}

if($isEmailValid == 0){
  $_SESSION['message'] = "Invalid email";
  header("Location: signup.php");
  exit;
}

require_once 'Dao.php';
$dao = new Dao();
$dao->createUser($username, $firstname, $lastname, $email, $password);
header("Location: index.php");
exit;

?>
