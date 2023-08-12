<!-- GLOBAL HEADER -->
<!-- INCLUDE ON EVERY PAGE -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Home</title>
    <script src="../js/form.js"></script>
</head>

<body>

    <header>
        <img href="index.php" src="../assets/Shark.png" alt="Logo">
        <nav>
            <div class="main-nav">

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Create Post</a></li>
                    <li><a href="about.php">about</a></li>
                </ul>
            </div>
            <!-- login buttons -->
            <!-- dynamic login buttons if user logged in -->
            <div class="login-buttons">
                <ul>
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        ?>
                        <li><a href="./profile.php">
                                <?php echo $_SESSION['username']; ?>
                            </a></li>
                        <li><a href="includes/logout.inc.php">Log Out</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="signup.php">Sign Up</a></li>
                        <li><a href="login.php">Log In</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </header>