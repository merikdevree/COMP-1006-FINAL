<?php
if (isset($_POST['submit'])) {
    // get the data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    include "../classes/database.class.php";
    include "../classes/login.class.php";
    include "../classes/login-validate.class.php";

    $login = new LoginValidate($username, $password);

    $login->login();

}
?>