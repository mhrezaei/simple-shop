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
    if(DatabaseHandler::Execute("UPDATE `categories` SET `status` = '2' WHERE `categories`.`id` = " . $_GET['delID']))
    {
        $ms = 1;
        header('location: categoriesList?ms=1');
        exit;
    }
    else
    {
        header('location: categoriesList');
        exit;
    }
}
$categories = getAllCategoriesWithstatus(1);
if($categories)
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
    if(confirm('آیا مایل به حذف این دسته بندی می باشید؟'))
    {
        window.location = "<?php echo $uri; ?>/admin/categoriesList?delID=" + id;
    }
}
</script>

<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px; float: right;">لیست دسته بندی ها</div>
    <div>
        <button class="btn btn-success" style="font-family: 'Yekan'; margin-top: 10px; float: left; margin-left: 10px;" onclick="window.location='addCategory';">افزودن دسته بندی</button>
    </div>
    <div style="clear: both;"></div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
        <!--<div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خبر مورد نظر با موفقیت ثبت گردید.</div>-->
    <?php if($ms == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">دسته بندی مورد نظر با موفقیت حذف گردید.</div>
    <?php } ?>
    <?php if($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">تاکنون هیچ دسته بندی درج نگردیده است.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <?php if($msg == 1){ ?>
            <table class="table table-hover" style="direction: rtl;">
                <thead>
                  <tr style="direction: rtl;">
                    <th style="text-align: right; width: 40px;" class="tableExtra">#</th>
                    <th style="text-align: right; width: 170px;" class="tableExtra">تصویر دسته بندی</th>
                    <th style="text-align: right; width: 500px;" class="tableExtra">عنوان دسته بندی</th>
                    <th style="text-align: right; width: 100px;" class="tableExtra">عملیات</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $e = 1; for($i = 0; $i < count($categories); $i++){ ?>
                      <tr>
                        <td style="text-align: right; width: 40px;" class="tableExtra"><?php echo $e; $e++; ?></td>
                        <td style="text-align: right; width: 170px;" class="tableExtra"><img src="<?php echo $uri . '/' . $categories[$i]['picture']; ?>" style="width: 150px;"></td>
                        <td style="text-align: right; width: 500px;" class="tableExtra"><?php echo $categories[$i]['title']; ?></td>
                        <td style="text-align: right; width: 100px;" class="tableExtra">
                            <a href="editOneCategories?id=<?php echo $categories[$i]['id']; ?>"><img src="images/edit.png" alt="edit" style="cursor: pointer; margin-left: 5px;"></a>
                            <img src="images/del2.png" alt="del" style="cursor: pointer;" onclick="confirmDel(<?php echo $categories[$i]['id']; ?>);">
                        </td>
                      </tr>
                  <?php } ?>
                </tbody>
              </table>
        <?php } ?>
    </div>
    
    
</div>


<?php include 'footer.php'; ?>

