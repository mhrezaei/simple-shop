<?php

require_once '../config/config.php';
if(!setUserSession(1,1,2))
{
    $url = $uri . '/admin/login';
    header('location: ' . $url);
    exit;
}
$msg = '';
$ms = '';
if(isset($_GET['ms']))
{
    $ms = $_GET['ms'];
}
if(isset($_GET['delID']) && ($_GET['delID'] + 0) > 0)
{
    $oneNews = getOnePlanAndNews($_GET['delID'], 1, 1, 1);
    if($oneNews)
    {
        DatabaseHandler::Execute("UPDATE `news` SET `status` = '2' WHERE `news`.`id` = " . $_GET['delID']);
        $ga = DatabaseHandler::GetAll("SELECT * FROM `gallery` WHERE `catID` =1 AND `gForID` = " . $_GET['delID'] . " AND `status` =1");
        if($ga)
        {
            for($i = 0; $i < count($ga); $i++)
            {
                updateOneFieldFromTable('gallery', 'status', 2, $ga[$i]['id']);
            }
        }
        $ms = 1;
        header('location: newsList?ms=1');
        exit;
    }
    else
    {
        header('location: newsList');
        exit;
    }
}
$news = getAllNewsWithstatus(1);
if($news)
{
    $msg = 1;
}
else
{
    $msg = 2;
}


include 'header.php';

?>

<script type="text/javascript">
function confirmDel(id)
{
    if(confirm('آیا مایل به حذف این خبر می باشید؟'))
    {
        window.location = "<?php echo $uri; ?>/admin/newsList?delID=" + id;
    }
}
</script>

<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">ویرایش اخبار</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
        <!--<div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خبر مورد نظر با موفقیت ثبت گردید.</div>-->
    <?php if($ms == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خبر مورد نظر با موفقیت حذف گردید.</div>
    <?php } ?>
    <?php if($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">تاکنون هیچ خبری درج نگردیده است.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <?php if($msg == 1){ ?>
            <table class="table table-hover" style="direction: rtl;">
                <thead>
                  <tr style="direction: rtl;">
                    <th style="text-align: right; width: 40px;" class="tableExtra">#</th>
                    <th style="text-align: right; width: 500px;" class="tableExtra">تیتر خبر</th>
                    <th style="text-align: right; width: 100px;" class="tableExtra">تاریخ درج</th>
                    <th style="text-align: right; width: 100px;" class="tableExtra">تعداد بازدید</th>
                    <th style="text-align: right; width: 100px;" class="tableExtra">عملیات</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $e = 1; for($i = 0; $i < count($news); $i++){ ?>
                      <tr>
                        <td style="text-align: right; width: 40px;" class="tableExtra"><?php echo $e; $e++; ?></td>
                        <td style="text-align: right; width: 500px;" class="tableExtra"><?php echo $news[$i]['title']; ?></td>
                        <td style="text-align: right; width: 100px;" class="tableExtra"><?php echo pdate('d F Y', $news[$i]['date']); ?></td>
                        <td style="text-align: right; width: 100px;" class="tableExtra"><?php echo $news[$i]['view']; ?></td>
                        <td style="text-align: right; width: 100px;" class="tableExtra">
                            <a href="editOneNews?id=<?php echo $news[$i]['id']; ?>"><img src="images/edit.png" alt="edit" style="cursor: pointer; margin-left: 5px;"></a>
                            <img src="images/del2.png" alt="del" style="cursor: pointer;" onclick="confirmDel(<?php echo $news[$i]['id']; ?>);">
                        </td>
                      </tr>
                  <?php } ?>
                </tbody>
              </table>
        <?php } ?>
    </div>
    
    
</div>


<?php include 'footer.php'; ?>

