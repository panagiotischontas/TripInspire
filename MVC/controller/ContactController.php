<?php

class ContactController{
    public $model;
    
    public function __construct(){}

    public function setModel($model){
        $this->model = $model;
    }

    function getInput(){
        $first = htmlspecialchars($_POST['first']);
        $last = htmlspecialchars($_POST['last']);
        $msg = htmlspecialchars($_POST['text']);
        
        $this -> send($first,$last,$msg);
    }
    
    public function send($first,$last,$msg){
        if (empty($first) || empty($last) || empty($msg)){
            header("Location: ../view/contact.php?=empty");
            exit();
          }

        $this->model->sendMail($first, $last, $msg);
        header("Location: ../view/contact.php?signup=succes");

    }


}
?>