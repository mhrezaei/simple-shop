<?php

require_once '../config/config.php';
if(!setUserSession(1,1,2))
{
    $url = $uri . '/admin/login';
    header('location: ' . $url);
    exit;
}
$msg = '';

$category = DatabaseHandler::GetAll("SELECT * FROM `categories` WHERE `status` = 1 ");
if (!$category)
{
    $url = $uri . '/admin/categoriesList';
    header('location: ' . $url);
    exit;
}

if(isset($_POST['txtTitle']) &&
    strlen($_POST['txtTitle']) > 5 &&
    isset($_POST['txtText']) &&
    strlen($_POST['txtText']) > 10 &&
    isset($_POST['txtLink']) &&
    strlen($_POST['txtLink']) > 5 &&
    isset($_POST['txtCat']) &&
    $_POST['txtCat'] > 0 &&
    isset($_POST['txtStock']) &&
    $_POST['txtStock'] > 0 &&
    isset($_POST['txtPrice']) &&
    $_POST['txtPrice'] > 0 &&
    isset($_FILES['file']) &&
    isset($_POST['txtAbstract']) &&
    strlen($_POST['txtAbstract']) > 50
)
{
    
    if($_FILES['file']['error'] < 1)
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

        $query = "INSERT INTO `products` (`id`, `title`, `text`, `image`, `visit`, `buy_link`, `status`, `gallery_id`, `created_at`, `category`, `stock`, `price`, `abstract`) 
VALUES (NULL, '" . $_POST['txtTitle'] . "', '" . htmlCoding($_POST['txtText']) . "', '" . $url . "', '0', '" . $_POST['txtLink'] . "', '1', '0', '" . time() . "', '" . $_POST['txtCat'] . "', '" . $_POST['txtStock'] ."', '" . $_POST['txtPrice'] ."', '" . $_POST['txtAbstract'] ."');";

        if(DatabaseHandler::Execute($query))
        {
            $msg = 1; // ok
        }
        else
        {
            $msg = 2; // insert error
        }
    }
    else
    {
        $msg = 3; // file error
    }
}

include 'header.php';

?>


<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">افزودن محصول</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
    <?php if($msg == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">محصول مورد نظر با موفقیت ثبت گردید.</div>
    <?php }elseif($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خطایی در ثبت محصول رخ داده است، لطفا دوباره سعی نمائید.</div>
    <?php }elseif($msg == 3){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خطایی در آپلود تصویر رخ داده است، لطفا دوباره سعی نمائید.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <form action="" method="post" name="formNews" enctype="multipart/form-data">
        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">عنوان محصول <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px;">
            <input type="text" name="txtTitle" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" placeholder="عنوان محصول" />
        </div>
        <div style="clear: both;"></div>

            <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">چکیده <span style="color: red;">*</span></div>
            <div style="float: left; width: 800px;">
                <textarea type="text" name="txtAbstract" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" placeholder="چکیده"></textarea>
            </div>
            <div style="clear: both;"></div>

        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">دسته بندی محصول <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px;">
            <select style="font-family: Tahoma; font-size: 12px; width: 415px;" name="txtCat">
                <?php
                    foreach ($category as $item => $value)
                    {
                        echo '<option value="' . $value['id'] . '">' . $value['title'] . '</option>';
                    }
                ?>
            </select>
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px; height: 440px;">توضیحات محصول <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px; height: 440px;">
            <textarea cols="40" rows="25" name="txtText" class="ckeditor"></textarea>
            <a xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo $uri; ?>/upload.php','popup','width=500,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false" ?="" href="<?php echo $uri; ?>/upload" style="font-size:14px;">
                <span style="font-family: 'Yekan'; font-size: 12px;">آپلود تصویر</span>
            </a>
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">عکس محصول <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px;">
            <input type="file" name="file" style="display: none;" id="file" />
            <button type="button" class="btn btn-success" style="float: right; font-family: 'Yekan';" onclick="$('#file').click();">انتخاب</button>
            <div style="direction: rtl; font-family: 'Nassim'; font-size: 16px; margin-right: 65px; margin-top: 3px;">توجه: سایز تصویر باید 230px x 150px باشد.</div>
        </div>
        <div style="clear: both; margin-bottom: 10px;"></div>


        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">لینک خرید محصول <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px;">
            <input type="text" name="txtLink" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" placeholder="لینک خرید محصول" />
        </div>
        <div style="clear: both;"></div>

        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">قیمت (تومان) <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px;">
            <input type="text" name="txtPrice" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" placeholder="قیمت (تومان)" />
        </div>
        <div style="clear: both;"></div>

        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">دسته بندی محصول <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px;">
            <select style="font-family: Tahoma; font-size: 12px; width: 415px;" name="txtStock">
                <option value="1">موجود هست</option>
                <option value="2">موجود نیست</option>
            </select>
        </div>
        <div style="clear: both;"></div>

        </form>
        <button type="button" class="btn btn-success" style="float: left; font-family: 'Yekan';" onclick="document.formNews.submit();">افزودن محصول</button>
    </div>
    
    
</div>


<?php include 'footer.php'; ?>

