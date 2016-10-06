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

//////////// news title /////////////
$news = getAllNewsWithstatus(1);
$newsCb = "<option value='0'>انتخاب کنید</option>";
if($news)
{
    for($i = 0; $i < count($news); $i++)
    {
        $newsCb .= "<option value='" . $news[$i]['id'] . "'>" . $news[$i]['title'] . "</option>";
    }
}
else
{
    $newsCb = "<option value='0'>خبری ثبت نگردیده است.</option>";
}
//////////// news title /////////////

//////////// plan title /////////////
$plan = DatabaseHandler::GetAll("SELECT * FROM `plans` WHERE `status` != 3 ;");
$planCb = "<option value='0'>انتخاب کنید</option>";
if($plan)
{
    for($i = 0; $i < count($plan); $i++)
    {
        $planCb .= "<option value='" . $plan[$i]['id'] . "'>". $plan[$i]['title'] . "</option>";
    }
}
else
{
    $planCb = "<option value='0'>خبری ثبت نگردیده است.</option>";
}
//////////// plan title /////////////

if(isset($_POST['txtTitle']) && isset($_POST['txtDate']) && isset($_POST['cbCat']) && isset($_FILES['file']))
{
    $title = $_POST['txtTitle'];
    $date = $_POST['txtDate'];
    $cbCat = $_POST['cbCat'];
    if($cbCat == 3)
    {
        $cbCatIn = randnum();
    }
    else
    {
        $cbCatIn = $_POST['cbCatIn'];
    }
    $files = $_FILES['file'];
    if(strlen($title) > 1 && strlen($date) > 1 && $cbCat != 0)
    {
        $date = explode('/', $date);
        $date = pmktime(0, 0, 0, $date[1], $date[2], $date[0]);
        for($i = 0; $i < count($files['name']); $i++)
        {
            $fileName = $files['name'][$i];
            $fileTemp = $files['tmp_name'][$i];
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
                                                NULL , '$newName', '$title', '$cbCat', '$cbCatIn', '1', '" . time() . "', '', ''
                                                );";
            DatabaseHandler::Execute($query);
        }
        $msg = 1;
    }
    else
    {
        $msg = 2;
    }
}

include 'header.php';

?>


<div class="contentMain" style="min-height: 500px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">افزودن آلبوم</div>
    <div style="width: 100%; height: 2px; background: #E07626; margin-top: 5px;"></div>
    <br>
    <?php if($msg == 1){ ?>
        <div class="alert alert-success" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">آلبوم مورد نظر با موفقیت ثبت گردید.</div>
    <?php }elseif($msg == 2){ ?>
        <div class="alert alert-danger" style="font-family: 'Yekan'; width: 60%; margin: 0 auto;">خطایی در ثبت آلبوم به وجود آمده است، لطفا دوباره سعی نمائید.</div>
    <?php } ?>
    <div style="width: 920px; margin-right: 20px; margin-top: 20px;">
        <form action="" method="post" name="formNews" enctype="multipart/form-data">
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تیتر آلبوم <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" name="txtTitle" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 400px;" placeholder="تیتر آلبوم" />
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">دسته بندی <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <select name="cbCat" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 413px;" onchange="cbChange();" id="cbCat">
                <option value="0">انتخاب کنید</option>
                <option value="1">اخبار</option>
                <option value="2">طرح ها</option>
                <option value="3">متفرقه</option>
            </select>
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">مرتبط با <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;" id="cbInCat">
            <select name="cbCatIn" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 413px;" disabled="disabled">
                <option value="0">انتخاب کنید</option>
            </select>
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">تاریخ درج آلبوم <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="text" id="pcal1" class="pdate" value="" name="txtDate" />            
        </div>
        <div style="clear: both;"></div>
        
        <div style="width: 100px; float: right; font-family: 'Nassim'; font-size: 16px; line-height: 25px;">انتخاب فایل(ها) <span style="color: red;">*</span></div>
        <div style="float: left; width: 820px;">
            <input type="file" name="file[]" multiple style="display: none;" id="file" />
            <button type="button" class="btn btn-success" style="float: right; font-family: 'Yekan';" onclick="$('#file').click();">انتخاب</button>
            <div style="direction: rtl; font-family: 'Nassim'; font-size: 16px; margin-right: 65px; margin-top: 3px;">توجه: سایز تصویر نباید بیشتر از 800px x 533px باشد.</div>
        </div>
        <div style="clear: both;"></div>
        
        </form>
        <button type="button" class="btn btn-success" style="float: left; font-family: 'Yekan';" onclick="document.formNews.submit();">ثبت آلبوم</button>
    </div>
    <div style="display: none;">
        <input type="hidden" id="cbnews" value="<?php echo $newsCb; ?>" />
        <input type="hidden" id="cbplan" value="<?php echo $planCb; ?>" />
    </div>
    
</div>
<script type="text/javascript">
        var objCal1 = new AMIB.persianCalendar( 'objCal1', 'pcal1' );
        function cbChange()
        {
            var cb = $("#cbCat").val();
            var elm = '#cbInCat';
            if(cb == 0)
            {
                $(elm).html('<select name="cbCatIn" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 413px;" disabled="disabled"><option value="0">انتخاب کنید</option></select>');
            }
            else if(cb == 1)
            {
                var content = '<select name="cbCatIn" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 413px;">';
                content = content + $("#cbnews").val() + '</select>';
                $(elm).html(content);
            }
            else if(cb == 2)
            {
                var content = '<select name="cbCatIn" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 413px;">';
                content = content + $("#cbplan").val() + '</select>';
                $(elm).html(content);
            }
            else if(cb == 3)
            {
                $(elm).html('<select name="cbCatIn" class="txtInput" style="font-family: Tahoma; font-size: 12px; width: 413px;" disabled="disabled"><option value="0">انتخاب کنید</option></select>');
            }
        }
    </script>


<?php include 'footer.php'; ?>

