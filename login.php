<?php

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Sanitize user input to prevent SQL injection
$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

// Perform the database query to check if the user exists
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) == 1) {
    // The login is successful, store user data in a session
    session_start();
    $_SESSION['username'] = $username;
    header("Location: users.php"); // Redirect to the users page
} else {
    echo "Invalid username or password. Please try again.";
}