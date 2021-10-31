<?php



class ProductsView extends products {

    public function showProductById($id) {
        $results = $this->getProductById($id);
        echo "<pre>";
        print_r($results);
        echo "<pre/>";

        if($results["product_type"] == "DVD-disc"){
            echo $results['sku'] . "<br>" .
                $results['name'] . "<br>" .
                $results['price'] . " $" ."<br>" .
                $results['size'] . "<br>";
        }
        elseif($results["product_type"] == "Book"){
            echo $results['sku'] . "<br>" .
                $results['name'] . "<br>" .
                $results['price'] . " $" ."<br>" .
                "Weight: " . $results['weight'] . "KG" . "<br>";
        }
        elseif($results["product_type"] == "Furniture"){
            echo $results['sku'] . "<br>" .
                $results['name'] . "<br>" .
                $results['price'] . " $" ."<br>" .
                "Dimension: " . $results['height'] . "x" . $results['width'] ."x".$results['length'] . "<br>";
        }
    }

    public function showAllProducts() {
        $results = $this->getAllProducts();
        $rows = count($results);


        for ($i = 0; $i < $rows; $i++){

        if($results[$i]["product_type"] == "DVD"){
            echo "<div class='uni-padding'>";
            echo "<input type='checkbox' name='checked[]' value=' ". $results[$i]['id'] . " '>";
            echo $results[$i]['sku'] . "<br>" .
             $results[$i]['name'] . "<br>" .
             $results[$i]['price'] . " $" ."<br>" .
             $results[$i]['size'] . "<br>";

            echo "</div>";

                }

        elseif($results[$i]["product_type"] == "Book"){
            echo "<div class='uni-padding'>";
            echo "<input type='checkbox' name='checked[]' value=' ". $results[$i]['id'] . " '>";
                echo $results[$i]['sku'] . "<br>" .
                    $results[$i]['name'] . "<br>" .
                    $results[$i]['price'] . " $" ."<br>" .
                    "Weight: " . $results[$i]['weight'] . "KG" . "<br>";
            echo "</div>";
            }
        elseif($results[$i]["product_type"] == "Furniture"){
            echo "<div class='uni-padding'>";
            echo "<input type='checkbox' name='checked[]' value=' ". $results[$i]['id'] . " '>";
            echo $results[$i]['sku'] . "<br>" .
                $results[$i]['name'] . "<br>" .
                $results[$i]['price'] . " $" ."<br>" .
                "Dimension: " . $results[$i]['height'] . "x" . $results[$i]['width'] ."x".$results[$i]['length'] . "<br>";
            echo "</div>";
        }

        }

    }
}