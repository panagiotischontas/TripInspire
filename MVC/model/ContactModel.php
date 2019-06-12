<?php
    class ContactModel{

        public $controller;
        public function __construct($c){
            $this->controller = $c;
        }
        
        public function sendMail($first,$last,$msg){
            $MAIL="tripinspire.info@gmail.com";

            ini_set("SMTP","ssl://smtp.gmail.com");
            ini_set("smtp_port","587");
            $msg = $_POST['text'];
            $title = $_POST['first'] . " " . $_POST['last'];
            mail($MAIL,$title,$msg);

        }
    }
?>