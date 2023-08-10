<?php include 'includes/header.php'; ?>

<main>
    <div class="signup-form">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirm Passwword">
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</main>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Please fill in all fields.</p>";
    } else if ($_GET["error"] == "invalidusername") {
        echo "<p>Invalid username.</p>";
    } else if ($_GET["error"] == "invalidemail") {
        echo "<p>Invalid email.</p>";
    } else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords don't match.</p>";
    } else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken.</p>";
    } else if ($_GET["error"] == "emailtaken") {
        echo "<p>An account is already associated with this email.</p>";
    } else if ($_GET["error"] == "sqlerror") {
        echo "<p>Something went wrong. Please try again.</p>";
    }
} else if (isset($_GET["signup"])) {
    if ($_GET["signup"] == "success") {
        echo "<p>Sign up successful!</p>";
    }
}
?>

<?php include 'includes/footer.php'; ?>