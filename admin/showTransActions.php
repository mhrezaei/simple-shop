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

///////////////////////////////
if(isset($_GET['id']) && ($_GET['id'] + 0) > 0)
{
    $id = $_GET['id'];
}
else
{
    header('location: index');
    exit;
}
///////////////////////////////

if(isset($_GET['ms']))
{
    $ms = $_GET['ms'];
}
if(isset($_GET['delID']) && ($_GET['delID'] + 0) > 0)
{
    updateOneFieldFromTable('transactions', 'transStatus', 4, $_GET['delID']);
    $ms = 1;
    header('location: showTransActions?id=' . $id . '&ms=1');
    exit;
}
$trans = DatabaseHandler::GetAll("SELECT * FROM `transactions` WHERE `pid` = $id ORDER BY `id` DESC;");
if($trans)
{
    $xx = 0;
    for($i = 0; $i < count($trans); $i++)
    {
        if($trans[$i]['transStatus'] != 4)
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
    if(confirm('آیا مایل به حذف این تراکنش می باشید؟'))
    {
        window.location = "<?php echo $uri; ?>/admin/showTransActions?id=<?php echo $id; ?>&delID=" + id;
    }
}
</script>

<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">مشاهده ریزتراکنش ها</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
        <!--<div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خبر مورد نظر با موفقیت ثبت گردید.</div>-->
    <?php if($ms == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">تراکنش مورد نظر با موفقیت حذف گردید.</div>
    <?php } ?>
    <?php if($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">تاکنون هیچ تراکنشی ثبت نگردیده است.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <?php if($msg == 1){ ?>
            <table class="table table-hover" style="direction: rtl;">
                <thead>
                  <tr style="direction: rtl;">
                    <th style="text-align: right; width: 40px;" class="tableExtra">#</th>
                    <th style="text-align: right; width: 400px;" class="tableExtra">اطلاعات فردی و پرداخت</th>
                    <th style="text-align: right; width: 140px;" class="tableExtra">مبلغ (ريال)</th>
                    <th style="text-align: right; width: 200px;" class="tableExtra">وضعیت</th>
                    <th style="text-align: right; width: 160px;" class="tableExtra">تاریخ و ساعت</th>
                    <th style="text-align: right; width: 60px;" class="tableExtra">عملیات</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $e = 1; for($i = 0; $i < count($trans); $i++){ ?>
                    <?php if($trans[$i]['transStatus'] != 4){ ?>
                      <tr>
                        <td style="text-align: right; width: 40px;" class="tableExtra"><?php echo $e; $e++; ?></td>
                        <td style="text-align: right; width: 400px;" class="tableExtra">
                            نام: <?php echo $trans[$i]['name']; ?>
                            <br>
                            شماره تماس: <?php echo $trans[$i]['tel']; ?>
                            <br>
                            ایمیل: <?php echo $trans[$i]['email']; ?>
                            <br>
                            شماره پیگیری: <?php echo $trans[$i]['randomCode']; ?>
                            <br>
                            رسیددیجیتالی: <?php echo $trans[$i]['refId']; ?>
                        </td>
                        <td style="text-align: right; width: 140px;" class="tableExtra">
                            <?php if(is_numeric($trans[$i]['price']) && $trans[$i]['price'] > 0)
                            {
                                echo number_format($trans[$i]['price']);
                            }
                            else
                            {
                                echo $trans[$i]['price'];
                            }
                            ?>
                        </td>
                        <td style="text-align: right; width: 200px;" class="tableExtra">
                            پرداخت:
                            <?php
                                if($trans[$i]['paymentStatus'] == 1)
                                {
                                    echo 'معلق';
                                }
                                elseif($trans[$i]['paymentStatus'] == 2)
                                {
                                    echo 'موفق';
                                }
                                elseif($trans[$i]['paymentStatus'] == 3)
                                {
                                    echo 'ناموفق';
                                }
                                elseif($trans[$i]['paymentStatus'] == 4)
                                {
                                    echo 'رسید تکراری';
                                }
                            ?>
                            <br>
                            تراکنش: 
                            <?php
                                if($trans[$i]['transStatus'] == 1)
                                {
                                    echo 'انجام نشده';
                                }
                                elseif($trans[$i]['transStatus'] == 2)
                                {
                                    echo 'پرداخت شده';
                                }
                                elseif($trans[$i]['transStatus'] == 3)
                                {
                                    echo 'ناموفق';
                                }
                            ?>
                        </td>
                        <td style="text-align: right; width: 160px;" class="tableExtra">
                            <?php echo pdate('Y/m/d - H:i', $trans[$i]['time']); ?>
                        </td>
    
                        <td style="text-align: right; width: 60px;" class="tableExtra">
                            <a href="editOneTransActions?id=<?php echo $trans[$i]['id']; ?>"><img src="images/edit.png" alt="ویرایش" title="ویرایش" style="cursor: pointer; margin-left: 5px;"></a>
                            <img src="images/del2.png" alt="حذف" style="cursor: pointer;" onclick="confirmDel(<?php echo $trans[$i]['id']; ?>);" title="حذف" />
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

