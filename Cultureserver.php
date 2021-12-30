<?php
session_start();

// initializing variables
$username5 = "";
$email5    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'culture_club');

// REGISTER USER
if (isset($_POST['culture_reg'])) {
  // receive all input values from the form
  $username5 = mysqli_real_escape_string($db, $_POST['username5']);
  $email5 = mysqli_real_escape_string($db, $_POST['email5']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username5)) { array_push($errors, "Username is required"); }
  if (empty($email5)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, " Passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM culture WHERE username5='$username5' OR email5='$email5' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username5'] === $username5) {
      array_push($errors, "Username already exists");
    }

    if ($user['email5'] === $email5) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password5 = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO culture (username5, email5, password5)
  			  VALUES('$username5', '$email5', '$password5')";
  	mysqli_query($db, $query);
  	$_SESSION['username5'] = $username5;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: CultureForm.php');
  }
}
if (isset($_POST['culture_login'])) {
    $username5 = mysqli_real_escape_string($db, $_POST['username5']);
    $password5 = mysqli_real_escape_string($db, $_POST['password5']);

    if (empty($username5)) {
        array_push($errors, "Username is required");
    }
    if (empty($password5)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password5 = md5($password5);
        $query = "SELECT * FROM culture WHERE username5='$username5' AND password5='$password5'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username5'] = $username5;
          $_SESSION['success'] = "You are now logged in";
          header('location: CultureForm.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  ?>
