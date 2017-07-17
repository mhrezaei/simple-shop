<?php
include_once 'config/config.php';

include 'header.php';

include 'slider.php';;

if (isset($_GET['catID']) and $_GET['catID'] > 0)
{
    $catID = $_GET['catID'];
    $products = DatabaseHandler::GetAll("SELECT * FROM `products` WHERE `category` = $catID AND `status` = 1");
}
else
{
    $products = DatabaseHandler::GetAll("SELECT * FROM `products` WHERE `status` = 1");
}

?>


<!--<div class="container" style="margin-top: 20px;">-->
<!---->
<!--    <div class="col-md-3" style="border: 1px solid red"></div>-->
<!--    <div class="col-md-9" style="border: 1px solid black"></div>-->
<!---->
<!--</div>-->

<div class="container" style="margin-top: 20px;">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">محصولات</h3>
            </div>
            <div class="panel-body">
                <div id="products" class="row list-group">
                    <?php if ($products){ ?>
                    <?php foreach ($products as $product){ ?>
                        <div class="item  col-xs-4 col-lg-4">
                            <div class="thumbnail">
                                <img class="group list-group-image" src="<?php echo $uri . '/' . $product['image']; ?>" alt="<?php echo $category['title']; ?>" />
                                <div class="caption">
                                    <a href="product?id=<?php echo $product['id']; ?>" style="font-size: 17px;"> <h4 class="group inner list-group-item-heading">
                                            <?php echo $product['title']; ?></h4></a>
                                    <p class="group inner list-group-item-text" style="font-size: 15px; text-align: justify;">
                                        <?php echo gCharLimit($product['abstract'], 250); ?></p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p class="lead">
                                                <?php echo number_format($product['price']); ?> تومان</p>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <a class="btn btn-success" href="product?id=<?php echo $product['id']; ?>&action=add">خرید</a>
                                            <a class="btn btn-info" href="product?id=<?php echo $product['id']; ?>">جزئیات</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php }else{ ?>
                            <div class="alert alert-warning" style="width: 50%; margin: 0 auto; font-size: 15px;">در این شاخه محصولی ثبت نشده است.</div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
<!--    <div class="col-xs-3">-->
<!--        --><?php
//        include 'lastProducts.php';
//        include 'visitProducts.php';
//        ?>
<!--    </div>-->
</div>




<?php

include 'footer.php';

?>

