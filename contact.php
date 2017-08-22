<?php
include_once 'config/config.php';

$page = DatabaseHandler::GetRow("SELECT * FROM `pages` WHERE `id` = 2 AND `status` = 1");
if($page)
{
    $page['title'] = htmlCoding($page['title'], 2);
    $page['text'] = htmlCoding($page['text'], 2);
}
else
{
    header('location: index');
}

include 'header.php';
//register

?>

  <img src="images/loading5.gif" alt="loading.gif" style="padding-top: 10px; display: none;" />
  <img src="images/ok.gif" style="padding-top: 9px; display: none;" />

<div class="container" style="margin-top: 20px;">
    <div class="col-xs-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $page['title']; ?></h3>
            </div>
            <div class="panel-body" style="padding: 30px; line-height: 1.2;">
                <?php echo $page['text']; ?>

                <br>
                <br>

                <table width="700" align="center">
                    <tr>
                        <td width="200" height="40" align="right" valign="middle" dir="rtl">نام و نام خانوادگی:</td>
                        <td height="40" align="right" valign="middle" dir="rtl"><input type="text" name="txtName" class="txtInput" id="txtName" /><span class="note txtName"><span class="star"> * </span>مثال: احمد مختاری</span></td>
                    </tr>
                    <tr>
                        <td width="200" height="40" align="right" valign="middle" dir="rtl">ایمیل:</td>
                        <td height="40" align="right" valign="middle" dir="rtl"><input type="text" name="txtEmail" class="txtInput" id="txtEmail" dir="ltr" /><span class="note txtEmail"><span class="star"> * </span>مثال: example@domain.com</span></td>
                    </tr>
                    <tr>
                        <td width="200" height="40" align="right" valign="middle" dir="rtl">موضوع:</td>
                        <td height="40" align="right" valign="middle" dir="rtl"><input type="text" name="txtTitle" class="txtInput" id="txtTitle" /><span class="note txtTitle"><span class="star"> * </span>موضوع مورد نظر</span></td>
                    </tr>
                    <tr>
                        <td width="200" height="200" align="right" valign="middle" dir="rtl">متن:</td>
                        <td height="200" align="right" valign="middle" dir="rtl"><textarea cols="5" rows="5" name="taComment" id="taComment" class="taInput" style="height: 300; padding: 5px;"></textarea><span class="note taComment"><span class="star"> * </span>متن مورد نظر</span></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" valign="middle" dir="rtl" height="40">
                            <div style="float: right;" >
                                <a class="btn btn-info" style="padding-bottom: 7px;" onclick="contactUs();">ارسال فرم</a>
                            </div>
                            <div style="padding-right: 15px; padding-top: 9px; float: right;" class="contactFinal"></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
    <div class="col-xs-3">
        <?php
        include 'lastProducts.php';
        include 'visitProducts.php';
        ?>
    </div>
</div>
      
<?php

include 'footer.php';

?>
