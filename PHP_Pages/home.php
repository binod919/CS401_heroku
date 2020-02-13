<?php
session_start();

$_SESSION['thisPage'] = "home";

if($_SESSION['loggedin'] != TRUE){
$_SESSION['message'] = "You must login First.";
header("Location: index.php");
exit;
}
?>

<html>

<head> <link rel= "stylesheet" href="home.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="js/post.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<title> Home </title>
<body>

  <div class = "head"><?php include_once "header.php"; ?>
  </div>


<div class = "container1" >

<?php
require_once "Dao.php";
$dao = new Dao();
$posts = $dao->getPosts();
$var = array();
$i = 0;
foreach ($posts as $post ) {
  $bname = "button". $i;
  $var[$bname] = $post['postID'];
  $i = $i + 1;
  echo "<div class = miniContainer>";
    echo "<div class = postContainer>";
    echo "<h3>" .$post['username'] . "</h3>";
        echo "<div class= post>" .htmlentities($post['post']) . "</div>";

    echo "</div>";

    echo "<div class = commentContainer>";

    $comments = $dao-> getThisComment((int)$post['postID']);

    foreach($comments as $comment){
      echo "<h3>" . $comment['Username'] ."</h3>";
      echo "<div class = commentDiv>" .htmlentities($comment['Comment']) . "</div>";
    }


    echo "</div>";

    echo"<form class = commentForm method= post action= commentHandler.php>";

    echo "<input class= commentTb type = text name = commentBox placeholder = Comment>";
    echo "<input class = commentBt type = submit name = $bname value = Submit>";

    echo"</form>";

  echo "</div>";





}
$_SESSION['idvar'] = $var;
 ?>

</div>

<div class = "container2">

<div class = "button" >
Create a post
</div>

</div>


<div class = "postDivcontainer">
  <div class = "postDiv">

    <div class = "postCreate" > Create a post </div>
    <div class = "close"> + </div>

    <form method = "post" action="postHandler.php">
    <textarea class = "textbox" name = "postContent"placeholder="Write something..." autofocus>
    </textarea>
      <input type="submit" class = "postButton" value = "Post" >
  </form>


  </div>

</div>


</body>
<footer class = "foot" ><?php include_once "footer.php"; ?> </footer>

</html>
