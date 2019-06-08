<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>TripInspire</title>
  <link href="css/reset.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/contact.css" rel="stylesheet" type="text/css">
  <link href="css/navbar_newsletter.css" rel="stylesheet" type="text/css">


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



    <form action="password_action.php" method="POST">

      <form action="password_action.php" onsubmit="event.preventDefault(); validateMyForm();" method="post">
        <p class="produstitlu">Change your password</p>

        <label for="fname">Old password</label>
        <input type="text" name="old" class="pw" placeholder="Password..">
        <div>
          <font color="red">
            <?php
                session_start();
                if(isset($_SESSION["message"])){
                  echo $_SESSION["message"];
                  unset($_SESSION['message']);
                }
              ?>
          </font>
        </div>
        <br>
        <label for="lname">New password</label>
        <input type="text" name="new" id="password1" class="pw" placeholder="Password..">

        <label for="lname">Retype new password</label>
        <input type="text" name="retype" id="password2" class="pw" placeholder="Password.." onkeyup='check();' />
        <div id="message"></div>
        <br>
        <!--<label for="subject">Subject</label>
              <textarea placeholder="Write something.." style="height:200px"></textarea>-->

        <input type="submit" value="Submit">
      </form>
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