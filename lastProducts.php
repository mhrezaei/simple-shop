<?php
$last_product = DatabaseHandler::GetAll("SELECT * FROM `products` ORDER BY `id` DESC LIMIT 10");

if ($last_product){

?>

<style>
    .lastProduct{
        font-family: Tahoma;
        font-size: 12px;
        line-height: 20px;
    }
</style>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">جدیدترین محصولات</h3>
    </div>
    <div class="panel-body">
        <ul>
            <?php
            foreach ($last_product as $item => $value)
            {
                echo '<li class="lastProduct"><a href="product?id=' . $value['id'] . '">' . $value['title'] . '</a></li>';
            }
            ?>
        </ul>
    </div>
</div>

<?php } ?>