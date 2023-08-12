<?php include 'includes/header.php'; ?>

<main>
    <div class="login-form">
        <h2>Log In</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="username" id="username" placeholder="Username/Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <button type="submit" name="submit">Log In</button>
        </form>
    </div>
</main>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyfields") {
        echo "<p>Please fill in all fields.</p>";
    } else if ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login information.</p>";
    } else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong. Please try again.</p>";
    } else if ($_GET["error"] == "none") {
        echo "<p>Log in successful!</p>";
    }
}
?>
<?php include 'includes/footer.php'; ?>