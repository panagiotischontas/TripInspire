<?php
class PasswordModel{

    private $old;
    private $new;
    public $tstring;
    public $controller;
    public $conn;

    
  public function __construct($c, $conn){
    $this->controller = $c;
    $this->conn = $conn;
    // echo "<script>console.log( \" te rog afiseaza\" )</script>";
    // echo "<script>console.log( ". $this->conn ." )</script>";
  }

  public function updateDB($old,$new,$repeat){
    $sql = "SELECT * FROM users";
    $mail = $_SESSION['u_email'];
    $result = mysqli_query($this->conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck < 1){
    //   header("Location: ../view/login.php?Login=nouser");
      return "nouser";
    } else {
      //check pwd
      if($row = mysqli_fetch_assoc($result)) {
        $checkPassMatch = password_verify($old, $row['user_pwd']);
        if($checkPassMatch == false){
          return "wrongPW";
        }
        else{
            $hashedPwd = password_hash($new, PASSWORD_DEFAULT);
            $sql = "UPDATE users SET user_pwd='$hashedPwd' WHERE user_email = '$mail' ";       
            mysqli_query($this->conn, $sql); 
            return "success";
        }
    }
}
  }
}
?>