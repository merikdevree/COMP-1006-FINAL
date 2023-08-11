<?php

class LoginValidate extends Login
{

    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function login()
    {
        if ($this->emptyFields() == false) {
            header("Location: ../login.php?error=emptyfields");
            exit();
        }

        $this->getUser($this->username, $this->password);
    }
    private function emptyFields()
    {
        $result = false;
        if (empty($this->username) || empty($this->password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
?>