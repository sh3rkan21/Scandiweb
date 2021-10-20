<?php

include "products.class.php";

class ProductsContr extends Products {

    public function addProduct()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['sku']) && !empty($_POST['sku']) &&
            isset($_POST['name']) && !empty($_POST['name']) &&
            isset($_POST['price']) && !empty($_POST['price']) &&
            isset($_POST['product_type']) && !empty($_POST['product_type']) &&
            isset($_POST['size'])&&
            isset($_POST['height'])&&
            isset($_POST['width'])&&
            isset($_POST['length'])&&
            isset($_POST['weight']))

                $sku = $_POST['sku'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $productType = $_POST['product_type'];
                $size = $_POST['size'];
                $height = $_POST['height'];
                $width = $_POST['width'];
                $length = $_POST['length'];
                $weight = $_POST['weight'];

            $this->setProduct($sku,$name,$price,$productType,$size,$height,$width,$length,$weight);
        }

        header("location: ../index.php");

    }
}
$muie = new ProductsContr();
$muie->addProduct();