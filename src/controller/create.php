<?php


class createController
{
    private $model;
    public $errorEmail;
    public $errorEmailConfirmation;
    public $errorPassword;
    public $errorLastname;
    public $errorFirstname;
    public $errorPasswordConfirmation;
    public function __construct(createModel $model)
    {
        $this->model = $model;
        if (!filter_var($this->model->email, FILTER_VALIDATE_EMAIL)) {
            $this->errorEmail = "L'adresse saisie n'est pas valide";

        }
        if (empty($this->model->firstname)) {
            $this->errorFirstname = "Vous devez saisir un prénom";
        }
        if (empty($this->model->lastname)) {
            $this->errorLastname = "Vous devez saisir un nom";
        }
        $uppercase = preg_match("/[A-Z]/", $this->model->password);
        $lowercase = preg_match("/[a-z]/", $this->model->password);
        $number = preg_match("/[0-9]/", $this->model->password);

        if (!$uppercase || !$lowercase || !$number || strlen($this->model->password) < 8) {
            $this->errorPassword = "Le mot de passe doit contenir 8 caractères minimum, une lettre majuscule, une lettre minuscule et un chiffre";
        }

        if ($this->model->password != $this->model->confirmPassword) {
            $this->errorPasswordConfirmation = "Les mots de passe sont différents";
        }

        if ($this->model->email != $this->model->confirmEmail) {
            $this->errorEmailConfirmation = "Les emails sont différents";
        }

    }
    public function createUser()
    {

        if (empty($this->errorEmail) && empty($this->errorEmailConfirmation) && empty($this->errorPassword) && empty($this->errorPasswordConfirmation)) {

            $passwordhash = password_hash($this->model->password, PASSWORD_DEFAULT);
            $this->model->password = $passwordhash;
            $query = $this->model->db->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname,:lastname,:email,:password)");
            $query->bindParam(":email", $this->model->email, PDO::PARAM_STR);
            $query->bindParam(":firstname", $this->model->firstname, PDO::PARAM_STR);
            $query->bindParam(":lastname", $this->model->lastname, PDO::PARAM_STR);
            $query->bindParam(":password", $this->model->password, PDO::PARAM_STR);
            if ($query->execute()) {
                header("Location: ?page=index");
            }
        }
    }

}

?>