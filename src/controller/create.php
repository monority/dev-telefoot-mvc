<?php


class createController
{
    private $model;

    public function __construct(createModel $model)
    {
        $this->model = $model;
    }

    public function createUser()
    {
      
        $query = $this->model->db->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname,:lastname,:email,:password)");
        $query->bindParam(":email", $this->model->email, PDO::PARAM_STR);
        $query->bindParam(":firstname", $this->model->firstname, PDO::PARAM_STR);
        $query->bindParam(":lastname", $this->model->lastname, PDO::PARAM_STR);
        $query->bindParam(":password", $this->model->password, PDO::PARAM_STR);
        $query->execute();
        if ($query->execute()) {
            header("Location: ?page=login.php");
        }
    }
}