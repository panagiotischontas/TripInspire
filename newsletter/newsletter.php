<?php
    header('Location: newsletter.html');
    ini_set("SMTP","ssl://smtp.gmail.com");
    ini_set("smtp_port","465");
    echo $_GET["mail"];
    $msg = "Am reusit sa trimit un mail de pe contul de google!";
    echo mail($_GET["mail"],"Subiect frumos. TripInspire",$msg);
?>
