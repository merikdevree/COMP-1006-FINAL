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

<?php include 'includes/footer.php'; ?>