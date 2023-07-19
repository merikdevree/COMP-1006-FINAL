<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ol>
                <li><a>Home</a></li>
                <li><a>Login</a></li>
                <li><a>Users</a></li>
                <li><a>About</a></li>
            </ol>
        </nav>
    </header>

    <div id="form-container">

        <form method="post">
            <form id="pizza-form">

                
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="text" id="password" name="password" required>


                <div>
                    <input type="submit" value="Login">

                    <?php
                    require_once ('database.php');
                    $database = new Database(); // creates a new database
                    if (isset($_POST) && !empty($_POST)) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $res = $database->create($username, $password);
                        if($res){
                            echo "<p>Thank you for your order!</p>";
                        }
                        else{
                             echo "<p>Oops something went wrong! Please try again</p>";
                    }
                }
                    ?>
                </div>

            </form>
    </div>
</body>

</html>