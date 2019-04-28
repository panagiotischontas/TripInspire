<?php

if(isset($_POST['submit'])){

  include_once 'BDconn.php';
  $first = htmlspecialchars($_POST['FirstName']);
  // $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = htmlspecialchars($_POST['LastName']);
  $email = htmlspecialchars($_POST['Email']);
  $pwd = htmlspecialchars($_POST['Password']);
  $repeatpwd= htmlspecialchars($_POST['RepeatPassword']);
  // $checkPassMatch = password_verify($pwd, $hash);


  if (empty($first) || empty($last) || empty($email) || empty($pwd) || empty($repeatpwd)){
    header("Location: ../register.php?signup=empty");
    exit();
  } else {
    if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
      header("Location: ../register.php?signup=char&email=$email");
      exit();
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../register.php?signup=invalidemail&first=$first&last=$last");
      } else {

        $sql = "SELECT * FROM users WHERE user_email = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
          header("Location: ../register.php?signup=alreadyexistsemail&first=$first&last=$last");
          exit();
        } else {
          //hash $pwd
          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
          //insert the user into the db
          $sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd) VALUES ('$first', '$last', '$email', '$hashedPwd');";
          mysqli_query($conn, $sql);
          header("Location: ../register.php?signup=succes");
          echo "AM REUSIT";
          exit();
        }
      }
    }
  }
}
else{
  header("Location: ../register.php?signup=err");
  exit();
}
 ?>
