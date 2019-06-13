<?php
class PasswordController{
    
  public $model;

  public function __construct(){

  }

  public function setModel($model){
    $this->model = $model;
  }

  function getInput(){
    $old = htmlspecialchars($_POST['old']);
    $new = htmlspecialchars($_POST['new']);
    $repeat = htmlspecialchars($_POST['repeat']);

    $this->change($old,$new,$repeat);
  }

  public function change($old,$new,$repeat){
    if (empty($old) || empty($new)){
        header("Location: ../view/password.php?change=empty");
    }
    else if($new != $repeat){
        echo $old;
        echo $new;
        header("Location: ../view/password.php?change=passwordDifferent");
        exit();
    }
    $reg = $this->model->updateDB($old,$new,$repeat);
    header("Location: ../view/password.php?change=" . $reg);

}

function empty(){
    $this->model->tstring = "You did not fill in all fields!";
}

function passwordDifferent(){
    $this->model->tstring = "Passwords does not match";
}



function success(){
    $this->model->tstring = "Your password was changed!";
}

function nouser(){
    $this->model->tstring = "Error while checking the password";
}

function wrongPW(){
    $this->model->tstring = "Password incorect!";
}

}
?>