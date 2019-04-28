<?php

session_start();

if(isset($_POST['submit'])){

  include_once 'BDconn.php';

  $email = htmlspecialchars($_POST['Email']);
  $pwd = htmlspecialchars($_POST['Password']);

  // $checkPassMatch = password_verify($pwd, $hash); //pt login


  if (empty($email) || empty($pwd)){
    header("Location: ../login.php?Login=empty");
    exit();
  } else {

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../login.php?Login=invalidemail");
        exit();
      } else {

        $sql = "SELECT * FROM users WHERE user_email = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
          header("Location: ../login.php?Login=nouser");
          exit();
        } else {
          //check pwd
          if($row = mysqli_fetch_assoc($result)) {
            $checkPassMatch = password_verify($pwd, $row['user_pwd']);
            if($checkPassMatch == false){
              header("Location: ../login.php?Login=wrongpwd");
              exit();
            } elseif($checkPassMatch == true){
              //log in the user here
              $_SESSION['u_id'] = $row['user_id'];
              $_SESSION['u_first'] = $row['user_first'];
              $_SESSION['u_last'] = $row['user_last'];
              $_SESSION['u_email'] = $row['user_email'];
              header("Location: ../login.php?Login=success");
              exit();
            }
          }
        }
      }
    }
  }
else{
  header("Location: ../login.php?Login=err");
  exit();
}
 ?>
