<?php

include_once '../BDconn.php';

class LoginModel{

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

  function authenticate($email, $pwd){
       //find user in db
    // echo "<script>console.log( ". $this->conn ." )</script>";
    $sql = "SELECT * FROM users";
    $result = mysqli_query($this->conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1){
      header("Location: ../view/login.php?Login=nouser");
      return "nouser";
    } else {
      //check pwd
      if($row = mysqli_fetch_assoc($result)) {
        $checkPassMatch = password_verify($pwd, $row['user_pwd']);
        if($checkPassMatch == false){
          header("Location: ../view/login.php?Login=wrongpwd");
          return "nouser";
        } elseif($checkPassMatch == true){
          //log in the user here
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_first'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];
          $_SESSION['u_email'] = $row['user_email'];
          header("Location: ../view/login.php?Login=success");
          return "success";
        }
      }
    }
    return "err";
  }


}


 ?>
