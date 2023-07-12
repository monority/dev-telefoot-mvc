<?php

class loginController
{
    private $model;
    public function __construct(loginModel $model)
    {
        $this->model = $model;
    }

}