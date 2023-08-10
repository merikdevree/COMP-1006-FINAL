<?php include 'includes/header.php'; ?>

<main>
    <div class="login-form">
        <h2>Log In</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <button type="submit" name="submit">Log In</button>
        </form>
    </div>
</main>

<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "invalid") {
        echo "<p class='error'>Invalid username or password.</p>";
        echo "<p>$password</p>";
        echo "<p>$hashedPassword</p>";
    }
} else if (isset($_GET['login'])) {
    if ($_GET['login'] == "success") {
        echo "<p class='success'>You have successfully logged in.</p>";
    }
}
?>
<?php include 'includes/footer.php'; ?>