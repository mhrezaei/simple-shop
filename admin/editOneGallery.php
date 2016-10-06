<?php

require_once '../config/config.php';
require_once '../php/create_thumbs.php';
if(!setUserSession(1,1,2))
{
    $url = $uri . '/admin/login';
    header('location: ' . $url);
    exit;
}
$msg = '';
$ms = '';

////////////////////
if(isset($_GET['id']) && ($_GET['id'] + 0) > 0)
{
    $id = $_GET['id'];
}
else
{
    header('location: index');
    exit;
}
////////////////////

if(isset($_GET['ms']))
{
    $ms = $_GET['ms'];
}
if(isset($_GET['delID']) && ($_GET['delID'] + 0) > 0)
{
    $gd = DatabaseHandler::GetRow("SELECT * FROM `gallery` WHERE `id` = " . $_GET['delID'] . " AND `status` = 1 ;");
    if($gd)
    {
        updateOneFieldFromTable('gallery', 'status', 2, $_GET['delID']);
    }
    $ms = 1;
    header('location: editOneGallery?ms=1&id=' . $id);
    exit;
}

$g = DatabaseHandler::GetRow("SELECT * FROM `gallery` WHERE `id` = " . $id . " ;");
if($g)
{
    if(isset($_FILES['file']))
    {   
        for($i = 0; $i < count($_FILES['file']['name']); $i++)
        {
            if($_FILES['file']['error'][$i] < 1)
            {
                $fileName = $_FILES['file']['name'][$i];
                $fileTemp = $_FILES['file']['tmp_name'][$i];
                $ext = explode('.', $fileName);
                $ext = $ext[count($ext) - 1];
                $number = time() * (rand(1,10000));
                $newName = md5($number) . ".$ext";
                $u = SITE_ROOT . '/images/gallery/orginal/' . $newName;
                $ut = SITE_ROOT . '/images/gallery/thumb/' . $newName;
                move_uploaded_file($fileTemp, $u);
                createThums($u, $ut, 150, 100);
                $query = "INSERT INTO `gallery` (
                                                    `id` ,
                                                    `image` ,
                                                    `title` ,
                                                    `catID` ,
                                                    `gForID` ,
                                                    `status` ,
                                                    `time` ,
                                                    `res1` ,
                                                    `res2`
                                                    )
                                                    VALUES (
                                                    NULL , '$newName', '" . $g['title'] . "', '" . $g['catID'] . "', '" . $g['gForID'] . "', '1', '" . time() . "', '', ''
                                                    );";
                DatabaseHandler::Execute($query);
                $ms = 2;
            }
        }
    }
    $ga = DatabaseHandler::GetAll("SELECT * FROM `gallery` WHERE `catID` = " . $g['catID'] . " AND `gForID` = " . $g['gForID'] . " AND `status` = 1 ;");
    if($ga)
    {
        $msg = 1;
    }
    else
    {
        header("location: galleryList");
        exit;
    }
}
else
{
    header("location: galleryList");
    exit;
}


include 'header.php';
$e = 1;
?>

<script type="text/javascript">
function confirmDel(id)
{
    if(confirm('آیا مایل به حذف این تصویر می باشید؟'))
    {
        window.location = "<?php echo $uri; ?>/admin/editOneGallery?delID=" + id + "&id=<?php echo $id; ?>";
    }
}
</script>

<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">ویرایش گالری تصاویر</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
        <!--<div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خبر مورد نظر با موفقیت ثبت گردید.</div>-->
    <?php if($ms == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">تصویر مورد نظر با موفقیت حذف گردید.</div>
    <?php } ?>
    <?php if($ms == 2){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">تصویر (های) مورد نظر با موفقیت آپلود گردید.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <?php if($msg == 1){ ?>
            <table class="table table-hover" style="direction: rtl;">
                <thead>
                  <tr style="direction: rtl;">
                    <th style="text-align: right; width: 40px;" class="tableExtra">#</th>
                    <th style="text-align: right; width: 600px;" class="tableExtra">تصویر</th>
                    <th style="text-align: right; width: 60px;" class="tableExtra">عملیات</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php for($i = 0; $i < count($ga); $i++){ ?>
                      <tr>
                        <td style="text-align: right; width: 40px;" class="tableExtra"><?php echo $e; $e++; ?></td>
                        <td style="text-align: right; width: 600px;" class="tableExtra">
                            <img src="<?php echo $uri; ?>/images/gallery/thumb/<?php echo $ga[$i]['image']; ?>" alt="image">
                        </td>
    
                        <td style="text-align: right; width: 60px;" class="tableExtra">
                            <img src="images/del2.png" alt="حذف" style="cursor: pointer;" onclick="confirmDel(<?php echo $ga[$i]['id']; ?>);" title="حذف" />
                        </td>
                      </tr>
                  <?php } ?>
                  
                </tbody>
              </table>
              
              <form action="" method="post" name="formNews" enctype="multipart/form-data">
              <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">انتخاب فایل(ها) <span style="color: red;">*</span></div>
                <div style="float: left; width: 820px;">
                    <input type="file" name="file[]" multiple style="display: none;" id="file" />
                    <button type="button" class="btn btn-success" style="float: right; font-family: 'Yekan';" onclick="$('#file').click();">انتخاب</button>
                    <div style="direction: rtl; font-family: 'Nassim'; font-size: 16px; margin-right: 65px; margin-top: 3px;">توجه: سایز تصویر نباید بیشتر از 800px x 533px باشد.</div>
                </div>
                </form>
                <button type="button" class="btn btn-success" style="float: left; font-family: 'Yekan'; margin-bottom: 10px; margin-right: 100px;" onclick="document.formNews.submit();">آپلود تصویر</button>
                <div style="clear: both;"></div>
              
        <?php } ?>
    </div>
    
    
</div>


<?php include 'footer.php'; ?>


