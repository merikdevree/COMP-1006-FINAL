<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Login</title>
</head>

<body>
    <header>
        <nav>
            <ol>
                <li><a href="index.php">Home</a></li>
                <li><a onclick="showForm()">Login</a></li>
                <li><a href="users.php">Users</a></li>
                <li><a href="about.php">About</a></li>
            </ol>
        </nav>
    </header>
    <div id="overlay"></div>
    <div id="form-container">
        <button id="x" onclick="hideForm()">X</button>

        <form method="post">
            <form id="login-form">


                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="text" id="password" name="password" required>


                <div>
                    <input type="submit" value="Login">

                    <?php
                    require_once('database.php');
                    $database = new Database(); // creates a new database
                    if (isset($_POST) && !empty($_POST)) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $res = $database->create($username, $password);
                        if ($res) {
                            echo "<p>Thank you for logging in!</p>";
                        } else {
                            echo "<p>Oops something went wrong! Please try again.</p>";
                        }
                    }
                    ?>
                </div>

            </form>
    </div>

    <footer>
        <p>copyright i guess</p>
    </footer>
</body>

</html>