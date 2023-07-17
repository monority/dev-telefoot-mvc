<?php

class indexController
{
    private $model;
    public function __construct(indexModel $model)
    {
        $this->model = $model;
    }


}