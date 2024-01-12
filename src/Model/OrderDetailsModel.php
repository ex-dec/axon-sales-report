<?php

require_once PROJECT_ROOT_PATH . "/Model/Database.php";

class OrderDetailsModel extends Database
{
    public function getOrderDetails()
    {
        return $this->select("SELECT * from orderdetails;");
    }

    public function getTotalOrderDetails()
    {
        return $this->select("SELECT count(distinct orderNumber) as Total_Orders from orders");
    }
}
