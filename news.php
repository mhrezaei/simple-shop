<?php
include_once 'config/config.php';

if (isset($_GET['id']) and $_GET['id'] > 0)
{
    $id = $_GET['id'];
    $news = DatabaseHandler::GetRow("SELECT * FROM `news` WHERE `id` = $id AND `status` = 1");

    if (!$news)
    {
        header('location: ' . $uri);
        exit;
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
                <h3 class="panel-title"><?php echo htmlCoding($news['title'], 2); ?></h3>
            </div>
            <div class="panel-body">
                <div class="row" style="padding: 30px; padding-right: 50px; padding-left: 50px;">
                    <?php echo htmlCoding($news['text'], 2); ?>
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

