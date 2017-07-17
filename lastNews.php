<?php
$last_news = DatabaseHandler::GetAll("SELECT * FROM `news` ORDER BY `id` DESC LIMIT 10");

if ($last_news){

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
        <h3 class="panel-title">آخرین اخبار</h3>
    </div>
    <div class="panel-body">
        <ul>
            <?php
            foreach ($last_news as $item => $value)
            {
                echo '<li class="lastProduct"><a href="news?id=' . $value['id'] . '">' . $value['title'] . '</a></li>';
            }
            ?>
        </ul>
    </div>
</div>

<?php } ?>