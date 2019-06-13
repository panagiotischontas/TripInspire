<?php
 session_start();


 require_once '../controller/RegisterController.php';
 require_once '../model/RegisterModel.php';
 require_once '../BDconn.php';

 $controller = new RegisterController();

 $model = new RegisterModel($controller, $conn);

 $controller->setModel($model);


 ?>

<!DOCTYPE html>
<html>
<head>
  <title>TripInspire</title>
  <link rel="stylesheet" href="../css/style-pana.css">
  <link rel="stylesheet" href="../css/diana_register.css">

  <script>	var check = function () {
			if (document.getElementById('password1').value ==
				document.getElementById('password2').value) {
				document.getElementById('message').style.color = '#A0EE90';
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
  <div class="form" >
		  <ul  class="tab-group">
			<li class="tab active"><a href="register.php">Register</a></li>
			<li class="tab"><a href="login.php">Login</a></li>
		  </ul>

		  <div class="tab-content">
				<div id="signup">
				  <h1><b>Register</b></h1>

          <form action="#" method="POST"> <!--includes/signup.php -->
					 <form action="#" onsubmit="event.preventDefault(); validateMyForm();" method="POST"> <!--includes/signup.php -->
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
							<input type="password" placeholder="Password" id="password1" name="Password" />
						  </div>

						  <div class="field-wrap">
							<input type="password" placeholder="Retype Password" id="password2" name="RepeatPassword" onkeyup='check();'/>
						  </div>
              <div id="message"></div>
              <br>
						  <button type="submit" name="register_submit" class="button button-block" />Get Started</button>
              </form>
					 </form>
           <?php
           if(isset($_POST['register_submit'])){
             echo "<script>console.log( \" te rog afiseaza teee\" )</script>";
             $controller->getInput();
           }

           if (isset($_GET['signup']) && !empty($_GET['signup'])) {
             echo "<script>console.log( \" te rog afiseaza t\" )</script>";
               $controller->{$_GET['signup']}();
               echo "<br><p class=\"" . $model->class . "\" >" . $model->tstring ."</p>";
           }


           //
           //
           // if(!isset($_GET['signup'])){
           //   exit();
           // } else {
           //   $signupCheck = $_GET['signup'];
           //
           //   if($signupCheck == "empty"){
           //     echo "<p class=\"error\"> You did not fill in all fields! </p>";
           //     exit();
           //   }
           //   elseif($signupCheck == "char"){
           //     echo "<p class=\"error\"> You used invalid characters in name fileds! </p>";
           //     exit();
           //   }
           //   elseif($signupCheck == "invalidemail"){
           //     echo "<p class=\"error\"> You used an invalid e-mail address! </p>";
           //     exit();
           //   }
           //   elseif($signupCheck == "alreadyexistsemail"){
           //     echo "<p class=\"error\"> The e-mail address is already used! </p>";
           //     exit();
           //   }
           //   elseif($signupCheck == "pwdnotmatch"){
           //     echo "<p class=\"error\"> Passwords don't match! </p>";
           //     exit();
           //   }
           //   elseif($signupCheck == "succes"){
           //     echo "<p class=\"succes\"> You have been signed up! </p>";
           //     exit();
           //   }
           //
           // }

            ?>
				</div>
		  </div><!-- tab-content -->
</div> <!-- /form -->
</body>
</html>
