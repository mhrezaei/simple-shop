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
    if(updateOneFieldFromTable('products', 'status', 2, $_GET['delID']))
    {
        $ms = 1;
        header('location: productsList?ms=1');
        exit;
    }
    else
    {
        header('location: productsList');
        exit;
    }
}
$products = DatabaseHandler::GetAll("SELECT * FROM `products` WHERE `status` = 1 ORDER BY `id` DESC;");
if($products)
{
    for($i = 0; $i < count($products); $i++)
    {
        $products[$i]['cat'] = DatabaseHandler::GetRow("SELECT * FROM `categories` WHERE `id` = " . $products[$i]['category']);
        if ($products[$i]['cat'])
        {
            $products[$i]['cat'] = $products[$i]['cat']['title'];
        }
        else
        {
            $products[$i]['cat'] = '-';
        }
    }
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
    if(confirm('آیا مایل به حذف این محصول می باشید؟'))
    {
        window.location = "<?php echo $uri; ?>/admin/productsList?delID=" + id;
    }
}
</script>

<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">لیست محصولات</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
        <!--<div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خبر مورد نظر با موفقیت ثبت گردید.</div>-->
    <?php if($ms == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">محصول مورد نظر با موفقیت حذف گردید.</div>
    <?php } ?>
    <?php if($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">تاکنون هیچ محصولی درج نگردیده است.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <?php if($msg == 1){ ?>
            <table class="table table-hover" style="direction: rtl;">
                <thead>
                  <tr style="direction: rtl;">
                    <th style="text-align: right; width: 40px;" class="tableExtra">#</th>
                    <th style="text-align: right; width: 140px;" class="tableExtra">عکس محصول</th>
                    <th style="text-align: right; width: 170px;" class="tableExtra">عنوان محصول</th>
                    <th style="text-align: right; width: 150px;" class="tableExtra">دسته بندی</th>
                    <th style="text-align: right; width: 80px;" class="tableExtra">تعداد بازدید</th>
                    <th style="text-align: right; width: 80px;" class="tableExtra">موجودی</th>
                    <th style="text-align: right; width: 65px;" class="tableExtra">عملیات</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $e = 1; for($i = 0; $i < count($products); $i++){ ?>
                      <tr>
                        <td style="text-align: right; width: 40px;" class="tableExtra"><?php echo $e; $e++; ?></td>
                        <td style="text-align: right; width: 140px;" class="tableExtra"><img src="<?php echo $uri . '/' . $products[$i]['image']; ?>" style="width: 120px;"></td>
                        <td style="text-align: right; width: 170px;" class="tableExtra"><?php echo $products[$i]['title']; ?></td>
                        <td style="text-align: right; width: 150px;" class="tableExtra"><?php echo $products[$i]['cat']; ?></td>
                        <td style="text-align: right; width: 80px;" class="tableExtra"><?php echo $products[$i]['visit']; ?></td>
                        <td style="text-align: right; width: 80px;" class="tableExtra"><?php if ($products[$i]['stock'] == 1){echo 'موجود هست';}else{echo 'موجود نیست';} ?></td>
                        <td style="text-align: right; width: 65px;" class="tableExtra">
                            <a href="editOneProducts?id=<?php echo $products[$i]['id']; ?>"><img src="images/edit.png" alt="ویرایش" title="ویرایش" style="cursor: pointer; margin-left: 5px;"></a>
                            <img src="images/del2.png" alt="حذف" style="cursor: pointer;" onclick="confirmDel(<?php echo $products[$i]['id']; ?>);" title="حذف" />
                        </td>
                      </tr>
                  <?php } ?>
                </tbody>
              </table>
        <?php } ?>
    </div>
    
    
</div>


<?php include 'footer.php'; ?>

