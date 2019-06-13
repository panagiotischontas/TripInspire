<?php


 require_once '../controller/NewsletterController.php';
 require_once '../model/NewsletterModel.php';
 require_once '../BDconn.php';

 $controller = new NewsletterController();

 $model = new NewsletterModel($controller, $conn);

 $controller->setModel($model);

?>
<footer class="newsletter">
    <p class="titleText">Subscribe to our newsletter</p>
    <p class="newsText">Subscribe to our newsletter to
      give you awesome ideas about places to visit</p>
    <form action="#" method="POST" class="newsForm">
      <input type="mail" name="mail" class="mailbox" placeholder="Enter email">
      <input type="submit" name="submit_news" value="Subscribe" class="newsSubmit">
      <?php
        if(isset($_POST['submit_news'])){
            $controller->getInput();
          }
          
        if (isset($_GET['newsletter']) && !empty($_GET['newsletter'])) {
            $controller->{$_GET['newsletter']}();
        
            if($_GET['newsletter']=="success"){
                $color="white";
            }
            else $color="#821a05";
            echo "<br><br><p style=\"color:$color;\">".$model->tstring."</p>" ;
        } 
        
        ?>
    </form>
    
  </footer>
