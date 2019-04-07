<?php

  session_start();

  $loginUsername = $_POST['username'];
  $loginPassword = $_POST['password'];

  if(strlen($loginUsername) === 0 || (strlen($loginPassword)) === 0){
    $_SESSION['message'] = "Enter your Username and Password";
    header("Location: index.php");
    exit;
  }

  require_once 'Dao.php';
  $dao = new Dao();
  $user = $dao->getUser($loginUsername);

  $row_count = $user->rowCount();

 if ($row_count <  1){
    $_SESSION['message'] = "Invalid Username and Password.";
    header("Location: index.php");
    exit;
  }

  $uName = "";
  $pass = "";

  foreach ($user as $row) {
    $uName = $row["Username"];
    $pass = $row["Password"];
  }

  if($loginUsername == $uName && $loginPassword === $pass ){
    $_SESSION['loggedin'] = TRUE;
    header("Location: home.php");
    exit;

  } else {
    $_SESSION['message'] = "Invalid Username and Password";
    header("Location: index.php");
    exit;
  }
 ?>
