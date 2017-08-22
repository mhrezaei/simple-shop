<?php
include_once 'config/config.php';

$page = DatabaseHandler::GetRow("SELECT * FROM `pages` WHERE `id` = 1 AND `status` = 1");
if($page)
{
    $page['title'] = htmlCoding($page['title'], 2);
    $page['text'] = htmlCoding($page['text'], 2);
}
else
{
    header('location: index');
}

include 'header.php';
//register

?>

<div class="container" style="margin-top: 20px;">
    <div class="col-xs-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $page['title']; ?></h3>
            </div>
            <div class="panel-body" style="padding: 30px; line-height: 1.2;">
                <?php echo $page['text']; ?>
            </div>
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
