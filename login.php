<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

  <title>TripInspire</title>
  <link rel="stylesheet" href="css/style_panagiotis.css">
  <link rel="stylesheet" href="css/diana_register.css">


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

        <form action="includes/login.inc.php" method="POST">

          <div class="field-wrap">
            <input type="email" placeholder="Email" name="Email">
          </div>

          <div class="field-wrap">
            <input type="password" placeholder="Password" name="Password" />
          </div>

          <button type="submit" name="submit" class="button button-block" />Get Started</button>

        </form>

      </div>
      <div id="login">

      </div>
    </div>
    <!-- tab-content -->

  </div>
  <!-- /form -->

  </div>

</html>
