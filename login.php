<!DOCTYPE html>
<html>

<head>

	<title>TripInspire</title>
	<link rel="stylesheet" href="css/style-pana.css">

</head>

<body>

	<?php
	if(isset($_SESSION["username"])){
	echo $_SESSION["username"];
	session_destroy();
	echo $_SESSION["username"];
	}
?>

	<div class="form">

		<ul class="tab-group">
			<li class="tab "><a href="register.html">Register</a></li>
			<li class="tab active"><a href="login.html">Login</a></li>
		</ul>





		<div class="tab-content">

			<div id="signup">
				<h1><b>Login</b></h1>

				<form action="login_action.php" method="POST">

					<div class="field-wrap">
						<input type="email" name="email" placeholder="Email">
					</div>

					<div class="field-wrap">
						<input type="password" name="password" placeholder="Password" />
					</div>

					<button type="submit" class="button button-block" />Get Started</button>

				</form>

			</div>









			<div id="login">

			</div>











		</div><!-- tab-content -->

	</div> <!-- /form -->

	</div>

</html>