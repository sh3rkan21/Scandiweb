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
                        <div style="display: inline-flex; flex-wrap: wrap; ">
                            <?php
                            $obj = new ProductsView();
                            $obj->showAllProducts();
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </header>


    </div>
<!--<div class="col-md-12">-->
<!--    <div class="card mt-4">-->
<!--        <div class="card-body">-->
<!--            <form action="" method="post">-->
<!--                <table class="table table-bordered table-striped">-->
<!--                    <tbody>-->
<!--                        <tr>-->
<!--                            <th>-->
<!--                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>-->
<!--                            </th>-->
<!--                            <th>ID</th>-->
<!--                            <th>SKU</th>-->
<!--                            <th>name</th>-->
<!--                            <th>price</th>-->
<!--                        </tr>-->
<!--                    </tbody>-->
<!--                    <tbody>-->
<!--                    --><?php
//                        $conn = ConnectDb::getInstance()->getConnection();
//                        $query = "SELECT * FROM products";
//                        $stmt = $conn->query($query);
//                        $result = $stmt->fetchAll();
//                        if($stmt->rowCount() > 0) {
//                            foreach ($result as $res)
//                            {
//                                ?>
<!--                                <tr>-->
<!--                                    <td style="width: 10px; text-align: center">-->
<!--                                        <input type="checkbox" name="delete_id[]" value="--><?php // $res['id'];?><!--">-->
<!--                                    </td>-->
<!--                                    <td> --><?//= $res['id'] ?><!--</td>-->
<!--                                    <td> --><?//= $res['sku'] ?><!--</td>-->
<!--                                    <td> --><?//= $res['name'] ?><!--</td>-->
<!--                                    <td> --><?//= $res['price'] ?><!--</td>-->
<!--                                </tr>-->
<!--                                --><?php
//                            }
//                        }
//                    ?>
<!--                    <tr>-->
<!--                        <td></td>-->
<!--                    </tr>-->
<!--                    </tbody>-->
<!--                </table>-->
<!--            </form>-->
        </div>
    </div>
</div>



</body>
</html>