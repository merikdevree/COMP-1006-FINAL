<?php

class SignupValidate
{

    private $username;
    private $email;
    private $password;
    private $passwordConfirm;

    public function __construct($username, $email, $password, $passwordConfirm)
    {
        $this->$username = $username;
        $this->$email = $email;
        $this->$password = $password;
        $this->$passwordConfirm = $passwordConfirm;
    }

    private function emptyFields()
    {
        $result;
        if (empty($this->$username) || empty($this->$email) || empty($this->$password) || empty($this->$passwordConfirm)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUsername()
    {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->$username)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail()
    {
        $result;
        if (!filter_var($this->$email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function passwordMismatch()
    {
        $result;
        if ($this->$password !== $this->$passwordConfirm) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
?>