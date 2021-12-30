<?php
session_start();

// initializing variables
$username8 = "";
$email8    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'charity_club');

// REGISTER USER
if (isset($_POST['Charity_reg'])) {
  // receive all input values from the form
  $username8 = mysqli_real_escape_string($db, $_POST['username8']);
  $email8 = mysqli_real_escape_string($db, $_POST['email8']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username8)) { array_push($errors, "Username is required"); }
  if (empty($email8)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, " Passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM charity WHERE username8='$username8' OR email8='$email8' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username8'] === $username8) {
      array_push($errors, "Username already exists");
    }

    if ($user['email8'] === $email8) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password8 = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO charity (username8, email8, password8)
  			  VALUES('$username8', '$email8', '$password8')";
  	mysqli_query($db, $query);
  	$_SESSION['username8'] = $username8;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: CharityForm.php');
  }
}
if (isset($_POST['Charity_login'])) {
    $username8 = mysqli_real_escape_string($db, $_POST['username8']);
    $password8 = mysqli_real_escape_string($db, $_POST['password8']);

    if (empty($username8)) {
        array_push($errors, "Username is required");
    }
    if (empty($password8)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password8 = md5($password8);
        $query = "SELECT * FROM charity WHERE username8='$username8' AND password8='$password8'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username8'] = $username8;
          $_SESSION['success'] = "You are now logged in";
          header('location: CharityForm.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  ?>
