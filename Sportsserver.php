<?php
session_start();

// initializing variables
$username3 = "";
$email3    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sports_club');

// REGISTER USER
if (isset($_POST['sports_reg'])) {
  // receive all input values from the form
  $username3 = mysqli_real_escape_string($db, $_POST['username3']);
  $email3 = mysqli_real_escape_string($db, $_POST['email3']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username3)) { array_push($errors, "Username is required"); }
  if (empty($email3)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, " Passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM sports WHERE username3='$username3' OR email3='$email3' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username3'] === $username3) {
      array_push($errors, "Username already exists");
    }

    if ($user['email3'] === $email3) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password3 = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO sports (username3, email3, password3)
  			  VALUES('$username3', '$email3', '$password3')";
  	mysqli_query($db, $query);
  	$_SESSION['username3'] = $username3;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: SportsForm.php');
  }
}
if (isset($_POST['sports_login'])) {
    $username3 = mysqli_real_escape_string($db, $_POST['username3']);
    $password3 = mysqli_real_escape_string($db, $_POST['password3']);

    if (empty($username3)) {
        array_push($errors, "Username is required");
    }
    if (empty($password3)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password3 = md5($password3);
        $query = "SELECT * FROM sports WHERE username3='$username3' AND password3='$password3'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username3'] = $username3;
          $_SESSION['success'] = "You are now logged in";
          header('location: SportsForm.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  ?>
