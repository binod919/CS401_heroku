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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="js/post.js"></script>
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

foreach ($posts as $post ) {
  echo "<div>" .htmlentities($post['post']) . "</div>";
}

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
