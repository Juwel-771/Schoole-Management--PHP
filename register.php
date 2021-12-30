<?php include 'server.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="header">
		<h2>Registration</h2>
		
	</div>

	<form method="post" action="register.php">
		<?php include 'errors.php'; ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" placeholder="Password">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="text" name="password_2" placeholder="Confirm Password">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already have an account?<a href="login.php">Login</a>
		</p>


	</form>

</body>
</html>