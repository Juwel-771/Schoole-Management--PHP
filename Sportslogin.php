<?php include('Sportsserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="Sportsstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="Sportslogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username3" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password3">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="sports_login">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="Sportsregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
