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
  <link href="../css/navbar_newsletter.css" rel="stylesheet" type="text/css">
  <link href="../css/filters.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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




<body>
  <div class="navbar">
    <div class="logo">
      <a href="index.php">Trip Inspire</a>
    </div>

    <div class="pages">
      <a href="index.php">Home</a>
      <a class="activeForNav2" href="team.php">Team</a>
      <a class="active" href="contact.php">Contact</a>
      <a href="about_us.php">About</a>
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


  <div id="suggestions">
    <p class="title">Team</p>
    <div class="cardFather">
      <div class="cardWithPad">
        <div class="card">
          <img src="../images/burdu.jpg" alt="dest">
          <div class="card_container">
            <p class="cardLocation">Burduhosu Mihai</p>
            <p class="cardPrice">Student</p>
          </div>
          <div>
            <a href="https://www.facebook.com/mihaiburdu" class="fa fa-facebook"></a>
          </div>
        </div>
      </div>

      <div class="cardWithPad">
        <div class="card">
          <img src="../images/diana.jpg" alt="dest">
          <div class="card_container">
            <p class="cardLocation">Orasanu Diana</p>
            <p class="cardPrice">Student</p>
          </div>
          <div>
            <a href="https://www.facebook.com/diana.orasanu24" class="fa fa-facebook"></a>
          </div>
        </div>
      </div>


      <div class="cardWithPad">
        <div class="card">
          <img src="../images/pana.jpg" alt="dest">
          <div class="card_container">
            <p class="cardLocation">Panagiotis Chontas</p>
            <p class="cardPrice">Student</p>
          </div>
          <div>
            <a href="https://www.facebook.com/panagiotis.chontas" class="fa fa-facebook"></a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php
    $_SESSION['page']="team.php";
    include 'newsletter.php';
  ?>


</body>

</html>