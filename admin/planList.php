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
    $onePlan = DatabaseHandler::GetRow("SELECT * FROM `plans` WHERE `id` = " . $_GET['delID']);
    if($onePlan && $onePlan['status'] != 3)
    {
        updateOneFieldFromTable('plans', 'status', 3, $_GET['delID']);
        $ga = DatabaseHandler::GetAll("SELECT * FROM `gallery` WHERE `catID` =2 AND `gForID` = " . $_GET['delID'] . " AND `status` =1");
        if($ga)
        {
            for($i = 0; $i < count($ga); $i++)
            {
                updateOneFieldFromTable('gallery', 'status', 2, $ga[$i]['id']);
            }
        }
        $ms = 1;
        header('location: planList?ms=1');
        exit;
    }
    else
    {
        header('location: planList');
        exit;
    }
}
$plan = DatabaseHandler::GetAll("SELECT * FROM `plans` ORDER BY `id` DESC;");
if($plan)
{
    $xx = 0;
    for($i = 0; $i < count($plan); $i++)
    {
        if($plan[$i]['status'] != 3)
        {
            $xx++;
        }
    }
    if($xx > 0)
    {
        $msg = 1;
    }
    else
    {
        $msg = 2;
    }
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
    if(confirm('آیا مایل به حذف این طرح می باشید؟'))
    {
        window.location = "<?php echo $uri; ?>/admin/planList?delID=" + id;
    }
}
</script>

<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">ویرایش طرح ها</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
        <!--<div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خبر مورد نظر با موفقیت ثبت گردید.</div>-->
    <?php if($ms == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">طرح مورد نظر با موفقیت حذف گردید.</div>
    <?php } ?>
    <?php if($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">تاکنون هیچ طرحی درج نگردیده است.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <?php if($msg == 1){ ?>
            <table class="table table-hover" style="direction: rtl;">
                <thead>
                  <tr style="direction: rtl;">
                    <th style="text-align: right; width: 40px;" class="tableExtra">#</th>
                    <th style="text-align: right; width: 350px;" class="tableExtra">تیتر طرح</th>
                    <th style="text-align: right; width: 90px;" class="tableExtra">شروع طرح</th>
                    <th style="text-align: right; width: 90px;" class="tableExtra">دریافت کمک</th>
                    <th style="text-align: right; width: 90px;" class="tableExtra">پایان طرح</th>
                    <th style="text-align: right; width: 70px;" class="tableExtra">وضعیت</th>
                    <th style="text-align: right; width: 50px;" class="tableExtra">بازدید</th>
                    <th style="text-align: right; width: 65px;" class="tableExtra">عملیات</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $e = 1; for($i = 0; $i < count($plan); $i++){ ?>
                      <?php if($plan[$i]['status'] != 3) { ?>
                      <tr>
                        <td style="text-align: right; width: 40px;" class="tableExtra"><?php echo $e; $e++; ?></td>
                        <td style="text-align: right; width: 350px;" class="tableExtra"><?php echo $plan[$i]['title']; ?></td>
                        <td style="text-align: right; width: 90px;" class="tableExtra"><?php echo pdate('d F Y', $plan[$i]['dateStart']); ?></td>
                        <td style="text-align: right; width: 90px;" class="tableExtra"><?php echo pdate('d F Y', $plan[$i]['dateGift']); ?></td>
                        <td style="text-align: right; width: 90px;" class="tableExtra"><?php echo pdate('d F Y', $plan[$i]['dateEnd']); ?></td>
                        <td style="text-align: right; width: 70px;" class="tableExtra">
                            <?php if($plan[$i]['status'] == 1) {echo 'درحال اجرا';} elseif($plan[$i]['status'] == 2) {echo 'تمام شده';} ?>
                        </td>
                        <td style="text-align: right; width: 50px;" class="tableExtra"><?php echo $plan[$i]['view']; ?></td>
                        <td style="text-align: right; width: 65px;" class="tableExtra">
                            <a href="editOnePlans?id=<?php echo $plan[$i]['id']; ?>"><img src="images/edit.png" alt="ویرایش" title="ویرایش" style="cursor: pointer; margin-left: 5px;"></a>
                            <a href="showTransActions?id=<?php echo $plan[$i]['id']; ?>"><img src="images/detail.png" alt="جزئیات تراکنش ها" title="جزئیات تراکنش ها" style="cursor: pointer; margin-left: 5px;"></a>
                            <img src="images/del2.png" alt="حذف" style="cursor: pointer;" onclick="confirmDel(<?php echo $plan[$i]['id']; ?>);" title="حذف" />
                        </td>
                      </tr>
                      <?php } ?>
                  <?php } ?>
                </tbody>
              </table>
        <?php } ?>
    </div>
    
    
</div>


<?php include 'footer.php'; ?>

