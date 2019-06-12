<?php
session_start();


require_once '../controller/ContactController.php';
require_once '../model/ContactModel.php';

$controller = new ContactController();

$model = new ContactModel($controller);

$controller->setModel($model);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>TripInspire</title>
  <link href="../css/reset.css" rel="stylesheet" type="text/css">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="../css/contact.css" rel="stylesheet" type="text/css">
  <link href="../css/navbar_newsletter.css" rel="stylesheet" type="text/css">
  <link href="../css/filters.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="../css/check.css">
    <link rel="stylesheet" href="../css/range.css">

</head>

<body>

  <div class="navbar">
    <div class="logo">
      <a href="index.php">TripInspire</a>
    </div>

    <div class="pages">
      <a href="index.php">Home</a>
      <a href="team.php">Team</a>
      <a class="activeForNav2" href="contact.php">Contact</a>
      <a href="about_us.php">About</a>
      <a href="login.php">Login</a>
    </div>

  </div>



  <div class="contact">
    <form action="#" method="POST">
      <label for="fname">First Name</label>
      <input type="text" name="first" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" name="last" placeholder="Your last name..">


      <label for="subject">Subject</label>
      <textarea placeholder="Write something.." name="text" style="height:200px"></textarea>

      <input type="submit" name="submit">
      <?php
  if(isset($_POST['submit'])){
    $controller->getInput();
  }
  if (isset($_GET['contact']) && !empty($_GET['contact'])) {
      $controller->{$_GET['contact']}();
      if($_GET['contact']=="success"){
        $color="green";
      }
      else $color="red";
      echo "<br><br><p style=\"color:$color;\">".$model->tstring."</p>" ;
           
  }
  ?>
    </form>
    
  </div>

  <?php
    $_SESSION['page']="contact.php";
    include 'newsletter.php';
  ?>

</body>

</html>