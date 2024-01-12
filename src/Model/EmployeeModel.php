<?php

require_once PROJECT_ROOT_PATH . "/Model/Database.php";

class EmployeeModel extends database
{
    public function getEmployees()
    {
        return $this->select("SELECT * from employees");
    }

    public function getTotalEmployees()
    {
        return $this->select("SELECT count(distinct employeeNumber) as Total_Employees from employees");
    }

    public function checkNullEmployee()
    {
        return $this->select("SELECT employeeNumber from employees where employeeNumber is null");
    }
}
