<?php
session_start();

$postContent = $_POST['postContent'];
$postContent = trim($postContent);


if(isset($postContent)){

  require_once 'Dao.php';
  $dao = new Dao();
  $dao->createPost($postContent, $_SESSION['user']);

  header("Location: home.php");
  exit();
} else {
  $_SESSION['message'] = "Write something to post!";
  exit();
}

 ?>
