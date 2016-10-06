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
    $cn = DatabaseHandler::GetAll("SELECT * FROM `comments` WHERE `id` = " . $_GET['delID'] . " AND `status` = 1 ;");
    if($cn)
    {
        updateOneFieldFromTable('comments', 'status', 3, $_GET['delID']);
    }
    $ms = 1;
    header('location: showContact?ms=1');
    exit;
}

$com = DatabaseHandler::GetAll("SELECT * FROM `comments` WHERE `status` = 1 ;");
if($com)
{
    $msg = 1;   
}
else
{
    $msg = 2;
}


include 'header.php';
$e = 1;
?>

<script type="text/javascript">
function confirmDel(id)
{
    if(confirm('آیا مایل به حذف این پیغام می باشید؟'))
    {
        window.location = "<?php echo $uri; ?>/admin/showContact?delID=" + id;
    }
}
</script>

<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">تماس های دریافتی</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
        <!--<div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خبر مورد نظر با موفقیت ثبت گردید.</div>-->
    <?php if($ms == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">پیغام مورد نظر با موفقیت حذف گردید.</div>
    <?php } ?>
    <?php if($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">تاکنون هیچ پیغامی درج نگردیده است.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <?php if($msg == 1){ ?>
            <table class="table table-hover" style="direction: rtl;">
                <thead>
                  <tr style="direction: rtl;">
                    <th style="text-align: right; width: 40px;" class="tableExtra">#</th>
                    <th style="text-align: right; width: 600px;" class="tableExtra">اطلاعات تماس</th>
                    <th style="text-align: right; width: 100px;" class="tableExtra">تاریخ دریافت</th>
                    <th style="text-align: right; width: 100px;" class="tableExtra">وضعیت</th>
                    <th style="text-align: right; width: 60px;" class="tableExtra">عملیات</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for($i = 0; $i < count($com); $i++){ ?>
                      <tr>
                        <td style="text-align: right; width: 40px;" class="tableExtra"><?php echo $e; $e++; ?></td>
                        <td style="text-align: right; width: 600px;" class="tableExtra">
                            نام و نام خانوادگی: <?php echo $com[$i]['name']; ?>
                            <br>
                            ایمیل: <?php echo $com[$i]['email']; ?>
                            <br>
                            موضوع: <?php echo $com[$i]['title']; ?>
                            <br>
                            متن: <?php echo $com[$i]['comment']; ?>
                        </td>
                        <td style="text-align: right; width: 100px;" class="tableExtra">
                            <?php echo pdate('Y/m/d', $com[$i]['time']); ?>
                        </td>
                        
                        <td style="text-align: right; width: 100px;" class="tableExtra">
                            <?php if($com[$i]['status'] == 1){ echo 'خوانده نشده';} elseif($com[$i]['status'] == 2){echo 'پاسخ داده شده';} ?>
                        </td>
    
                        <td style="text-align: right; width: 60px;" class="tableExtra">
                            <a href="replayOneComment?id=<?php echo $com[$i]['id']; ?>"><img src="images/edit.png" alt="ویرایش" title="ویرایش" style="cursor: pointer; margin-left: 5px;"></a>
                            <img src="images/del2.png" alt="حذف" style="cursor: pointer;" onclick="confirmDel(<?php echo $com[$i]['id']; ?>);" title="حذف" />
                        </td>
                      </tr>
                  <?php } ?>
                  
                </tbody>
              </table>
        <?php } ?>
    </div>
    
    
</div>


<?php include 'footer.php'; ?>

