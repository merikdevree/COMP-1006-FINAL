<?php

class ViewUsers extends Database
{
    public function getUsers()
    {
        $stmt = $this->connect()->prepare("SELECT * FROM users;");
        if (!$stmt->execute()) {
            $stmt = null;
            header("Location: ../users.php?error=stmtfailed");
            exit();
        }
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $result;
    }
}