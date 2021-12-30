<?php include 'server.php'; 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	

	<div class="header">
		<h2>Login</h2>	
	</div>

	<form method="post" action="login.php">
		<?php include 'errors.php'; ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="Password">
		</div>
		
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Haven't any account?<a href="register.php">Sign in</a>
		</p>


	</form>

</body>
</html>