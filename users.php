<?php
session_start();
include 'includes/header.php';
//send to login page if not logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<main>
    <h1>Users</h1>
    <div class="table-wrapper">
        <table>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <?php
            // get users
            include 'classes/view-users.class.php';
            $viewUsers = new ViewUsers();
            $users = $viewUsers->getAllUsers();
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user["id"] . "</td>";
                echo "<td>" . $user["username"] . "</td>";
                echo "<td>" . $user["password"] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</main>

<?php include 'includes/footer.php'; ?>