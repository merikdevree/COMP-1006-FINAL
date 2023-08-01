<?php include 'includes/header.php'; ?>

<main>
    <div class="signup-form">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="email" name="" id="email" placeholder="Email">
            <input type="text" name="uname" id="uname" placeholder="Username">
            <input type="password" name="pwd" id="pwd" placeholder="Password">
            <input type="password" name="pwdConfirm" id="pwdConfirm" placeholder="Confirm Passwword">
            <button type="submit" name="Submit">Sign Up</button>
        </form>
    </div>
</main>

<?php include 'includes/footer.php'; ?>