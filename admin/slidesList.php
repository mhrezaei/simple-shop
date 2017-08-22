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
    if(DatabaseHandler::Execute("DELETE FROM `slideshow` WHERE `slideshow`.`id` = " . $_GET['delID']))
    {
        $ms = 1;
        header('location: slidesList?ms=1');
        exit;
    }
    else
    {
        header('location: slidesList');
        exit;
    }
}
$slide = getAllSlideWithstatus();
if($slide)
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
    if(confirm('آیا مایل به حذف این اسلاید می باشید؟'))
    {
        window.location = "<?php echo $uri; ?>/admin/slidesList?delID=" + id;
    }
}
</script>

<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">ویرایش اسلایدها</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
        <!--<div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خبر مورد نظر با موفقیت ثبت گردید.</div>-->
    <?php if($ms == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">اسلاید مورد نظر با موفقیت حذف گردید.</div>
    <?php } ?>
    <?php if($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">تاکنون هیچ اسلایدی درج نگردیده است.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <?php if($msg == 1){ ?>
            <table class="table table-hover" style="direction: rtl;">
                <thead>
                  <tr style="direction: rtl;">
                    <th style="text-align: right; width: 40px;" class="tableExtra">#</th>
                      <th style="text-align: right; width: 170px;" class="tableExtra">تصویر</th>
                      <th style="text-align: right; width: 500px;" class="tableExtra">عنوان اسلاید</th>
                    <th style="text-align: right; width: 100px;" class="tableExtra">عملیات</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $e = 1; for($i = 0; $i < count($slide); $i++){ ?>
                      <tr>
                        <td style="text-align: right; width: 40px;" class="tableExtra"><?php echo $e; $e++; ?></td>
                          <td style="text-align: right; width: 170px;" class="tableExtra"><img src="<?php echo $uri . '/' . $slide[$i]['picture']; ?>" style="width: 150px;"></td>
                          <td style="text-align: right; width: 500px;" class="tableExtra"><?php echo $slide[$i]['title']; ?></td>
                        <td style="text-align: right; width: 100px;" class="tableExtra">
                            <img src="images/del2.png" alt="del" style="cursor: pointer;" onclick="confirmDel(<?php echo $slide[$i]['id']; ?>);">
                        </td>
                      </tr>
                  <?php } ?>
                </tbody>
              </table>
        <?php } ?>
    </div>
    
    
</div>


<?php include 'footer.php'; ?>

