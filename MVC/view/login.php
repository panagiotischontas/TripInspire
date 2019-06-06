<?php
session_start();


require_once '../controller/LoginController.php';
require_once '../model/LoginModel.php';
require_once '../BDconn.php';

$controller = new LoginController();
// echo "<script>console.log( " . $conn ." )</script>";
$model = new LoginModel($controller, $conn);
// echo "<script>console.log( \" te rog afiseaza teee\" )</script>";
$controller->setModel($model);

?>

<!DOCTYPE html>
<html>

<head>

  <title>TripInspire</title>
  <link rel="stylesheet" href="../css/style_panagiotis.css">
  <link rel="stylesheet" href="../css/diana_register.css">


</head>

<body>

  <div class="form">

    <ul class="tab-group">
      <li class="tab "><a href="register.php">Register</a></li>
      <li class="tab active"><a href="login.php">Login</a></li>
    </ul>

    <div class="tab-content">

      <div id="signup">
        <h1><b>Login</b></h1>

        <form action="#" method="POST">  <!--includes/login.inc.php -->

          <div class="field-wrap">
            <input type="email" placeholder="Email" name="Email">
          </div>

          <div class="field-wrap">
            <input type="password" placeholder="Password" name="Password" />
          </div>

          <button type="submit" name="login_submit" class="button button-block" />Get Started</button>

        </form>
        <?php

        if(isset($_POST['login_submit'])){
          $controller->getInput();
        }

        if (isset($_GET['Login']) && !empty($_GET['Login'])) {
            $controller->{$_GET['Login']}();
            echo "<p class=\"" . $model->class . "\" >" . $model->tstring ."</p>";
        }

         ?>
      </div>

    </div>
    <!-- tab-content -->

  </div>
  <!-- /form -->

  </div>

</html>
