<?php

class RegisterController{

  public $model;

  public function __construct(){

  }

  public function setModel($model){
    $this->model = $model;
  }

  function getInput(){
    $first = htmlspecialchars($_POST['FirstName']);
    $last = htmlspecialchars($_POST['LastName']);
    $email = htmlspecialchars($_POST['Email']);
    $pwd = htmlspecialchars($_POST['Password']);
    $repeatpwd= htmlspecialchars($_POST['RepeatPassword']);
  //}
    // login($email, $pwd);
    $this->register($first, $last, $email, $pwd, $repeatpwd);
  }

  public function register($first, $last, $email, $pwd, $repeatpwd){
    if (empty($first) || empty($last) || empty($email) || empty($pwd) || empty($repeatpwd)){
      header("Location: ../view/register.php?signup=empty");
      exit();
    } else {
      if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
        header("Location: ../view/register.php?signup=char&email=$email");
        exit();
      } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
          header("Location: ../view/register.php?signup=invalidemail&first=$first&last=$last");
          exit();
        } else {

          if($pwd != $repeatpwd){
            header("Location: ../view/register.php?signup=pwdnotmatch&first=$first&last=$last&email=$email");
            exit();
          }
          // header("Location: ../view/login.php?Login=afterrgister");
          $reg = $this->model->putInDB($first, $last, $email, $pwd);
          header("Location: ../view/" . $reg);

        }
      }
    }
}

  function empty(){
  $this->model->tstring = "You did not fill in all fields!";
  $this->model->class = "error";
  }

  // function(){
  // $this->model->tstring = "Passwords don't match!";
  // $this->model->class = "error";
  // }

  function invalidemail(){
  $this->model->tstring = "You used an invalid e-mail address!";
  $this->model->class = "error";
  }

  function pwdnotmatch(){
  $this->model->tstring = "Passwords don't match!";
  $this->model->class = "error";
  }

  function success(){
  $this->model->tstring = "You have been signed up!";
  $this->model->class = "success";
  }

  function err(){
  $this->model->tstring = "An error has occured! Please try again!";
  $this->model->class = "error";
  }

  function nouser(){
    $this->model->tstring = "Username or password wrong!";
    $this->model->class = "error";
  }

  function char(){
    $this->model->tstring = "You used inavlid characters in name fields!";
    $this->model->class = "error";
  }

  function alreadyexistsemail(){
    $this->model->tstring = "The email adress is already assosiated with an existing account!";
    $this->model->class = "error";
  }



}


 ?>
