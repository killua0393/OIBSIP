<?php include('server.php')


?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script>
        function regUser() {
            var username = document.getElementsByName('username')[0].value;
            var email = document.getElementsByName('email')[0].value;
            var password1 = document.getElementsByName('password_1')[0].value;
            var password2 = document.getElementsByName('password_2')[0].value;

            if (username !== '' && email !== '' && password1 !== '' && password2 !== '') {
                alert("you have not Registered before.if you want to continue please register");
            }
        }
    </script>

</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user" onclick="regUser()">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
<?php
// Handle login form submission
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    // If there are no errors, attempt to log the user in
    if (count($errors) == 0) {
        $password = md5($password); // Encrypt the password before comparing
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) == 1) {
            // User found, log them in and redirect to the home page
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            // User not found or incorrect password, display error message
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>
