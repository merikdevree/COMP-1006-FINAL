<?php
// creates a database for the registered users
class Database
{
    private $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect('172.31.22.43', 'Merik200462061', 'hXxnH697ga', 'Merik200462061');

        if (mysqli_connect_error()) {
            die("Database could not connect" . mysqli_connect_error() . mysqli_connect_error());
        }
    }

    public function create($username, $password)
    {
        $username = $this->sanitizer($username);
        $password = $this->sanitizer($password);

        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        $res = mysqli_query($this->connection, $sql);

        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function sanitizer($var)
    {
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }
}

$database = new Database();