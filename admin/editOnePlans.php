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
    if(isset($_POST['txtTitle']))
    {
        if(strlen($_POST['txtDate1']) > 5)
        {
            $date1 = explode('/', $_POST['txtDate1']);
            $date1 = pmktime(0, 0, 0, $date1[1], $date1[2], $date1[0]);
            updateOneFieldFromTable('plans', 'dateStart', $date1, $_GET['id']);
        }
        ///////////////
        if(strlen($_POST['txtDate2']) > 5)
        {
            $date2 = explode('/', $_POST['txtDate2']);
            $date2 = pmktime(0, 0, 0, $date2[1], $date2[2], $date2[0]);
            updateOneFieldFromTable('plans', 'dateGift', $date2, $_GET['id']);
        }
        ///////////////
        if(strlen($_POST['txtDate3']) > 5)
        {
            $date3 = explode('/', $_POST['txtDate3']);
            $date3 = pmktime(0, 0, 0, $date3[1], $date3[2], $date3[0]);
            updateOneFieldFromTable('plans', 'dateEnd', $date3, $_GET['id']);
        }
        ///////////////
        if(strlen($_POST['txtTitle']) > 5)
        {
            updateOneFieldFromTable('plans', 'title', htmlCoding($_POST['txtTitle']), $_GET['id']);
        }
        ///////////////
        if(strlen($_POST['txtText']) > 10)
        {
            updateOneFieldFromTable('plans', 'text', htmlCoding($_POST['txtText']), $_GET['id']);
        }
        ///////////////
        if(isset($_POST['cbStatus']))
        {
            updateOneFieldFromTable('plans', 'status', $_POST['cbStatus'], $_GET['id']);
        }
        ///////////////
        if(isset($_FILES['file']))
        {
            if($_FILES['file']['error'] < 1)
            {
                if(strlen($_FILES['file']['name']) > 2)
                {
                    $fileName = $_FILES['file']['name'];
                    $fileTemp = $_FILES['file']['tmp_name'];
                    $ext = explode('.', $fileName);
                    $ext = $ext[count($ext) - 1];
                    $number = time() * (rand(1,10000));
                    $newName = md5($number) . ".$ext";
                    $u = SITE_ROOT . '/images/upload/' . $newName;
                    move_uploaded_file($fileTemp, $u);
                    updateOneFieldFromTable('plans', 'miniPic', $newName, $_GET['id']);
                }
            }
        }
        ///////////////
        updateOneFieldFromTable('plans', 'dateModi', time(), $_GET['id']);
        updateOneFieldFromTable('plans', 'userIdModi', $_SESSION['user']['id'], $_GET['id']);
        ///////////////
        $msg = 1;
    }
    
    /////////////////////////////////////////
          
    //$plan = getOnePlanAndNews($_GET['id'], 2);
    $plan = DatabaseHandler::GetRow("SELECT * FROM `plans` WHERE `id` = " . $_GET['id']);
    if($plan)
    {
        if($plan['status'] != 3)
        {
            $y = pdate('Y', $plan['dateStart']);
            $m = pdate('n', $plan['dateStart']);
            $d = pdate('j', $plan['dateStart']);
            $dateStart = $y . '/' . $m . '/' . $d;
            
            $y = pdate('Y', $plan['dateGift']);
            $m = pdate('n', $plan['dateGift']);
            $d = pdate('j', $plan['dateGift']);
            $dateGift = $y . '/' . $m . '/' . $d;
            
            $y = pdate('Y', $plan['dateEnd']);
            $m = pdate('n', $plan['dateEnd']);
            $d = pdate('j', $plan['dateEnd']);
            $dateEnd = $y . '/' . $m . '/' . $d;
            
            $plan['text'] = htmlCoding($plan['text'], 2);
        }
        else
        {
            header('location planList');
            exit;
        }
    }
    else
    {
        //header('location: planList');
        exit;
    }
}

include 'header.php';

?>


<div class="contentMain" style="min-height: 900px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">ویرایش طرح</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
    <?php if($msg == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">طرح مورد نظر با موفقیت ویرایش گردید.</div>
    <?php }elseif($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خطایی در ثبت طرح رخ داده است، لطفا دوباره سعی نمائید.</div>
    <?php }elseif($msg == 3){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خطایی در آپلود تصویر رخ داده است، لطفا دوباره سعی نمائید.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <form action="" method="post" name="formNews" enctype="multipart/form-data">
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تیتر طرح <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" name="txtTitle" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" placeholder="تیتر طرح" value="<?php echo $plan['title']; ?>" />
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px; height: 440px;">متن طرح <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px; height: 440px;">
            <textarea cols="40" rows="25" name="txtText" class="ckeditor"><?php echo $plan['text']; ?></textarea>
            <a xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo $uri; ?>/upload.php','popup','width=500,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false" ?="" href="<?php echo $uri; ?>/upload" style="font-size:14px;">
                <span style="font-family: 'Yekan'; font-size: 12px;">آپلود تصویر</span>
            </a>
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تصویر طرح <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="file" name="file" style="display: none;" id="file" />
            <button type="button" class="btn btn-success" style="float: right; font-family: 'Yekan';" onclick="$('#file').click();">انتخاب</button>
            <div style="direction: rtl; font-family: 'Nassim'; font-size: 16px; margin-right: 65px; margin-top: 3px;">توجه: سایز تصویر باید 230px x 150px باشد. - درصورت انتخاب عکس، جایگزین عکس قبلی میگردد.</div>
        </div>
        <div style="clear: both; margin-bottom: 10px;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تاریخ شروع طرح <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" id="pcal1" class="pdate" value="<?php echo $dateStart; ?>" name="txtDate1" />            
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تاریخ پایان کمک <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" id="pcal2" class="pdate" value="<?php echo $dateGift; ?>" name="txtDate2" />            
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تاریخ پایان طرح <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" id="pcal3" class="pdate" value="<?php echo $dateEnd; ?>" name="txtDate3" />            
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">وضعیت طرح <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <select name="cbStatus" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 413px;">
                <option value="1" <?php if($plan['status'] == 1){echo 'selected="selected"';} ?>>درحال اجرا</option>
                <option value="2" <?php if($plan['status'] == 2){echo 'selected="selected"';} ?>>تمام شده است</option>
            </select>
        </div>
        <div style="clear: both;"></div>
        </form>
        <button type="button" class="btn btn-success" style="float: left; font-family: 'Yekan';" onclick="document.formNews.submit();">ویرایش طرح</button>
    </div>
    
    
</div>
<script type="text/javascript">
        var objCal1 = new AMIB.persianCalendar( 'objCal1', 'pcal1' );
        var objCal2 = new AMIB.persianCalendar( 'objCal2', 'pcal2' );
        var objCal3 = new AMIB.persianCalendar( 'objCal3', 'pcal3' );
    </script>


<?php include 'footer.php'; ?>

