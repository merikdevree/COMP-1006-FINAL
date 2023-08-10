<?php include 'includes/header.php'; ?>
    <header>
    <img href="index.php" src="/assets/shark.png" alt="Logo">
        <nav>
            <ol>
                <li><a href="index.php">Home</a></li>
                <li><a href="users.php">Users</a></li>
                <li><a href="about.php">About</a></li>
            </ol>
        </nav>
    </header>
    
    <button class="open-button" onclick="openForm()">Login</button>

    <div class="form-popup" id="myForm">
        <form action="login.php" method="post" class="form-container">

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="Username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="Password" required>

            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>
    <main>
        
        <h1>Users</h1>
        <div class="table-wrapper">
        <table>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <!-- TODO: add php here -->
            <tr>
                <!-- Example data -->
                <td>1</td>
                <td>Merik</td>
                <td>123</td>
            </tr>
        </table>
        </div>
    </main>
</body>
<?php include 'includes/footer.php'; ?>