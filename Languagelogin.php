<?php include('Languageserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="Languagestyle.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="Languagelogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username7" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password7">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="Language_login">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="Languageregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
