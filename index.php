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
<!--       header-->
        <header>
<!--          topbar-->
            <div id="topbar" class="uni-padding">
                <p id="productlist">Product list</p>
                <div id="buttons">
                <a href="addProduct.php"><button name="addproduct">Add product</button></a>
                    <form  action="classes/productscontr.class.php" method="post"><input type="submit" name="delete" value="Mass Delete">
                        <div style="display: inline-flex; flex-wrap: wrap;">
                            <?php
                            $obj = new ProductsView();
                            $obj->showAllProducts();
                            ?>
                        </div>
                    </form>
                </div>
        </header>


    </div>
    </div>

        </div>
    </div>
</div>



</body>
</html>