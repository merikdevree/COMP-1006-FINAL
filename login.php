<?php include 'includes/header.php'; ?>

<main>
    <div class="login-form">
        <h2>Log In</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uname" id="uname" placeholder="Username/Email">
            <input type="password" name="pwd" id="pwd" placeholder="Password">
            <button type="submit" name="Submit">Log In</button>
        </form>
    </div>
</main>

<?php include 'includes/footer.php'; ?>