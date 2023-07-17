<?php
class loginView
{
    private $controller;
    private $template;
    public $message;
    public function __construct(loginController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "login.php";
    }

    public function render()
    {
        if (!empty($_POST)) {
            $this->controller->getUser();
        }
        require($this->template);
       
    }
}

?>