<?php

require_once '../config/config.php';
if(!setUserSession(1,1,2))
{
    $url = $uri . '/admin/login';
    header('location: ' . $url);
    exit;
}
$msg = '';

if(isset($_POST['txtTitle']) && strlen($_POST['txtTitle']) > 5 && isset($_POST['txtText']) && strlen($_POST['txtText']) > 10 && isset($_POST['txtDate1']) && strlen($_POST['txtDate1']) > 5 && isset($_POST['txtDate2']) && strlen($_POST['txtDate2']) > 5 && isset($_POST['txtDate3']) && strlen($_POST['txtDate3']) && isset($_FILES['file']))
{
    $date1 = explode('/', $_POST['txtDate1']);
    $date1 = pmktime(0, 0, 0, $date1[1], $date1[2], $date1[0]);
    
    $date2 = explode('/', $_POST['txtDate2']);
    $date2 = pmktime(0, 0, 0, $date2[1], $date2[2], $date2[0]);
    
    $date3 = explode('/', $_POST['txtDate3']);
    $date3 = pmktime(0, 0, 0, $date3[1], $date3[2], $date3[0]);
    
    if($_FILES['file']['error'] < 1)
    {
        $fileName = $_FILES['file']['name'];
        $fileTemp = $_FILES['file']['tmp_name'];
        $ext = explode('.', $fileName);
        $ext = $ext[count($ext) - 1];
        $number = time() * (rand(1,10000));
        $newName = md5($number) . ".$ext";
        $u = SITE_ROOT . '/images/upload/' . $newName;
        move_uploaded_file($fileTemp, $u);
        $query = "INSERT INTO `plans` (`id`, `title`, `text`, `miniPic`, `bigPic`, `dateStart`, `dateGift`, `dateEnd`, `userIdWrite`, `dateAdd`, `dateModi`, `userIdModi`, `status`, `view`, `res1`, `res2`, `res3`)
         VALUES (NULL, '" . htmlCoding($_POST['txtTitle']) . "', '" . htmlCoding($_POST['txtText']) . "', '" . $newName . "', '-', '" . $date1 . "', '" . $date2 . "', '" . $date3 . "', '" . $_SESSION['user']['id'] . "', '" . time() . "', '0', '0', '1', '1', '', '', '');";
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
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">افزودن طرح</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
    <?php if($msg == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">طرح مورد نظر با موفقیت ثبت گردید.</div>
    <?php }elseif($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خطایی در ثبت طرح رخ داده است، لطفا دوباره سعی نمائید.</div>
    <?php }elseif($msg == 3){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خطایی در آپلود تصویر رخ داده است، لطفا دوباره سعی نمائید.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <form action="" method="post" name="formNews" enctype="multipart/form-data">
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تیتر طرح <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" name="txtTitle" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" placeholder="تیتر طرح" />
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px; height: 440px;">متن طرح <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px; height: 440px;">
            <textarea cols="40" rows="25" name="txtText" class="ckeditor"></textarea>
            <a xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo $uri; ?>/upload.php','popup','width=500,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false" ?="" href="<?php echo $uri; ?>/upload" style="font-size:14px;">
                <span style="font-family: 'Yekan'; font-size: 12px;">آپلود تصویر</span>
            </a>
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تصویر طرح <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="file" name="file" style="display: none;" id="file" />
            <button type="button" class="btn btn-success" style="float: right; font-family: 'Yekan';" onclick="$('#file').click();">انتخاب</button>
            <div style="direction: rtl; font-family: 'Nassim'; font-size: 16px; margin-right: 65px; margin-top: 3px;">توجه: سایز تصویر باید 230px x 150px باشد.</div>
        </div>
        <div style="clear: both; margin-bottom: 10px;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تاریخ شروع طرح <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" id="pcal1" class="pdate" value="" name="txtDate1" />            
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تاریخ پایان کمک <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" id="pcal2" class="pdate" value="" name="txtDate2" />            
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تاریخ پایان طرح <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" id="pcal3" class="pdate" value="" name="txtDate3" />            
        </div>
        <div style="clear: both;"></div>
        </form>
        <button type="button" class="btn btn-success" style="float: left; font-family: 'Yekan';" onclick="document.formNews.submit();">ثبت طرح</button>
    </div>
    
    
</div>
<script type="text/javascript">
        var objCal1 = new AMIB.persianCalendar( 'objCal1', 'pcal1' );
        var objCal2 = new AMIB.persianCalendar( 'objCal2', 'pcal2' );
        var objCal3 = new AMIB.persianCalendar( 'objCal3', 'pcal3' );
    </script>


<?php include 'footer.php'; ?>

