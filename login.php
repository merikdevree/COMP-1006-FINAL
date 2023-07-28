<?php
require 'database.php';
session_start();
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // check if the user exists
    $sql = "SELECT id, username, password FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($database->conn, $sql);
    // if the user exists, log them in
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        header("Location: index.php");
    } else {
        echo "Incorrect username or password";
    }

}
?>