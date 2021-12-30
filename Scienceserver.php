<?php
session_start();

// initializing variables
$username4 = "";
$email4    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'science_club');

// REGISTER USER
if (isset($_POST['science_reg'])) {
  // receive all input values from the form
  $username4 = mysqli_real_escape_string($db, $_POST['username4']);
  $email4 = mysqli_real_escape_string($db, $_POST['email4']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username4)) { array_push($errors, "Username is required"); }
  if (empty($email4)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, " Passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM science WHERE username4='$username4' OR email4='$email4' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username4'] === $username4) {
      array_push($errors, "Username already exists");
    }

    if ($user['email4'] === $email4) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password4 = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO science (username4, email4, password4)
  			  VALUES('$username4', '$email4', '$password4')";
  	mysqli_query($db, $query);
  	$_SESSION['username4'] = $username4;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ScienceForm.php');
  }
}
if (isset($_POST['science_login'])) {
    $username4 = mysqli_real_escape_string($db, $_POST['username4']);
    $password4 = mysqli_real_escape_string($db, $_POST['password4']);

    if (empty($username4)) {
        array_push($errors, "Username is required");
    }
    if (empty($password4)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password4 = md5($password4);
        $query = "SELECT * FROM science WHERE username4='$username4' AND password4='$password4'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username4'] = $username4;
          $_SESSION['success'] = "You are now logged in";
          header('location: ScienceForm.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  ?>
