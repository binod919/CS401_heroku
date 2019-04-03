<?php

  session_start();

  $loginUsername = $_POST['username'];
  $loginPassword = $_POST['password'];

  echo $loginUsername ;

  require 'Dao.php';
  $dao = new Dao();
  $user = $dao->getUser($loginUsername);
  echo $user['username'];
  foreach ($user as $row) {
    echo "inhere";
    echo htmlspecialchars($row['username']);
  }

  //if($user->num_rows > 0){
    //echo "inuser";
/*  while ($row = $user->FETCH_ASSOC()){
    echo "username entered:" . $row['Username'];
    echo "new line";
  }*/
//} else {echo "error";}

 ?>
