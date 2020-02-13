<?php
session_start();

$comment = $_POST['commentBox'];
$comment = trim($comment);

if(!empty($comment)){


  $postID = -1;
// get the selected post for adding comment
  foreach($_SESSION['idvar'] as $btName){
    $name = "button" . ($btName - 1);
    if(isset($_POST[$name])){
      $postID = $_SESSION['idvar'][$name];
    }
  }

  if($postID != -1){
    require_once 'Dao.php';
    $dao = new Dao();
    $dao->saveComment((int)$postID, $comment, $_SESSION['user']);
    header("Location: home.php");
    exit();
  }

} else {
  exit();
}

 ?>
