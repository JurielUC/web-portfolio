<?php

session_start();
// Check if the form has been submitted
require 'dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Check if the username and password fields are not empty
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    // Sanitize the input to prevent SQL injection attacks
    $username = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query the database to check if the username and password are correct
    $query = "SELECT * FROM tb_myacc WHERE email = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // If a matching record is found, the login is successful
    if (mysqli_num_rows($result) == 1) {
      // Store the user's data in the session and redirect to the dashboard
      $_SESSION['logged_in'] = true;
      $_SESSION['email'] = $username;
      header('Location: ../dashboard/dashboard.php');
      exit;

    } else {
      // If no matching record is found, display an error message
      $error = "Invalid username or password!";
      header("Location: ../login.php?message=$error");
    }

  } else {
    // If the username or password field is empty, display an error message
    $error = "Please enter a username and password!";
    header("Location: ../login.php?message=$error");
  }
}

?>