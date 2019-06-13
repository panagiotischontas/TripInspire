<?php

class NewsletterController{

    public $model;
  
    public function __construct(){
  
    }
  
    public function setModel($model){
      $this->model = $model;
    }

    
  function getInput(){
    $mail = htmlspecialchars($_POST['mail']);
    $this->submit($mail);
  }

  public function submit($mail){
    $page=$_SESSION['page'];
    if (empty($mail)){
        header("Location: ../view/$page?newsletter=empty");
        exit();
      } 
    $reg = $this->model->saveMail($mail);
    header("Location: ../view/$page?newsletter=$reg");
    
  }

  function empty(){
    $this->model->tstring = "You did not fill in all fields!";
}
  function alreadyexistsmail(){
    $this->model->tstring = "You are already subscribed with this mail!";
  }
  function success(){
    $this->model->tstring = "You've successfully subscribed to the newsletter!";
 } 

}

?>
