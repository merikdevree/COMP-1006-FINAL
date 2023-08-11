<?php
if (isset($_POST['submit'])) {
    // get the data from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];

    include "../classes/database.class.php";
    include "../classes/signup.class.php";
    include "../classes/signup-validate.class.php";

    $signup = new SignupValidate($username, $email, $password, $passwordConfirm);

    $signup->signUp();

}
?>