<?php include 'Club_Connection.php';  ?>

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
	<div class="content">
		<?php if(isset($_SESSION['success'])): ?>
		<div class="error success">
			<h3>
				<?php
			echo $_SESSION['success'];
			unset ($_SESSION['success']);
			?>
			</h3>
		</div>
		<div>
			<a href="result1.php">Check Your Result</a>
		</div>

		<?php endif ?>
		<?php if (isset($_SESSION['username'])): ?>
		<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
		<?php endif ?>



	</div>



</body>

</html>