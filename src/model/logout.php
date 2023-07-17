<?php

class logoutModel
{
    public $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
}

?>