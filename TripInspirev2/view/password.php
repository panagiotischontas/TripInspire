<?php
session_start();


require_once '../controller/PasswordController.php';
require_once '../model/PasswordModel.php';
require_once '../BDconn.php';
$controller = new PasswordController();

$model = new PasswordModel($controller, $conn);

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
  <link rel="stylesheet" type="text/css" href="../css/filters.css">
  
  <link rel="stylesheet" href="../css/check.css">
  <link rel="stylesheet" href="../css/range.css">


  <script>	var check = function () {
      if (document.getElementById('password1').value ==
        document.getElementById('password2').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'The passwords are matching';
      } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'The passwords are not matching';
      }
    }

    function validateMyForm() {
      if (document.getElementById('password1').value ==
        document.getElementById('password2').value) {

        return false;
      }


      return true;
    }

  </script>

</head>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  
  document.getElementById("myDropdown").classList.toggle("show");
  
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (i = 0; i < dropdowns.length; i++) {
    var i;
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


<body>

  <div class="navbar">
    <div class="logo">
      <a href="index.php">TripInspire</a>
    </div>

    <div class="pages">
      <a href="index.php">Home</a>
      <a href="team.php">Team</a>
      <a href="contact.php">Contact</a>
      <a href="about_us.php">About</a>
      <div class="dropdown">
          <a href="#" onclick="myFunction()" class="dropbtn">User</a>
          <div id="myDropdown" class="dropdown-content">
            <a href="Profile.php">Profile</a>
            <a href="login.php">Log out</a>
          </div>
      </div></div>

  </div>



  <div class="contact">



    <form action="#" method="POST">

      <form action="#" onsubmit="event.preventDefault(); validateMyForm();" method="post">
        <p class="produstitlu">Change your password</p>

        <label for="fname">Old password</label>
        <input type="text" name="old" class="pw" placeholder="Password..">
        <label for="lname">New password</label>
        <input type="text" name="new" id="password1" class="pw" placeholder="Password..">

        <label for="lname">Retype new password</label>
        <input type="text" id="password2" name="repeat" class="pw" placeholder="Password.." onkeyup='check();' />
        <div id="message"></div>
        <br>
        <!--<label for="subject">Subject</label>
              <textarea placeholder="Write something.." style="height:200px"></textarea>-->

        <input type="submit" name="submit">
      
        <?php
        if(isset($_POST['submit'])){
        $controller->getInput();
      }
      
      if (isset($_GET['change']) && !empty($_GET['change'])) {
        $controller->{$_GET['change']}();
        if($_GET['change']=="success"){
          $color="green";
        }
        else $color="red";
        echo "<br><br><p style=\"color:$color;\">".$model->tstring."</p>" ;
             
    }
      ?>
      </form>

    </form>



  </div>


</body>

</html>