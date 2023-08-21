<?php


class createController
{
    private $model;

    public function __construct(createModel $model)
    {

        $this->model = $model;
    }
    public function getDataForm() {
        return array(
            "email" => $this->model->email,
            "emailConfirm" => $this->model->confirmEmail,
            "password" => $this->model->password,
            "passwordConfirm" => $this->model->confirmPassword,
            "firstname" => $this->model->firstname,
            "lastname" => $this->model->lastname
        );
    }
    public function formValidation() {
        if (($this->model->email != $this->model->confirmEmail) || ($this->model->password != $this->model->confirmPassword)) {
            return false;
        } else {
            $uppercase = preg_match("/[A-Z]/", $this->model->password);
            $lowercase = preg_match("/[a-z]/", $this->model->password);
            $number = preg_match("/[0-9]/", $this->model->password);
            $specialChar = preg_match("/[^a-zA-Z0-9]/", $this->model->password);
    
            if (!$uppercase || !$lowercase || !$number || !$specialChar || strlen($this->model->password) < 8) {
                return false;
            }
        }

        return true;
    }

    public function createUser() : bool
    {


            $passwordhash = password_hash($this->model->password, PASSWORD_DEFAULT);
            $this->model->password = $passwordhash;
            $query = $this->model->db->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname,:lastname,:email,:password)");
            $query->bindParam(":email", $this->model->email, PDO::PARAM_STR);
            $query->bindParam(":firstname", $this->model->firstname, PDO::PARAM_STR);
            $query->bindParam(":lastname", $this->model->lastname, PDO::PARAM_STR);
            $query->bindParam(":password", $this->model->password, PDO::PARAM_STR);
            if ($query->execute()) {
                return true;
            }
            else {
                return false;
            }
        
    }

}

?>