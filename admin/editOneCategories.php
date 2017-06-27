<?php

require_once '../config/config.php';
if(!setUserSession(1,1,2))
{
    $url = $uri . '/admin/login';
    header('location: ' . $url);
    exit;
}
$msg = '';

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
    $category = DatabaseHandler::GetOne("SELECT * FROM `categories` WHERE `id` = " . $_GET['id'] . " AND `status` = 1 ");
    if (!$category)
    {
        $url = $uri . '/admin/categoriesList';
        header('location: ' . $url);
        exit;
    }
}

if(isset($_POST['txtTitle']) &&
    strlen($_POST['txtTitle']) > 5)
{
    updateOneFieldFromTable('categories', 'title', $_POST['txtTitle'], $_GET['id']);
    if(isset($_FILES['file']) && $_FILES['file']['error'] < 1)
    {
        $fileName = $_FILES['file']['name'];
        $fileTemp = $_FILES['file']['tmp_name'];
        $ext = explode('.', $fileName);
        $ext = $ext[count($ext) - 1];
        $number = time() * (rand(1,10000));
        $newName = md5($number) . ".$ext";
        $u = SITE_ROOT . '/images/upload/' . $newName;
        $url = '/images/upload/' . $newName;
        move_uploaded_file($fileTemp, $u);

        updateOneFieldFromTable('categories', 'picture', $url, $_GET['id']);
    }
    $msg = 1;
}
$category = DatabaseHandler::GetRow("SELECT * FROM `categories` WHERE `id` = " . $_GET['id'] . " AND `status` = 1 ");
include 'header.php';

?>


<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">ویرایش دسته بندی</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
    <?php if($msg == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">دسته بندی مورد نظر با موفقیت ویرایش گردید.</div>
    <?php }elseif($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خطایی در ویرایش دسته بندی رخ داده است، لطفا دوباره سعی نمائید.</div>
    <?php }elseif($msg == 3){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خطایی در آپلود تصویر رخ داده است، لطفا دوباره سعی نمائید.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <form action="" method="post" name="formNews" enctype="multipart/form-data">
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">عنوان دسته بندی <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" name="txtTitle" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" value="<?php echo $category['title']; ?>" placeholder="عنوان دسته بندی" />
        </div>
        <div style="clear: both;"></div>

            <img src="<?php echo $uri . '/' . $category['picture']; ?>" style="width: 150px; margin-bottom: 15px;">
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">عکس دسته بندی <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="file" name="file" style="display: none;" id="file" />
            <button type="button" class="btn btn-success" style="float: right; font-family: 'Yekan';" onclick="$('#file').click();">انتخاب</button>
            <div style="direction: rtl; font-family: 'Nassim'; font-size: 16px; margin-right: 65px; margin-top: 3px;">توجه: سایز تصویر باید 380px x 374px باشد.</div>
        </div>
        <div style="clear: both; margin-bottom: 10px;"></div>

        </form>
        <button type="button" class="btn btn-success" style="float: left; font-family: 'Yekan';" onclick="document.formNews.submit();">ویرایش</button>
    </div>
    
    
</div>


<?php include 'footer.php'; ?>

