<?php

class logoutController
{
    private $model;
    public function __construct(logoutModel $model)
    {
        $this->model = $model;
    }
}