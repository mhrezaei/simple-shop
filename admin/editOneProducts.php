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
    $product = DatabaseHandler::GetRow("SELECT * FROM `products` WHERE `id` = " . $_GET['id']);
    if (!$product)
    {
        $url = $uri . '/admin/productsList';
        header('location: ' . $url);
        exit;
    }
}

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
    $_POST['txtPrice'] > 0)
{
    updateOneFieldFromTable('products', 'title', $_POST['txtTitle'], $product['id']);
    updateOneFieldFromTable('products', 'text', htmlCoding($_POST['txtText']), $product['id']);
    updateOneFieldFromTable('products', 'buy_link', $_POST['txtLink'], $product['id']);
    updateOneFieldFromTable('products', 'category', $_POST['txtCat'], $product['id']);
    updateOneFieldFromTable('products', 'stock', $_POST['txtStock'], $product['id']);
    updateOneFieldFromTable('products', 'price', $_POST['txtPrice'], $product['id']);
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

        updateOneFieldFromTable('products', 'image', $url, $product['id']);
    }
    $msg = 1;
}
$product = DatabaseHandler::GetRow("SELECT * FROM `products` WHERE `id` = " . $_GET['id']);
include 'header.php';

?>


<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">ویرایش محصول</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
    <?php if($msg == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">محصول مورد نظر با موفقیت ویرایش گردید.</div>
    <?php }elseif($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خطایی در ویرایش محصول رخ داده است، لطفا دوباره سعی نمائید.</div>
    <?php }elseif($msg == 3){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خطایی در آپلود تصویر رخ داده است، لطفا دوباره سعی نمائید.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <form action="" method="post" name="formNews" enctype="multipart/form-data">
        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">عنوان محصول <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px;">
            <input type="text" name="txtTitle" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" placeholder="عنوان محصول" value="<?php echo $product['title']; ?>" />
        </div>
        <div style="clear: both;"></div>

        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">دسته بندی محصول <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px;">
            <select style="font-family: Tahoma; font-size: 12px; width: 415px;" name="txtCat">
                <?php
                    foreach ($category as $item => $value)
                    {
                        if ($product['category'] == $value['id'])
                        {
                            $selected = 'selected="selected"';
                        }
                        else
                        {
                            $selected = '';
                        }
                        echo '<option value="' . $value['id'] . '"' . $selected . '>' . $value['title'] . '</option>';
                    }
                ?>
            </select>
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px; height: 440px;">توضیحات محصول <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px; height: 440px;">
            <textarea cols="40" rows="25" name="txtText" class="ckeditor"><?php echo htmlCoding($product['text'], 2); ?></textarea>
            <a xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo $uri; ?>/upload.php','popup','width=500,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false" ?="" href="<?php echo $uri; ?>/upload" style="font-size:14px;">
                <span style="font-family: 'Yekan'; font-size: 12px;">آپلود تصویر</span>
            </a>
        </div>
        <div style="clear: both;"></div>

            <img src="<?php echo $uri . '/' . $product['image']; ?>" style="width: 120px; margin-bottom: 15px;">
        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">عکس محصول <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px;">
            <input type="file" name="file" style="display: none;" id="file" />
            <button type="button" class="btn btn-success" style="float: right; font-family: 'Yekan';" onclick="$('#file').click();">انتخاب</button>
        </div>
        <div style="clear: both; margin-bottom: 10px;"></div>


        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">لینک خرید محصول <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px;">
            <input type="text" name="txtLink" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" placeholder="لینک خرید محصول" value="<?php echo $product['buy_link']; ?>" />
        </div>
        <div style="clear: both;"></div>

        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">قیمت (تومان) <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px;">
            <input type="text" name="txtPrice" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" placeholder="قیمت (تومان)" value="<?php echo $product['price']; ?>" />
        </div>
        <div style="clear: both;"></div>

        <div style="width: 120px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">موجودی محصول <span style="color: red;">*</span></div>
        <div style="float: left; width: 800px;">
            <select style="font-family: Tahoma; font-size: 12px; width: 415px;" name="txtStock">
                <option value="1" <?php if ($product['stock'] == 1){echo ' selected="selected"';} ?>>موجود هست</option>
                <option value="2" <?php if ($product['stock'] == 2){echo ' selected="selected"';} ?>>موجود نیست</option>
            </select>
        </div>
        <div style="clear: both;"></div>

        </form>
        <button type="button" class="btn btn-success" style="float: left; font-family: 'Yekan';" onclick="document.formNews.submit();">ویرایش محصول</button>
        <div style="clear: both;"></div>
        <br>
    </div>
    
    
</div>


<?php include 'footer.php'; ?>

