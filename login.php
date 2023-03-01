<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h2>Login Form</h2>
	<form method="post" action="login.php">
		<label>Username:</label>
		<input type="text" name="username" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		<input type="submit" name="login" value="Login">
	</form>
	<?php
		if(isset($_POST['login'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($username == "user" && $password == "password"){
				echo "Login successful";
			}else{
				echo "Invalid login credentials";
			}
		}
	?>
</body>
</html>