<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Trip Inspire</title>
  <link href="../css/reset.css" rel="stylesheet" type="text/css">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="../css/style-aboutus.css" rel "stylesheet" type="text/css">
  <link href="../css/navbar_newsletter.css" rel="stylesheet" type="text/css">
  <link href="../css/filters.css" rel="stylesheet" type="text/css">
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
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>



<body style="background-color:#f2f2f2;">
  <div class="navbar">
    <div class="logo">
      <a href="index.php">Trip Inspire</a>
    </div>

    <div class="pages">
      <a href="index.php">Home</a>
      <a href="team.php">Team</a>
      <a class="active" href="contact.php">Contact</a>
      <a class="activeForNav2" href="about_us.php">About</a>
      <?php
        if(isset($_SESSION['u_id'])){
          echo '<div class="dropdown">
          <a href="#" onclick="myFunction()" class="dropbtn">User</a>
          <div id="myDropdown" class="dropdown-content">
            <a href="Profile.php">Profile</a>
            <a href="login.php">Log out</a>
            
          </div>
      </div>';
        }
        else
          echo '<a href="login.php">Login</a>';
      ?>
      
    </div>
</div>

  </div>

  <div class="produsContent">
    <p class="produstitlu">Why us?</p>
    <div class="produsDescriere">
      <div>TripInspire is a web application that gives users the option to decide
      where they want to go on holiday although they do not know where they want to go.</div>
      
      <div>The application tries to offer as many search possibilities as possible,
      the best prices on the market and an easy experience.</div>
      
      <div>The benefits of an account user are even greater, so do not miss your chance to create an
      account!</div>
      
      <p>The TripInspire team wishes you a great search and a wonderful vacantion!</p>
    </div>
  </div>

  <?php
    $_SESSION['page']="about_us.php";
    include 'newsletter.php';
  ?>


</body>



<!--<body>


    <div id="bkg_image">
      <ul id="logo">
        <li>
          <a class="active" href="#home">Trip Inspire</a>
        </li>
      </ul>
      <ul>
        <li><a  href="index.html">Home</a></li>
        <li><a href="team.html">Team</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a class="active" href="#">About</a></li>
      </ul>


      <p>About us</p>
    </div>


    <footer class="newsletter">
      <div>
        <p class="titleText">Subscribe to our newsletter</p>
        <p class="newsText">Subscribe to our newsletter to
        give you awesome ideas about places to visit</p>
        <div class="newslBtns">
          <form action="#" class="newsForm">
            <input type="mail" class="mailbox" placeholder="Enter email">
            <input type="submit" value="Subscribe" class="newsSubmit">
          </form>
        </div>
      </div>
    </footer>
  </body>-->

</html>