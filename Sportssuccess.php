<?php
  session_start();

  if (!isset($_SESSION['username3'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Sportssuccess.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username3']);
  	header("location: Sportslogin.php");
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="header">
    	<h2>Home Page</h2>
    </div>
    <div class="content">
      	<!-- notification message -->
      	<?php if (isset($_SESSION['Sportssuccess'])) : ?>
          <div class="error Sportssuccess" >
          	<h3>
              <?php
              	echo $_SESSION['Sportssuccess'];
              	unset($_SESSION['Sportssuccess']);
              ?>
          	</h3>
          </div>
      	<?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username3'])) : ?>
        	<p>Welcome <strong><?php echo $_SESSION['username3']; ?></strong></p>
        	<p> <a href="Academic_Club.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
    </div>
  </body>
</html>
