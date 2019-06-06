<!DOCTYPE html>
<html>

<head>

	<title>TripInspire</title>
	<link rel="stylesheet" href="css/style-pana.css">

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


	<div class="form">



		<ul class="tab-group">
			<li class="tab active"><a href="register.html">Register</a></li>
			<li class="tab"><a href="login.html">Login</a></li>
		</ul>

		<div class="tab-content">




			<div id="signup">
				<h1><b>Register</b></h1>

				<form action="register_action.php" method="POST">

					<form action="register_action.php" onsubmit="event.preventDefault(); validateMyForm();" method="POST">

						<div class="top-row">
							<div class="field-wrap">
								<input type="text" placeholder="First Name">
							</div>

							<div class="field-wrap">
								<input type="text" placeholder="Last Name">
							</div>
						</div>

						<div class="field-wrap">
							<input type="email" placeholder="Email">
						</div>

						<div class="field-wrap">
							<input type="password" name="password" id="password1" hidden-value="password" placeholder="Password" />
						</div>

						<div class="field-wrap">
							<input type="password" name="retype" id="password2" hidden-value="retype" placeholder="Retype Password"
								onkeyup='check();' />
						</div>
						<div id="message"></div>
						<br>

						<button type="submit" value="Submit" class="button button-block" />Get Started</button>

					</form>
				</form>

			</div>






			<div id="login">


			</div>










		</div><!-- tab-content -->

	</div> <!-- /form -->


</body>

</html>