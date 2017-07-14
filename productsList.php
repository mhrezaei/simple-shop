<?php
include_once 'config/config.php';

include 'header.php';

include 'slider.php';;

if (isset($_POST['catID']) and $_POST['catID'] > 0)
{
    $catID = $_POST['catID'];
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
                <h3 class="panel-title">جدیدترین محصولات</h3>
            </div>
            <div class="panel-body">
                <div id="products" class="row list-group">
                    <?php foreach ($products as $product){ ?>
                        <div class="item  col-xs-4 col-lg-4">
                            <div class="thumbnail">
                                <img class="group list-group-image" src="<?php echo $uri . '/' . $product['image']; ?>" alt="<?php echo $category['title']; ?>" />
                                <div class="caption">
                                    <h4 class="group inner list-group-item-heading">
                                        <?php echo $product['title']; ?></h4>
                                    <p class="group inner list-group-item-text">
                                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p class="lead">
                                                $21.000</p>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <a class="btn btn-success" href="productsList?catID=<?php echo $product['id']; ?>">خرید</a>
                                            <a class="btn btn-info" href="productsList?catID=<?php echo $product['id']; ?>">جزئیات</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

