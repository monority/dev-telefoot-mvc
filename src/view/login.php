<?php
class loginView
{
    private $controller;
    private $template;

    public function __construct(loginController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "login.php";
    }

    public function render()
    {
        require($this->template);
    }
}

?>