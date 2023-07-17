<?php

class loginController
{
    private $model;
    public $result;
    public $errorName;
    public $errorPassword;
    public $errormsg;
    public function __construct(loginModel $model)
    {
        $this->model = $model;
        $this->errormsg = "Impossible de se connecter avec les informations saisies, veuillez réessayer";
        
    }
    public function getUser()
    {
        $query = $this->model->db->prepare("SELECT firstname, email, password FROM users WHERE email LIKE :email");
        $query->bindParam(":email", $this->model->email);
        $query->execute();
        $this->result = $query->fetch();
        if (!empty($this->result) && password_verify($this->model->password, $this->result["password"])) {
            session_start();
            $_SESSION["user"] = array(
                "name" => $this->result["firstname"],
                "ip" => $_SERVER["REMOTE_ADDR"]
                
            );
            header("Location: index.php");
        } else {
            return $this->errormsg;
        }

    }

}