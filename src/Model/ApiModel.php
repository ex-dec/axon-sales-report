<?php

require_once PROJECT_ROOT_PATH . "/Model/Database.php";

class ApiModel extends Database
{
    public function example()
    {
        return $this->query("SHOW databases;");
    }
}
