<?php

require_once PROJECT_ROOT_PATH . "/Model/Database.php";

class CustomerModel extends Database
{
    public function getCustomers()
    {
        return $this->select("SELECT * from customers");
    }

    public function getTotalCustomers()
    {
        return $this->select("SELECT count(distinct customerNumber) as total_customers from customers");
    }

    public function checkNullCustomer()
    {
        return $this->select("SELECT customerNumber from customers where customerNumber is null");
    }
}
