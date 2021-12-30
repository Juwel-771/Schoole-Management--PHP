<?php
session_start();

// initializing variables
$username1 = "";
$email1    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'computer_club');

// REGISTER USER
if (isset($_POST['computer_reg'])) {
  // receive all input values from the form
  $username1 = mysqli_real_escape_string($db, $_POST['username1']);
  $email1 = mysqli_real_escape_string($db, $_POST['email1']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username1)) { array_push($errors, "Username is required"); }
  if (empty($email1)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, " Passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM computer WHERE username1='$username1' OR email1='$email1' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username1'] === $username1) {
      array_push($errors, "Username already exists");
    }

    if ($user['email1'] === $email1) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password1 = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO computer (username1, email1, password1)
  			  VALUES('$username1', '$email1', '$password1')";
  	mysqli_query($db, $query);
  	$_SESSION['username1'] = $username1;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ComputerForm.php');
  }
}
if (isset($_POST['computer_login'])) {
    $username1 = mysqli_real_escape_string($db, $_POST['username1']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);

    if (empty($username1)) {
        array_push($errors, "Username is required");
    }
    if (empty($password1)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password1 = md5($password1);
        $query = "SELECT * FROM computer WHERE username1='$username1' AND password1='$password1'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username1'] = $username1;
          $_SESSION['success'] = "You are now logged in";
          header('location: ComputerForm.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  ?>
