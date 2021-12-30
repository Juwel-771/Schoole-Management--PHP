<?php
session_start();

// initializing variables
$full_name = "";
$id   = "";
$book = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'borrow');

// REGISTER USER

if (isset($_POST['rent_login'])) {
    // receive all input values from the form
    $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $book = mysqli_real_escape_string($db, $_POST['book']);
   
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($full_name)) { array_push($errors, "Full Name is required"); }
    if (empty($id)) { array_push($errors, "Id is required"); }
    if (empty($book)) { array_push($errors, "Book name is required"); }
  
    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM rent WHERE fullname='$full_name' OR id='$id' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
    if ($user) { // if user exists
      if ($user['full_name'] === $full_name) {
        array_push($errors, "Username already already borrowed");
      }
  
      if ($user['id'] === $id) {
        array_push($errors, "id already exists");
      }
    }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        //encrypt the password before saving in the database
  
        $query = "INSERT INTO rent (full_name, id, book)
                  VALUES('$full_name', '$id', '$book')";
        mysqli_query($db, $query);
        $_SESSION['full_name'] = $full_name;
        $_SESSION['success'] = "Success. Please come to the Academic Libary with PIN code and collect you books in 2 days";
        header('location: rentdone.php');
    }
  }

  ?>
