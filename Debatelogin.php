<?php include('Debateserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="Debatestyle.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="Debatelogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username2" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password2">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="debate_login">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="Debateregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
