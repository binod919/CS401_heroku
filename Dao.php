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

  public function getUser ($userName) {
    $conn = $this->getConnection();
    $q = "SELECT * FROM user WHERE Username = \"{$userName}\"";
    $q = $conn->query($q, PDO::FETCH_ASSOC);
    return $q;
  }
}
 ?>
