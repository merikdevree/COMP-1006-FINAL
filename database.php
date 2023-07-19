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

    public function insertData($post)
    {
        $username = $this->conn->real_escape_string($_POST['username']);
        $email = $this->conn->real_escape_string($_POST['email']);
        $password = $this->conn->real_escape_string($_POST['password']);
        $query = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
        $sql = $this->conn->query($query);
        if ($sql == true) {
            //yeah idk
            header("Location: login.php?msg1=insert");
        } else {
            echo "Registration failed, please try again.";
        }
    }

    public function displayData()
    {
        $query = "SELECT * FROM users";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "<p>No found records</p>";
        }
    }

    //edit

    //delete
}

$database = new Database();