<?php

include "ConnectDb.class.php";

class Products {

    protected function getProductById($id) {
        $sql = 'SELECT * FROM products WHERE id = ?';
        $stmt = ConnectDb::getInstance()->getConnection()->prepare($sql);
        $stmt->execute([$id]);


        $results = $stmt->fetch();
        return $results;
    }

    protected function getAllProducts() {
        $sql = 'SELECT * FROM products';
        $stmt = ConnectDb::getInstance()->getConnection()->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }

    protected function setProduct($sku,$name,$price,$productType,$size,$height,$width,$length,$weight) {

        $sql = "INSERT INTO products(sku,name,price,product_type,size,height,width,length,weight)VALUES(?,?,?,?,?,?,?,?,?)";
        $stmt = ConnectDb::getInstance()->getConnection()->prepare($sql);
        $stmt->execute([$sku,$name,$price,$productType,$size,$height,$width,$length,$weight]);
    }

}