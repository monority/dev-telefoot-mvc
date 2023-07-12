<?php

class CreateModel
{
    public $db;
    public $email;
    public $firstname;
    public $lastname;
    public $password;

    public function __construct(PDO $db)
    {
        if (isset($_POST["email"])) {
            $this->email = trim(strip_tags($_POST["email"]));
        }

        if (isset($_POST["firstname"])) {
            $this->firstname = trim(strip_tags($_POST["firstname"]));
        }

        if (isset($_POST["lastname"])) {
            $this->lastname = trim(strip_tags($_POST["lastname"]));
        }

        if (isset($_POST["password"])) {
            $password = password_hash($this->password, PASSWORD_DEFAULT);
            $this->password = trim(strip_tags($_POST["password"]));
            
        }

        $this->db = $db;
    }
}

?>
