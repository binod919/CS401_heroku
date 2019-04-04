<?php
session_start();

$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$rePassword = $_POST['rePassword'];

if ($password !== $rePassword){
  echo "password do not match";
  exit;
}

require_once 'Dao.php';
$dao = new Dao();
$dao->createUser($username, $firstname, $lastname, $email, $password);
header("Location: index.html");
?>
