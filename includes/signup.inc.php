<?php
if (isset($_POST['submit'])) {
    // get the data from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];

    include "../classes/signup.class.php";
    include "../classes/signup-validate.class.php";

    $signup = new SignupValidate($username, $email, $password, $passwordConfirm);

    // check if the username is already taken
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
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

    //sanitize the data
    $username = $database->conn->real_escape_string($username);
    $email = $database->conn->real_escape_string($email);
    $password = $database->conn->real_escape_string($password);

    // hash the password
    $hashedPassword = hash('sha512', $password);
    // insert the user into the database
    $sql = "INSERT INTO users (username, email, `password`) VALUES ('$username', '$email', '$hashedPassword')";
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