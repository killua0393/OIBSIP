<?php include ('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
        function registerUser() {
            var username = document.getElementsByName('username')[0].value;
            var email = document.getElementsByName('email')[0].value;
            var password1 = document.getElementsByName('password_1')[0].value;
            var password2 = document.getElementsByName('password_2')[0].value;

            if (username !== '' && email !== '' && password1 !== '' && password2 !== '') {
                alert("Registered successfully!");
            } else {
                alert("Please fill out all fields.");
            }
        }
    </script>
</head>

<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user" onclick="registerUser()">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>

</html>