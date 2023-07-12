<?php

class HomeController
{
    private $model;

    public function __construct(HomeModel $model)
    {
        $this->model = $model;
    }
    // public function getLastBikes()
    // {
    //     $query = $this->model->db->query("SELECT * FROM bike3000.bike ORDER BY id DESC LIMIT 0,3");
    //     $bikes = $query->fetchAll(PDO::FETCH_ASSOC);
    //     return $bikes;
    // }

}