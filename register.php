<?php
 // session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>TripInspire</title>
  <link rel="stylesheet" href="css/style_panagiotis.css">
  <link rel="stylesheet" href="css/diana_register.css">
</head>

<body>
   <?php
    session_start();

?>
  <div class="form" >
		  <ul  class="tab-group">
			<li class="tab active"><a href="register.php">Register</a></li>
			<li class="tab"><a href="login.html">Login</a></li>
		  </ul>

		  <div class="tab-content">
				<div id="signup">
				  <h1><b>Register</b></h1>

					 <form action="includes/signup.php" method="POST">
						  <div class="top-row">
								<div class="field-wrap">
                  <?php
                  if(isset($_GET['first'])){
                    $first = $_GET['first'];
                    echo '<input type="text" placeholder="First Name" name="FirstName" value="'.$first.'">';
                  } else {
                    echo '<input type="text" placeholder="First Name" name="FirstName">';
                  }
                  ?>
									<!-- <input type="text" placeholder="First Name" name="FirstName"> -->
								</div>

								<div class="field-wrap">
                  <?php
                  if(isset($_GET['last'])){
                    $last = $_GET['last'];
                    echo '<input type="text" placeholder="Last Name" name="LastName" value="'.$last.'">';
                  } else {
                    echo '<input type="text" placeholder="Last Name" name="LastName">';
                  }
                  ?>
								</div>
						  </div>

						  <div class="field-wrap">
                <?php
                if(isset($_GET['email'])){
                  $email = $_GET['email'];
                  echo '<input type="text" placeholder="Email" name="Email" value="'.$email.'">';
                } else {
                  echo '<input type="text" placeholder="Email" name="Email">';
                }
                ?>
						  </div>

						  <div class="field-wrap">
							<input type="password" placeholder="Password" name="Password" />
						  </div>

						  <div class="field-wrap">
							<input type="password" placeholder="Retype Password" name="RepeatPassword"/>
						  </div>

						  <button type="submit" name="submit" class="button button-block" />Get Started</button>

					 </form>
           <?php
           /*$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
           // echo $fullUrl;
           if(strpos($fullUrl, "signup=empty") == true){
             echo "<p class=\"error\"> You did not fill in all fields! </p>";
             exit();
           }
           elseif(strpos($fullUrl, "signup=char") == true){
             echo "<p class=\"error\"> You used invalid characters in name fileds! </p>";
             exit();
           }
           elseif(strpos($fullUrl, "signup=invalidemail") == true){
             echo "<p class=\"error\"> You used an invalid e-mail address! </p>";
             exit();
           }
           elseif(strpos($fullUrl, "signup=succes") == true){
             echo "<p class=\"succes\"> You have been signed up! </p>";
             exit();
           }
           */

           if(!isset($_GET['signup'])){
             exit();
           } else {
             $signupCheck = $_GET['signup'];

             if($signupCheck == "empty"){
               echo "<p class=\"error\"> You did not fill in all fields! </p>";
               exit();
             }
             elseif($signupCheck == "char"){
               echo "<p class=\"error\"> You used invalid characters in name fileds! </p>";
               exit();
             }
             elseif($signupCheck == "invalidemail"){
               echo "<p class=\"error\"> You used an invalid e-mail address! </p>";
               exit();
             }
             elseif($signupCheck == "succes"){
               echo "<p class=\"succes\"> You have been signed up! </p>";
               exit();
             }
           }

            ?>
				</div>
		  </div><!-- tab-content -->
</div> <!-- /form -->
</body>
</html>
