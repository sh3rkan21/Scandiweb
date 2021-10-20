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

$obj = new ProductsView();
$obj->showAllProducts();

$obj2 = new ProductsContr();
$obj2->addProduct("Skooby", "unNume", 32,"DVD");

?>
</body>
</html>