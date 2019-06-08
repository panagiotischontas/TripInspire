<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>TripInspire</title>
  <link href="css/reset.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/contact.css" rel="stylesheet" type="text/css">
  <link href="css/navbar_newsletter.css" rel="stylesheet" type="text/css">
  <link href="css/filters.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="css/check.css">
    <link rel="stylesheet" href="css/range.css">

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
    <form action="contact.php">
      <label for="fname">First Name</label>
      <input type="text" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" placeholder="Your last name..">


      <label for="subject">Subject</label>
      <textarea placeholder="Write something.." style="height:200px"></textarea>

      <input type="submit" value="Submit">
    </form>
  </div>


  <footer class="newsletter">
    <p class="titleText">Subscribe to our newsletter</p>
    <p class="newsText">Subscribe to our newsletter to
      give you awesome ideas about places to visit</p>
    <form action="#" class="newsForm">
      <input type="mail" class="mailbox" placeholder="Enter email">
      <input type="submit" value="Subscribe" class="newsSubmit">
    </form>
  </footer>

</body>

</html>