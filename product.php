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

        // add to basket
        if (isset($_GET['action']))
        {
            $action = $_GET['action'];

            if ($action == 'add')
            {
                userBasketManage('add', $id, 1);
                header('location: ' . $uri . '/product?id=' . $id . '&msg=1');
            }
        }
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
                        <div style="height: 185px; border: 1px solid #F8F9F9; background: #F8F9F9; padding: 25px;">
                            <a class="btn btn-success btn-block" href="<?php echo $uri; ?>/product?id=<?php echo $product['id']; ?>&action=add">اضافه به سبد خرید</a>
                            <a href="<?php echo $product['buy_link']; ?>" class="btn btn-info btn-block" target="_blank">جزئیات محصول</a>

                            <?php if (isset($_GET['msg']) and $_GET['msg'] == 1){ ?>
                            <div class="alert alert-success" style="margin-top: 10px; font-weight: normal; font-size: 14px;">محصول با موفقیت به سبد خرید اضافه شد.</div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="col-xs-4">
                        <img class="group list-group-image" src="<?php echo $uri . '/' . $product['image']; ?>" alt="<?php echo $category['title']; ?>" style="max-height: 350px; max-width: 98%; margin-top: 5px;" />
                    </div>
                    <div class="col-xs-1"></div>
                </div>
                <div class="row" style="padding: 30px; padding-right: 50px; padding-left: 50px;">
                    <?php echo htmlCoding($product['text'], 2); ?>
                </div>
<!--        --><?php
//        include 'lastProducts.php';
//        include 'visitProducts.php';
//        ?>
<!--    </div>-->
</div>
</div>




<?php

include 'footer.php';

?>

