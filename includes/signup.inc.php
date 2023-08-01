<?php
if (isset($_POST['submit'])) {
    // include the database connection
    require_once 'database.php';
    // get the data from the form
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordConfirm = $_POST['pwdConfirm'];
    // validate the data
    if (empty($username)) {
        header("Location: ../signup.php?error=emptyusername");
        exit();
    }
    if (empty($email)) {
        header("Location: ../signup.php?error=emptyemail");
        exit();
    }
    if (empty($password)) {
        header("Location: ../signup.php?error=emptypassword");
        exit();
    }
    if (empty($passwordConfirm) || $passwordConfirm != $password) {
        header("Location: ../signup.php?error=passwordmismatch");
        exit();
    }
    // check if the username is already taken
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $database->conn->query($sql);
    if ($result->num_rows > 0) {
        header("Location: ../signup.php?error=usernametaken");
        exit();
    }
    // check if the email is already taken
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $database->conn->query($sql);
    if ($result->num_rows > 0) {
        header("Location: ../signup.php?error=emailtaken");
        exit();
    }
    // hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // insert the user into the database
    $sql = "INSERT INTO users (username, email, pwd) VALUES ('$username', '$email', '$hashedPassword')";
    $result = $database->conn->query($sql);
    if ($result) {
        header("Location: ../login.php?signup=success");
        exit();
    } else {
        header("Location: ../signup.php?error=sqlerror");
        exit();
    }
} else {
    header("Location: ../signup.php");
    exit();
}
?>