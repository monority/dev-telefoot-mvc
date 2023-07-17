<?php
class indexView
{
    private $controller;
    private $template;

    public function __construct(indexController $controller)
    {
        $this->controller = $controller;
        $this->template = DIR_TEMPLATE . "index.php";
    }

    public function render()
    {
        require($this->template);
    }
}

?>