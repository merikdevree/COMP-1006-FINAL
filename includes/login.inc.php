<?php
if (isset($_POST['submit'])) {
    // include the database connection
    require_once 'database.php';

    // get the data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = hash('sha512', $password);

    // validate the data
    if (empty($username) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    // check for match
    $sql = "SELECT * FROM users WHERE username = '$username' AND `password` = '$hashedPassword'";
    $result = $database->conn->query($sql);

    if ($result->num_rows == 1) {
        // log the user in
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../index.php?login=success");
        exit();
    } else {
        // redirect back to the login page
        header("Location: ../login.php?error=invalid");
        exit();
    }

} else {
    // redirect back to the login page
    header("Location: ../login.php");
    $conn->close();
    exit();
}
?>