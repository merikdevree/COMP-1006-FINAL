<?php
// creates a database for the registered users
class Database
{
    private $host = "172.31.22.43";
    private $db_name = "Merik200462061";
    private $username = "Merik200462061";
    private $password = "hXxnH697ga";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
        } else {
            return $this->conn;
        }
    }
}
$database = new Database();
?>