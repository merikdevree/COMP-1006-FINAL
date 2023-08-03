<?php
if (isset($_POST['submit'])) {
    // include the database connection
    require 'database.php';

    // get the data from the form
    $username = $_POST['username'];
    $hashedPassword = hash('sha512', $_POST['password']);

    // check if the user exists
    $sql = "SELECT user_id FROM users WHERE username = '$username' AND `password` = '$hashedPassword'";
    $result = mysqli_query($conn, $sql);
    $count = $result->num_rows;
    if ($count == 1) {
        // log the user in
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../index.php?login=success");
        $conn->close();
        exit();
    } else {
        // redirect back to the login page
        header("Location: ../login.php?error=invalid");
        $conn->close();
        exit();
    }

} else {
    // redirect back to the login page
    header("Location: ../login.php");
    $conn->close();
    exit();
}
?>