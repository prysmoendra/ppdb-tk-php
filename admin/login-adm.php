<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS Admin | Log-in</title>

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/login-adm.css">

	<!-- ICON - TK Nusantara -->
	<!-- <link rel="icon" href="" type="image/x-icon"> -->
</head>
<?php
    require("../Models/function.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        login_verification_admin();
    }
?>
<body>
	<section class="forms" id="form-login">
		<h1 class="title">ADMIN PORTAL</h1>

		<!-- FORM LOGIN - ADMIN -->
		<form action="login-adm.php" method="POST">
			<div class="container">
				<div class="contact-form row">
					<div class="form row">
						<div class="form col">
							<input type="text" name="username" id="username" class="input-text" autocomplete="off" required tabindex="1">
							<label for="username" class="label-name">
								<span class="content-name">Phone number, username, or email</span>
							</label>
						</div>
					</div>
					<div class="form row">
						<div class="form col">
							<input type="password" name="password" id="password" class="input-text" autocomplete="off" required tabindex="2">
							<label for="password" class="label-name">
								<span class="content-name">Password</span>
							</label>
						</div>
					</div>

					<div class="form-field col">
						<input type="submit" class="submit-btn" value="login" name="" tabindex="27">
					</div>
				</div>
			</div>
		</form>
	</section>

	<!-- JavaScript -->
	<script type="text/javascript" src="../js/cms-script.js"></script>
</body> 
</html>