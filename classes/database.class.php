<?php

class Database
{
    private function connect()
    {
        try {
            $host = "172.31.22.43";
            $db_name = "Merik200462061";
            $username = "Merik200462061";
            $password = "hXxnH697ga";
            $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
}