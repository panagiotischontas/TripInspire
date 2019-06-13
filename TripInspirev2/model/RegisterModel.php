<?php

include_once '../BDconn.php';

class RegisterModel{

  private $username;
  private $pass;
  public $tstring;
  public $controller;
  public $conn;

  public function __construct($c, $conn){
    $this->controller = $c;
    $this->conn = $conn;
    // echo "<script>console.log( \" te rog afiseaza\" )</script>";
    // echo "<script>console.log( ". $this->conn ." )</script>";
  }

  function getUsername(){
    return $this->username;
  }

  function setUsername($username){
    $this->username = $username;
  }

  function setPass($pass){
    $this->pass = $pass;
  }
  function getPass(){
    return $pass;
  }

public function putInDB($first, $last, $email, $pwd){
  $sql = "SELECT * FROM users WHERE user_email = '$email'";
  $result = mysqli_query($this->conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if($resultCheck > 0){
    // header("Location: ../register.php?signup=alreadyexistsemail&first=$first&last=$last");
    return "register.php?signup=alreadyexistsemail&first=$first&last=$last";
  } else {
    //hash $pwd
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    //insert the user into the db
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd) VALUES ('$first', '$last', '$email', '$hashedPwd');";
    mysqli_query($this->conn, $sql);
    //trimite mail de bunvenit userului
    // header("Location: ../register.php?signup=succes");
    return "login.php?Login=afterrgister";
    exit();
}


}
}


 ?>
