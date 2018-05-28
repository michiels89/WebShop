<?php
namespace src;

use src\DataBase;


class Product{
    
    public function getAllProducts(){
        
        $db = new DataBase();
        $sql = "Select * from products";
        $db->executeWithoutParam($sql);
        $resultSet = $db->resultset();
        $db = null;
        $productList = [];
        foreach($resultSet as $product){
            array_push($productList, $product);
        }
        return $productList;
    }
    public function deleteProduct($id){
        $db = new Database();
        $sql = "DELETE FROM products WHERE id = :id";
        $db->executeWithParam($sql, array(array(':id', $id)));
        $db = null;
    }

}