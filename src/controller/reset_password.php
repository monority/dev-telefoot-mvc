<?php

class resetpasswordController
{
    private $model;
    public function __construct(resetpasswordModel $model)
    {
        $this->model = $model;
    }
    public function getUser() {
        $query = $this->model->db->prepare("SELECT email FROM users WHERE email=:email");
        $query->bindParam(":email", $this->model->email);
        $query->execute();
        $user = $query->fetch();
        
        return $user;
    }

}