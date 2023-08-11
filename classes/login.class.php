<?php

class Login extends Database
{

    protected function getUser($username, $password)
    {
        $stmt = $this->connect()->prepare("SELECT `password` FROM users WHERE username = ? OR email = ?");


        if (!$stmt->execute([$username, $username])) {
            $stmt = null;
            header("Location: ../login.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            header("Location: ../login.php?error=nouser");
            exit();
        }

        $hashedPassword = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $passwordCheck = password_verify($password, $hashedPassword[0]['password']);

        if ($passwordCheck == false) {
            header("Location: ../login.php?error=wrongpassword");
            exit();
        } else if ($passwordCheck == true) {
            $stmt = $this->connect()->prepare("SELECT * FROM users WHERE username = ? OR email = ? AND `password` = ?");

            if (!$stmt->execute([$username, $username, $hashedPassword[0]['password']])) {
                $stmt = null;
                header("Location: ../login.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                header("Location: ../login.php?error=nouser");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['user_id'] = $user[0]['user_id'];
            $_SESSION['username'] = $user[0]['username'];
        }
    }

}
?>