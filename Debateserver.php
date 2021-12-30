<?php
session_start();

// initializing variables
$username2 = "";
$email2    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'debate_club');

// REGISTER USER
if (isset($_POST['debate_reg'])) {
  // receive all input values from the form
  $username2 = mysqli_real_escape_string($db, $_POST['username2']);
  $email2 = mysqli_real_escape_string($db, $_POST['email2']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username2)) { array_push($errors, "Username is required"); }
  if (empty($email2)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, " Passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM debate WHERE username2='$username2' OR email2='$email2' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username2'] === $username2) {
      array_push($errors, "Username already exists");
    }

    if ($user['email2'] === $email2) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password2 = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO debate (username2, email2, password2)
  			  VALUES('$username2', '$email2', '$password2')";
  	mysqli_query($db, $query);
  	$_SESSION['username2'] = $username2;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: DebateForm.php');
  }
}
if (isset($_POST['debate_login'])) {
    $username2 = mysqli_real_escape_string($db, $_POST['username2']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);

    if (empty($username2)) {
        array_push($errors, "Username is required");
    }
    if (empty($password2)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password2 = md5($password2);
        $query = "SELECT * FROM debate WHERE username2='$username2' AND password2='$password2'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username2'] = $username2;
          $_SESSION['success'] = "You are now logged in";
          header('location: DebateForm.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  ?>
