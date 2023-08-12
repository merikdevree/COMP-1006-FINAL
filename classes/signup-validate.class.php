<?php

class SignupValidate extends Signup
{

    private $username;
    private $email;
    private $password;
    private $passwordConfirm;

    public function __construct($username, $email, $password, $passwordConfirm)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->passwordConfirm = $passwordConfirm;
    }

    public function signUp()
    {
        //error checking
        if ($this->emptyFields() == false) {
            header("Location: ../signup.php?error=emptyfields");
            exit();
        } else if ($this->invalidUsername() == false) {
            header("Location: ../signup.php?error=username");
            exit();
        } else if ($this->invalidEmail() == false) {
            header("Location: ../signup.php?error=email");
            exit();
        } else if ($this->passwordMismatch() == false) {
            header("Location: ../signup.php?error=passwordmismatch");
            exit();
        } else if ($this->checkUser($this->username, $this->email) == true) {
            header("Location: ../signup.php?error=useremailtaken");
            exit();
        } else {
            $this->insertUser($this->username, $this->email, $this->password);
        }
    }
    private function emptyFields()
    {
        $result = false;
        if (empty($this->username) || empty($this->email) || empty($this->password) || empty($this->passwordConfirm)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUsername()
    {
        $result = false;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail()
    {
        $result = false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function passwordMismatch()
    {
        $result = false;
        if ($this->password !== $this->passwordConfirm) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function usernameTaken()
    {
        $result = false;
        if (!$this->checkUser($this->username, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
?>