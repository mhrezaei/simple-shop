<?php
include_once 'config/config.php';

if (isset($_GET['id']) and $_GET['id'] > 0)
{
    $id = $_GET['id'];
    $product = DatabaseHandler::GetRow("SELECT * FROM `products` WHERE `id` = $id AND `status` = 1");

    if (!$product)
    {
        header('location: ' . $uri);
        exit;
    }
    else
    {
        $product['cat'] = DatabaseHandler::GetRow("SELECT * FROM `categories` WHERE `id` = " . $product['category']);
    }
}
else
{
    header('location: ' . $uri);
    exit;
}

include 'header.php';

include 'slider.php';

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
                <h3 class="panel-title">توضیحات محصول</h3>
            </div>
            <div class="panel-body">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-xs-3"></div>
                    <div class="col-xs-4" style="height: 450px;">
                        <div style="height: 170px; border: 1px solid #F8F9F9;">
                            <div style="padding: 15px;">
                                <?php echo $product['title']; ?>
                            </div>
                            <div style="font-size: 12px; padding: 15px; padding-top: 5px;">
                                دسته بندی:
                                <a href="productsList?catID=<?php echo $product['cat']['id']; ?>"><?php echo $product['cat']['title']; ?></a>
                            </div>

                            <div style="font-size: 14px; padding: 15px; padding-top: 35px; color: grey;">
                                قیمت
                                <br>
                                <span style="font-size: 16px; color: #0e0e0e;"><?php echo number_format($product['price']); ?> تومان</span>
                            </div>
                        </div>
                        <div style="height: 225px; border: 1px solid #F8F9F9; background: #F8F9F9;">
                            <button class="btn btn-success btn-block">اضافه به سبد خرید</button>
                            <button class="btn btn-info btn-block">جزئیات محصول</button>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <img class="group list-group-image" src="<?php echo $uri . '/' . $product['image']; ?>" alt="<?php echo $category['title']; ?>" style="max-height: 440px; max-width: 98%; margin-top: 5px;" />
                    </div>
                    <div class="col-xs-1"></div>
                </div>
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
                                                <?php echo $product['price']; ?> تومان</p>
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

