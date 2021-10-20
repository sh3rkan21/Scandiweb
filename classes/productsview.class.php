<?php

class ProductsView extends products {

    public function showProductById($id) {
        $results = $this->getProductById($id);

        echo "SKU: " . $results[0]['sku'] . "<br>" . $results[0]['name'];
    }

    public function showAllProducts() {
        $results = $this->getAllProducts();
        $rows = count($results);


        for ($i = 0; $i < $rows; $i++){
        if($results[$i]["product_type"] == "DVD"){
        echo $results[$i]['sku'] . "<br>" .
             $results[$i]['name'] . "<br>" .
             $results[$i]['price'] . " $" ."<br>" .
             $results[$i]['size'] . "<br>";
                }
        elseif($results[$i]["product_type"] == "Book"){
                echo $results[$i]['sku'] . "<br>" .
                    $results[$i]['name'] . "<br>" .
                    $results[$i]['price'] . " $" ."<br>" .
                    "Weight: " . $results[$i]['weight'] . "KG" . "<br>";
            }
        elseif($results[$i]["product_type"] == "Furniture"){
            echo $results[$i]['sku'] . "<br>" .
                $results[$i]['name'] . "<br>" .
                $results[$i]['price'] . " $" ."<br>" .
                "Dimension: " . $results[$i]['height'] . "x" . $results[$i]['width'] ."x".$results[$i]['length'] . "<br>";
        }

        }
    }
}