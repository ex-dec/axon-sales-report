<?php

require_once PROJECT_ROOT_PATH . "/Model/Database.php";

class ProductModel extends Database
{
    public function getProducts()
    {
        return $this->select("SELECT * from products");
    }

    public function getTotalProducts()
    {
        return $this->select("SELECT count(distinct productCode) as total_product from products");
    }

    public function getProductByProductLine($productLine)
    {
        return $this->select(
            "SELECT productLine, count(productCode) as Total_Products
            from products
            group by productLine;"
        );
    }

    public function getQtyInStock()
    {
        return $this->select(
            "SELECT productLine , sum(quantityInStock) as Quantity_In_Stock 
            from products group by productLine"
        );
    }
}
