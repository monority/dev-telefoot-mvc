<?php
class createView
{
    private $controller;
    private $template;

    public function __construct(createController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "create.php";
    }

    public function render()
    {
        require($this->template);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $success = $controller->createUser();
            if ($success) {
                header("Location: ?page=login.php");
                exit();
            }
        }
    }
}
?>