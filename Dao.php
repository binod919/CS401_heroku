<?php
  class Dao {

    private $host = "localhost";
    private $db = "writing";
    private $user = "binod";
    private $pass = "password";

  public function getConnection () {
  // $this->logger->LogDebug("Getting a connection.");
   try {
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
    $saveQuery = "insert into user(Username, Firstname, Lastname, Email, Password) values (:username, :firstname, :lastname, :email, :password)";
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
    echo "in getUser";
    return $conn->query("select Username from user where Username = {$userName}", PDO::FETCH_ASSOC);
  }

}
 ?>
