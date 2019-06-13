<?php

include_once '../BDconn.php';

class NewsletterModel{
  private $mail;

  public $tstring;
  public $controller;
  public $conn;

  public function __construct($c, $conn){
    $this->controller = $c;
    $this->conn = $conn;
  }
  
  function getUsername(){
    return $this->username;
  }

  function setUsername($username){
    $this->username = $username;
  }

  public function saveMail($mail){
    $mail = $this->conn->real_escape_string($mail);        
    $sql = "SELECT * FROM newsletter WHERE mail = '$mail'";
    $result = mysqli_query($this->conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        return "alreadyexistsmail";
      }
      else {
        $mail = $this->conn->real_escape_string($mail);
        $sql = "INSERT INTO newsletter (mail) VALUES ('$mail');";
        mysqli_query($this->conn, $sql);
        $this->sendMail($mail);
        return "success";
        exit();
    }
    
}

    public function sendMail($mail){
        ini_set("SMTP","ssl://smtp.gmail.com");
        ini_set("smtp_port","587");
        $msg = "Bun venit! Ne bucurăm mult să te avem alături de noi!";
        $title = "TripInspire - Travel and Enjoy!";
        mail($mail,$title,$msg);
    }

  
}

?>
