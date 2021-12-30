<?php include('Computerserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="Computerstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="Computerlogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username1" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password1">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="computer_login">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="Computerregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
