<?php

class CreateModel
{
    public $db;
    public $email;
    public $firstname;
    public $lastname;
    public $password;
    public $confirmPassword;
    public $confirmEmail;

    public function __construct(PDO $db)
    {
        $this->db = $db;
        if (!empty($_POST)) {
            
            $this->email = trim(strip_tags($_POST["email"]));
            $this->firstname = trim(strip_tags($_POST["firstname"]));
            $this->lastname = trim(strip_tags($_POST["lastname"]));
            $this->password = trim(strip_tags($_POST["password"]));
            $this->confirmEmail = trim(strip_tags($_POST["confirmEmail"]));
            $this->confirmPassword= trim(strip_tags($_POST["confirmPassword"]));
        }

    }
}

?>