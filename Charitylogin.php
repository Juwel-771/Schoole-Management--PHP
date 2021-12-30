<?php include('Charityserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="Charitystyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="header bg-primary">
  	<h2>Login</h2>
  </div>

  <form method="post" action="Charitylogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username8" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password8">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn btn-primary" class="btn" name="Charity_login">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a class="btn btn-outline-primary" href="Charityregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
