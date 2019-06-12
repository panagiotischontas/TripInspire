<?php

class LoginController{

  public $model;


  public function __construct(){

  }

  public function setModel($model){
$this->model = $model;
  }

  function getInput(){
    // echo "si aici";
    // if(isset($_POST['Email']) && isset($_POST['Password']) ){
    $email = htmlspecialchars($_POST['Email']);
    $pwd = htmlspecialchars($_POST['Password']);
  //}
    // login($email, $pwd);
    $this->login($email, $pwd);
  }

  public function login($email, $pwd){
    // echo "LOGIN";
    // echo "<script>console.log( ". $conn ." )</script>";
    if (empty($email) || empty($pwd)){
      header("Location: ../view/login.php?Login=empty");
      exit();
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
          header("Location: ../view/login.php?Login=invalidemail");
          exit();
        } else{
          // + chech user + check pair(user, pass)
            $log = $this->model->authenticate($email, $pwd);
            header("Location: ../view/login.php?Login=".$log);
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

  function success(){
  $this->model->tstring = "You have been signed up!Please login now.";
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

  function afterrgister(){
    $this->model->tstring = "You have been signed up! Please login now.";
    $this->model->class = "success";
  }


}


 ?>
