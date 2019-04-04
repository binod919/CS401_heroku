<?php

  session_start();

  $loginUsername = $_POST['username'];
  $loginPassword = $_POST['password'];

  echo $loginUsername ;

  require 'Dao.php';

  $dao = new Dao();
  $user = $dao->getUser($loginUsername);
  
  $uName = ""; $pass = "";

  foreach ($user as $row) {
    $uName = $row["Username"];
    $pass = $row["Password"];
  }

  if($loginPassword !== $pass || $userName !== $uName ){
    $_session['message'] = "User name or password is incorrect.";
    header("Location: index.php");
    exit;
  }
 ?>
