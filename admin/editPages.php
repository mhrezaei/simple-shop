<?php

require_once '../config/config.php';
if(!setUserSession(1,1,2))
{
    $url = $uri . '/admin/login';
    header('location: ' . $url);
    exit;
}
$msg = '';

if(isset($_GET['id']) && ($_GET['id'] + 0) > 0)
{
    $id = $_GET['id'];
    
    if(isset($_POST['txtTitle']) && isset($_POST['txtText']) && strlen($_POST['txtTitle']) > 5 && strlen($_POST['txtText']) > 10)
    {
        updateOneFieldFromTable('pages', 'title', htmlCoding($_POST['txtTitle']), $id);
        updateOneFieldFromTable('pages', 'text', htmlCoding($_POST['txtText']), $id);
        updateOneFieldFromTable('pages', 'date', time(), $id);
        $msg = 1;
    }
    
    ////////////////////////////
    $page = DatabaseHandler::GetRow("SELECT * FROM `pages` WHERE `id` = $id AND `status` = 1 ;");
    if($page)
    {
        $page['date'] = pdate('d F Y', $page['date']);
        $page['text'] = htmlCoding($page['text'], 2);
    }
    else
    {
        header('location: index');
        exit;
    }
}

include 'header.php';

?>


<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">ویرایش صفحات اصلی</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
    <?php if($msg == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">صفحه مورد نظر با موفقیت ویرایش گردید.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <form action="" method="post" name="formNews">
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تیتر صفحه <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" name="txtTitle" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" placeholder="تیتر صفحه" value="<?php echo $page['title']; ?>" />
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px; height: 440px;">متن صفحه <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px; height: 440px;">
            <textarea cols="40" rows="25" name="txtText" class="ckeditor"><?php echo $page['text'];; ?></textarea>
            <a xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo $uri; ?>/upload.php','popup','width=500,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false" ?="" href="<?php echo $uri; ?>/upload" style="font-size:14px;">
                <span style="font-family: 'Yekan'; font-size: 12px;">آپلود تصویر</span>
            </a>
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">آخرین بروزرسانی <span style="color: red;"></span></div>
        <div style="float: left; width: 820px; font-family: 'Yekan'; font-size: 16px;">
            <?php echo $page['date']; ?>
        </div>
        <div style="clear: both;"></div>
        </form>
        <button type="button" class="btn btn-success" style="float: left; font-family: 'Yekan';" onclick="document.formNews.submit();">ویرایش صفحه</button>
    </div>
    
    
</div>


<?php include 'footer.php'; ?>

