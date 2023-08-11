<?php

class Signup extends Database
{

    protected function insertUser($username, $email, $password)
    {
        $stmt = $this->connect()->prepare("INSERT INTO users (username, email, `password`) VALUES (?, ?, ?);");

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if (!$stmt->execute([$username, $email, $hashedPassword])) {
            $stmt = null;
            header("Location: ../signup.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
        header("Location: ../login.php?error=none");
        exit();
    }

    protected function checkUser($username, $email)
    {
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE username = ? OR email = ?");

        if (!$stmt->execute([$username, $email])) {
            $stmt = null;
            header("Location: ../signup.php?error=stmtfailed");
            exit();
        }
        $resultCheck = false;
        if ($stmt->rowCount() > 0) {
            $resultCheck = true;
        } else {
            $resultCheck = false;
        }

        return $resultCheck;
    }
}
?>