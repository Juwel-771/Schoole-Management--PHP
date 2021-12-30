<?php
session_start();

// initializing variables
$username6 = "";
$email6    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'business_club');

// REGISTER USER
if (isset($_POST['Business_reg'])) {
  // receive all input values from the form
  $username6 = mysqli_real_escape_string($db, $_POST['username6']);
  $email6 = mysqli_real_escape_string($db, $_POST['email6']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username6)) { array_push($errors, "Username is required"); }
  if (empty($email6)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, " Passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM business WHERE username6='$username6' OR email6='$email6' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username6'] === $username6) {
      array_push($errors, "Username already exists");
    }

    if ($user['email6'] === $email6) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password6 = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO business (username6, email6, password6)
  			  VALUES('$username6', '$email6', '$password6')";
  	mysqli_query($db, $query);
  	$_SESSION['username6'] = $username6;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: BusinessForm.php');
  }
}
if (isset($_POST['Business_login'])) {
    $username6 = mysqli_real_escape_string($db, $_POST['username6']);
    $password6 = mysqli_real_escape_string($db, $_POST['password6']);

    if (empty($username6)) {
        array_push($errors, "Username is required");
    }
    if (empty($password6)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password6 = md5($password6);
        $query = "SELECT * FROM business WHERE username6='$username6' AND password6='$password6'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username6'] = $username6;
          $_SESSION['success'] = "You are now logged in";
          header('location: BusinessForm.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  ?>
