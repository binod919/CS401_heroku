<?php

  class Dao {

	  private $host = "us-cdbr-iron-east-03.cleardb.net";
	  private $db = "heroku_e77f4cf194c9188";
	  private $user = "b3fa24cf81af32";
	  private $pass = "28a3e86e";

  public function getConnection () {
  // $this->logger->LogDebug("Getting a connection.");
   try {
     //echo " making conn";
     $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
           $this->pass);
   } catch (Exception $e) {
     //$this->logger->LogError(__CLASS__ . "::" . __FUNCTION__ . " The database exploded " . print_r($e,1));
     echo "<pre>" . print_r($e,1) . "</div>";
     exit;
   }
   return $conn;
 }

  public function createUser ($userName,$firstName, $lastName, $email, $password){
    $conn = $this->getConnection();
    $saveQuery = "INSERT INTO user(Username, Firstname, Lastname, Email, Password) VALUES (:username, :firstname, :lastname, :email, :password)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":username", $userName);
    $q->bindParam(":firstname", $firstName);
    $q->bindParam(":lastname", $lastName);
    $q->bindParam(":email", $email);
    $q->bindParam(":password", $password);
    $q->execute();
  }

  public function createPost($post, $user){
    $conn = $this-> getConnection();
    $postQuery = "INSERT INTO posts(post, username) VALUES (:post, :username)";
    $q = $conn-> prepare($postQuery);
    $q->bindParam(":post", $post);
    $q->bindParam(":username", $user);
    $q->execute();
  }

  public function getUser ($userName) {
    $conn = $this->getConnection();
    $q = "SELECT * FROM user WHERE Username = \"{$userName}\"";
    $q = $conn->query($q, PDO::FETCH_ASSOC);
    return $q;
  }

  public function getPosts () {
    $conn = $this->getConnection();
    $q = "SELECT post FROM posts order by datecreated DESC";
    $q = $conn->query($q, PDO::FETCH_ASSOC);
    return $q;
  }

  public function getThisComment($postID){
  //  $_SESSION['meg'] = gettype($postID);
    $conn = $this->getConnection();
    $q = "SELECT * from comments where CommentID = {$postID}";
    $q = $conn->query($q, PDO::FETCH_ASSOC);
    return $q;
  }

  public function saveComment($postId, $comment, $username){
    $conn = $this-> getConnection();
    $commentQuery = "INSERT INTO comments(CommentID, Comment, Username) VALUES (:CommentID,:Comment, :Username)";
    $q = $conn-> prepare($commentQuery);
    $q->bindParam(":CommentID", $postId);
    $q->bindParam(":Comment", $comment);
    $q->bindParam(":Username", $username);
    $q->execute();
  }

}
 ?>
