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
$id = 1;
///////////////////////////////

if(isset($_GET['ms']))
{
    $ms = $_GET['ms'];
}
if(isset($_GET['delID']) && ($_GET['delID'] + 0) > 0)
{
    $g = DatabaseHandler::GetRow("SELECT * FROM `gallery` WHERE `id` = " . $_GET['delID'] . " AND `status` = 1 ;");
    if($g)
    {
        $ga = DatabaseHandler::GetAll("SELECT * FROM `gallery` WHERE `catID` = " . $g['catID'] . " AND `gForID` = " . $g['gForID'] . " AND `status` = 1 ;");
        if($ga)
        {
            for($i = 0; $i < count($ga); $i++)
            {
                updateOneFieldFromTable('gallery', 'status', 2, $ga[$i]['id']);
            }
        }
    }
    $ms = 1;
    header('location: galleryList?ms=1');
    exit;
}

$gallery1 = DatabaseHandler::GetAll("SELECT * FROM `gallery` WHERE `catID` =2 AND `status` =1 GROUP BY `gForID` ORDER BY `id` DESC ; ");
if($gallery1)
{
    $isGallery1 = 1;
}
else
{
    $isGallery1 = 2;
}
$gallery2 = DatabaseHandler::GetAll("SELECT * FROM `gallery` WHERE `catID` =1 AND `status` =1 GROUP BY `gForID` ORDER BY `id` DESC ;");
if($gallery2)
{
    $isGallery2 = 1;
}
else
{
    $isGallery2 = 2;
}
$gallery3 = DatabaseHandler::GetAll("SELECT * FROM `gallery` WHERE `catID` =3 AND `status` =1 GROUP BY `gForID` ORDER BY `id` DESC ;");
if($gallery3)
{
    $isGallery3 = 1;
}
else
{
    $isGallery3 = 2;
}

if($isGallery1 == 1 || $isGallery2 == 1 || $isGallery3 == 1)
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
    if(confirm('آیا مایل به حذف این آلبوم می باشید؟'))
    {
        window.location = "<?php echo $uri; ?>/admin/galleryList?delID=" + id;
    }
}
</script>

<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">گالری تصاویر</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
        <!--<div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خبر مورد نظر با موفقیت ثبت گردید.</div>-->
    <?php if($ms == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">آلبوم مورد نظر با موفقیت حذف گردید.</div>
    <?php } ?>
    <?php if($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">تاکنون هیچ آلبومی درج نگردیده است.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <?php if($msg == 1){ ?>
            <table class="table table-hover" style="direction: rtl;">
                <thead>
                  <tr style="direction: rtl;">
                    <th style="text-align: right; width: 40px;" class="tableExtra">#</th>
                    <th style="text-align: right; width: 600px;" class="tableExtra">اطلاعات آلبوم</th>
                    <th style="text-align: right; width: 100px;" class="tableExtra">تعداد تصویر</th>
                    <th style="text-align: right; width: 100px;" class="tableExtra">تاریخ افزودن</th>
                    <th style="text-align: right; width: 60px;" class="tableExtra">عملیات</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if($isGallery1 == 1){ ?>
                  <?php for($i = 0; $i < count($gallery1); $i++){ ?>
                      <tr>
                        <td style="text-align: right; width: 40px;" class="tableExtra"><?php echo $e; $e++; ?></td>
                        <td style="text-align: right; width: 600px;" class="tableExtra">
                            نام: <?php echo $gallery1[$i]['title']; ?>
                            <br>
                            دسته بندی: طرح ها
                            <br>
                            مرتبط با: 
                            <?php
                                $n = getOnePlanAndNews($gallery1[$i]['gForID'], 2);
                                if($n)
                                {
                                    echo $n['title'];
                                }
                                else
                                {
                                    echo '-';
                                }
                            ?>
                        </td>
                        <td style="text-align: right; width: 100px;" class="tableExtra">
                            <?php $x = DatabaseHandler::GetAll("SELECT * FROM `gallery` WHERE `catID` = 2 AND `gForID` = " . $gallery1[$i]['gForID'] . " AND `status` = 1 ;"); if($x){echo count($x);}else{echo 0;} ?>
                        </td>
                        <td style="text-align: right; width: 100px;" class="tableExtra">
                            <?php echo pdate('Y/m/d', $gallery1[$i]['time']); ?>
                        </td>
    
                        <td style="text-align: right; width: 60px;" class="tableExtra">
                            <a href="editOneGallery?id=<?php echo $gallery1[$i]['id']; ?>"><img src="images/edit.png" alt="ویرایش" title="ویرایش" style="cursor: pointer; margin-left: 5px;"></a>
                            <img src="images/del2.png" alt="حذف" style="cursor: pointer;" onclick="confirmDel(<?php echo $gallery1[$i]['id']; ?>);" title="حذف" />
                        </td>
                      </tr>
                  <?php } ?>
                  <?php } ?>
                  
                  
                  
                  <?php if($isGallery2 == 1){ ?>
                  <?php for($i = 0; $i < count($gallery2); $i++){ ?>
                      <tr>
                        <td style="text-align: right; width: 40px;" class="tableExtra"><?php echo $e; $e++; ?></td>
                        <td style="text-align: right; width: 600px;" class="tableExtra">
                            نام: <?php echo $gallery2[$i]['title']; ?>
                            <br>
                            دسته بندی: اخبار
                            <br>
                            مرتبط با: 
                            <?php
                                $n = getOnePlanAndNews($gallery2[$i]['gForID'], 1);
                                if($n)
                                {
                                    echo $n['title'];
                                }
                                else
                                {
                                    echo '-';
                                }
                            ?>
                        </td>
                        <td style="text-align: right; width: 100px;" class="tableExtra">
                            <?php $x = DatabaseHandler::GetAll("SELECT * FROM `gallery` WHERE `catID` = 1 AND `gForID` = " . $gallery2[$i]['gForID'] . " AND `status` = 1 ;"); if($x){echo count($x);}else{echo 0;} ?>
                        </td>
                        <td style="text-align: right; width: 100px;" class="tableExtra">
                            <?php echo pdate('Y/m/d', $gallery2[$i]['time']); ?>
                        </td>
    
                        <td style="text-align: right; width: 60px;" class="tableExtra">
                            <a href="editOneGallery?id=<?php echo $gallery2[$i]['id']; ?>"><img src="images/edit.png" alt="ویرایش" title="ویرایش" style="cursor: pointer; margin-left: 5px;"></a>
                            <img src="images/del2.png" alt="حذف" style="cursor: pointer;" onclick="confirmDel(<?php echo $gallery2[$i]['id']; ?>);" title="حذف" />
                        </td>
                      </tr>
                  <?php } ?>
                  <?php } ?>
                  
                  
                  
                  <?php if($isGallery3 == 1){ ?>
                  <?php for($i = 0; $i < count($gallery3); $i++){ ?>
                      <tr>
                        <td style="text-align: right; width: 40px;" class="tableExtra"><?php echo $e; $e++; ?></td>
                        <td style="text-align: right; width: 600px;" class="tableExtra">
                            نام: <?php echo $gallery3[$i]['title']; ?>
                            <br>
                            دسته بندی: متفرقه
                            <br>
                            مرتبط با: 
                            -
                        </td>
                        <td style="text-align: right; width: 100px;" class="tableExtra">
                            <?php $x = DatabaseHandler::GetAll("SELECT * FROM `gallery` WHERE `catID` = 3 AND `gForID` = " . $gallery3[$i]['gForID'] . " AND `status` = 1 ;"); if($x){echo count($x);}else{echo 0;} ?>
                        </td>
                        <td style="text-align: right; width: 100px;" class="tableExtra">
                            <?php echo pdate('Y/m/d', $gallery3[$i]['time']); ?>
                        </td>
    
                        <td style="text-align: right; width: 60px;" class="tableExtra">
                            <a href="editOneGallery?id=<?php echo $gallery3[$i]['id']; ?>"><img src="images/edit.png" alt="ویرایش" title="ویرایش" style="cursor: pointer; margin-left: 5px;"></a>
                            <img src="images/del2.png" alt="حذف" style="cursor: pointer;" onclick="confirmDel(<?php echo $gallery3[$i]['id']; ?>);" title="حذف" />
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

