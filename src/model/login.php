<?php 

class loginModel
{
    public $db;
    public $id;
    public function __construct(PDO $db)
    {
        $this->db = $db;

    }
}

?>