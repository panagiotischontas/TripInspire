<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Trip Inspire</title>
  <link href="css/reset.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/navbar_newsletter.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="navbar">
    <div class="logo">
      <a href="index.html">Trip Inspire</a>
    </div>

    <div class="pages">
      <a href="index.php">Home</a>
      <a class="activeForNav2" href="team.php">Team</a>
      <a class="active" href="contact.php">Contact</a>
      <a href="about_us.php">About</a>


      <div class="navbar pages dropdown">
        <a href="">User</a>
        <div class="navbar pages dropdown-content">
          <a href="about_us.html">Profile</a>
          <a href="about_us.html">Log out</a>
        </div>
      </div>




    </div>

  </div>


  <div id="suggestions">
    <p class="title">Team</p>
    <div class="cardFather">
      <div class="cardWithPad">
        <div class="card">
          <img src="images/burdu.jpg" alt="dest">
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
          <img src="images/diana.jpg" alt="dest">
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
          <img src="images/pana.jpg" alt="dest">
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


</body>

</html>