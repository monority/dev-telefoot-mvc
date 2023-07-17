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
        if (!empty($_POST)) {
            $errors["firstname"] = $this->controller->errorFirstname;
            $errors["lastname"] = $this->controller->errorLastname;
            $errors["password"] = $this->controller->errorPassword;
            $errors["email"] = $this->controller->errorEmail;
            $errors["confirmEmail"] = $this->controller->errorEmailConfirmation;
            $errors["confirmPassword"] = $this->controller->errorPasswordConfirmation;
            $this->controller->createUser();
        }
       
        require $this->template;
    }

    

}




?>