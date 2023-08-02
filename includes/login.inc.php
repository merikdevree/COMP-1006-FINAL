<?php
if (isset($_POST['submit'])) {
    // include the database connection
    require_once 'database.php';

    // get the data from the form
    $username = $_POST['username'];
    $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // validate the data

    // check if the user exists
    $sql = "SELECT user_id FROM users WHERE username = '$username' AND `password` = '$hashedPassword'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
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