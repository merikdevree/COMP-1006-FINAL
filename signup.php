<?php include 'includes/header.php'; ?>

<main>
    <div class="signup-form">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirm Password">
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</main>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyfields") {
        echo "<p>Please fill in all fields.</p>";
    } else if ($_GET["error"] == "username") {
        echo "<p>Invalid username</p>";
    } else if ($_GET["error"] == "email") {
        echo "<p>Invalid email</p>";
    } else if ($_GET["error"] == "passwordmismatch") {
        echo "<p>Passwords do not match</p>";
    } else if ($_GET["error"] == "useremailtaken") {
        echo "<p>Username or email already taken</p>";
    } else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong. Please try again.</p>";
    } else if ($_GET["error"] == "none") {
        echo "<p>Sign up successful!</p>";
    }

}
?>

<?php include 'includes/footer.php'; ?>