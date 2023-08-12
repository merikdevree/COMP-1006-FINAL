<?php include 'includes/header.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
} else {
    include "classes/view-users.class.php";
    $viewUsers = new ViewUsers();
    $users = $viewUsers->getUsers();
}
?>
<main>
    <table>
        <tr>
            <th>User Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php foreach ($users as $user) {
            echo '<tr 
                        <td>' . $user['user_id'] . '</td>
                        <td>' . $user['username'] . '</td>
                        <td>' . $user['email'] . '</td>
                        <td>' . $user['password'] . '</td>
                    </tr>';
        } ?>
    </table>
</main>
<?php include 'includes/footer.php'; ?>