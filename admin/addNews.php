<?php

require_once '../config/config.php';
if(!setUserSession(1,1,2))
{
    $url = $uri . '/admin/login';
    header('location: ' . $url);
    exit;
}
$msg = '';
if(isset($_POST['txtTitle']) && isset($_POST['txtDate']) && isset($_POST['txtText']))
{
    $title = $_POST['txtTitle'];
    $text = $_POST['txtText'];
    $date = $_POST['txtDate'];
    if(strlen($title) > 1 && strlen($date) > 1 && strlen($text) > 10)
    {
        $date = explode('/', $date);
        $date = pmktime(0, 0, 0, $date[1], $date[2], $date[0]);
        if(DatabaseHandler::Execute("INSERT INTO `news` (`id`, `title`, `text`, `status`, `userIdWrite`, `view`, `date`, `modiDate`, `modiUserId`, `res1`, `res2`, `res3`) VALUES (NULL, '" . htmlCoding($title, 1) . "', '" . htmlCoding($text, 1) . "', '1', '" . $_SESSION['user']['id'] . "', '1', '" . time() . "', '0', '0', '', '', '');"))
        {
            $msg = 1;
            $title = '';
            $text = '';
            $date = '';
        }
        else
        {
            $msg = 2;
        }
    }
    else
    {
        $msg = 3;
    }
}
else
{
    $title = '';
    $text = '';
    $date = '';
}

include 'header.php';

?>


<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">افزودن خبر</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
    <?php if($msg == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خبر مورد نظر با موفقیت ثبت گردید.</div>
    <?php }elseif($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خطایی در ثبت خبر به وجود آمده است، لطفا دوباره سعی نمائید.</div>
    <?php }elseif($msg == 3){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">گزینه های مشخص شده را به درستی تکمیل نمائید.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <form action="" method="post" name="formNews">
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تیتر خبر <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" name="txtTitle" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" placeholder="تیتر خبر" value="<?php echo $title; ?>" />
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px; height: 440px;">متن خبر <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px; height: 440px;">
            <textarea cols="40" rows="25" name="txtText" class="ckeditor"><?php echo $text; ?></textarea>
            <a xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo $uri; ?>/upload.php','popup','width=500,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false" ?="" href="<?php echo $uri; ?>/upload" style="font-size:14px;">
                <span style="font-family: 'Yekan'; font-size: 12px;">آپلود تصویر</span>
            </a>
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تاریخ درج خبر <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" id="pcal1" class="pdate" value="" name="txtDate" />            
        </div>
        <div style="clear: both;"></div>
        </form>
        <button type="button" class="btn btn-success" style="float: left; font-family: 'Yekan';" onclick="document.formNews.submit();">ارسال خبر</button>
    </div>
    
    
</div>
<script type="text/javascript">
        var objCal1 = new AMIB.persianCalendar( 'objCal1', 'pcal1' );
    </script>


<?php include 'footer.php'; ?>

