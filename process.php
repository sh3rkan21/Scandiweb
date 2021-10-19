<?php

include "includes/class-autoload.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST["submit"])){
        if (isset($_POST["sku"]) && isset($_POST['name']) && isset($_POST["price"]) && isset($_POST['productType']) && isset($_POST["size"]) && isset($_POST["height"]) &&
            isset($_POST["width"]) && isset($_POST["lenght"]) && isset($_POST["weight"]))
        {
            $sku = $_POST["sku"];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $productType = $_POST['productType'];
            $size = $_POST['size'];
            $height = $_POST['height'];
            $width = $_POST['width'];
            $lenght = $_POST['lenght'];
            $weight = $_POST['weight'];

            $sql = "INSERT INTO products(sku, name, price, product_type,size,height,width,length,weight)
                                 VALUES(:sku, :name,:price,:product_type,:size,:height,:width,:length,:weight)";
            try {
                $conn = Connection::getConn();
                $stmt = $conn->prepare($sql);
                $stmt->execute([
                    'sku' => $sku,
                    'name' => $name,
                    'price' => $price,
                    'product_type' => $productType,
                    'size' => $size,
                    'height' => $height,
                    'width' => $width,
                    'length' => $lenght,
                    'weight' => $weight
                ]);
                echo "New user was added";
            } catch (PDOException $e) {
                echo "Error adding user: " . $e->getMessage();
            }
        }



    }
}




