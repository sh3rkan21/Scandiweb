<?php
 include "includes/class-autoload.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scandiweb</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
<!--        header-->
        <header>
<!--            topbar-->
            <div id="topbar" class="uni-padding">
                <p id="productlist">Product list</p>
                <div id="buttons">
                <a href="addProduct.php"><button name="addproduct">Add product</button></a>
                <button name="massdelete">Mass delete</button>
                </div>
            </div>

        </header>
    </div>

<?php
    $prodObj = new Product();
     $var = $prodObj->getProduct(1);
     echo $var[0]['sku'] . "<br>";
     echo $var[0]['name'] . "<br>";
     echo $var[0]['price'] . "<br>";
     echo $var[0]['product_type'] . "<br>";
     echo $var[0]['size'] . "<br>";

?>


</body>
</html>