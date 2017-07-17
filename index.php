<?php
include_once 'config/config.php';

include 'header.php';

include 'slider.php';

$categories = DatabaseHandler::GetAll("SELECT * FROM `categories` WHERE `status` = 1 ");

?>


<!--<div class="container" style="margin-top: 20px;">-->
<!---->
<!--    <div class="col-md-3" style="border: 1px solid red"></div>-->
<!--    <div class="col-md-9" style="border: 1px solid black"></div>-->
<!---->
<!--</div>-->

<div class="container" style="margin-top: 20px;">
    <div class="col-xs-9">
        <div id="products" class="row list-group">
            <?php foreach ($categories as $category){ ?>
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <a href="productsList?catID=<?php echo $category['id']; ?>"> <img class="group list-group-image" src="<?php echo $uri . '/' . $category['picture']; ?>" alt="<?php echo $category['title']; ?>" /></a>
                    <div class="caption">
<!--                        <h4 class="group inner list-group-item-heading">--><?php //echo $category['title']; ?><!--</h4>-->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-xs-12 col-md-12">
                                <a class="btn btn-success btn-block" href="productsList?catID=<?php echo $category['id']; ?>">مشاهده محصولات</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="col-xs-3">
        <?php
        include 'lastProducts.php';
        include 'visitProducts.php';
        ?>
    </div>
</div>




<?php

include 'footer.php';

?>

