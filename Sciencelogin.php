<?php include('Scienceserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="Sciencestyle.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="Sciencelogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username4" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password4">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="science_login">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="Scienceregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
