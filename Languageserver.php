<?php
session_start();

// initializing variables
$username7 = "";
$email7    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'language_club');

// REGISTER USER
if (isset($_POST['Language_reg'])) {
  // receive all input values from the form
  $username7 = mysqli_real_escape_string($db, $_POST['username7']);
  $email7 = mysqli_real_escape_string($db, $_POST['email7']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username7)) { array_push($errors, "Username is required"); }
  if (empty($email7)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, " Passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM lan WHERE username7='$username7' OR email7='$email7' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username7'] === $username7) {
      array_push($errors, "Username already exists");
    }

    if ($user['email7'] === $email7) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password7 = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO lan (username7, email7, password7)
  			  VALUES('$username7', '$email7', '$password7')";
  	mysqli_query($db, $query);
  	$_SESSION['username7'] = $username7;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: LanguageForm.php');
  }
}
if (isset($_POST['Language_login'])) {
    $username7 = mysqli_real_escape_string($db, $_POST['username7']);
    $password7 = mysqli_real_escape_string($db, $_POST['password7']);

    if (empty($username7)) {
        array_push($errors, "Username is required");
    }
    if (empty($password7)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password7 = md5($password7);
        $query = "SELECT * FROM lan WHERE username7='$username7' AND password7='$password7'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username7'] = $username7;
          $_SESSION['success'] = "You are now logged in";
          header('location: LanguageForm.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  ?>
