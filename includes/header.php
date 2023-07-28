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
    <title>Home</title>

</head>

<body>
    
    <header>
        <img href="index.php" src="/assets/shark.png" alt="Logo">
        <nav>
            
            <ol>
                <li><div>
                <button class="signup">
                    <a href="signup.php">Sign Up</a>
                </button>
            </div></li>
                <li><button class="open-button" onclick="openForm()">Login</button>

<div class="form-popup" id="myForm">
    <form action="login.php" method="post" class="form-container">

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="Username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="Password" required>

        <button type="submit" class="btn">Login</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="users.php">Users</a></li>
                <li><a href="about.php">About</a></li>
            </ol>
            <!-- login buttons -->
            
        </nav>
    </header>