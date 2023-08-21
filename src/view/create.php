<?php
class createView
{
    private $controller;
    private $template;
    public $errors = [];

    public function __construct(createController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "create.php";
    }
    public function render()
    {
        $message = "";

        if (!empty($_POST)) {
            $data = $this->controller->getDataForm();

            if (!$this->controller->formValidation()) {
                $errors["message"] = "Le mot de passe ne correspond pas ou doit contenir 8 caractères minimum, une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial";
            }
            if ($this->controller->createUser()) {
                header("Location: login");
            }
            else{
                $message = "erreur de base de données";
            }
            $message = "<div class=\"message-alert\">{$errors["message"]}</div>";

        }
        require $this->template;
    }
}




?>