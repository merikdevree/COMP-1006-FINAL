<?php

class ViewUsers extends Database
{
    // get all users from the database
    protected function getAllUsers()
    {
        $stmt = $this->connect()->prepare("SELECT * FROM users");

        if (!$stmt->execute()) {
            $stmt = null;
            header("Location: ../users.php?error=stmtfailed");
            exit();
        }
        $result = $stmt->fetchAll();
        $stmt = null;
        return $result;
    }
}