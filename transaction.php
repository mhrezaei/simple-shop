<?php
include_once 'config/config.php';
if(isset($_GET['tid']) && ($_GET['tid'] + 0) > 0)
{
    if(isset($_POST['State']) && isset($_POST['ResNum']) && isset($_POST['MID']) && isset($_POST['RefNum']))
    {
        //con
    }
    else
    {
        header('location: index');
        exit;
    }
}
else
{
    header('location: index');
    exit;
}
include 'header.php';
//register

?>

  <!-- Center -->
      <div class="up"></div>
      <div class="center registerPage" style="min-height:400px;">
      <!-- Information -->

      <table width="800" align="center" dir="rtl">
            <tr>
                <td colspan="3" width="100%" height="60" align="right" valign="middle" dir="rtl">
                <span class="formHead" style="font-size: 18px;">تایید پرداخت...</span>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><hr /></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl" style="text-align:center"><span class="formSub" style="font-size:18px;" id="finalTitle">لطفاً منتظر باشید...</span></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl" style="text-align:center"><span class="formSub" id="finalPM" style="font-size:18px;"><img src="<?php echo $uri; ?>/images/ajax-loader.gif" alt="ajax-loader.gif" /></span>
                <br />
                <p class="formSub" style="color:#F09; font-size:16px; padding-top: 20px;" id="finalRandomCode"></p>
                </td>
            </tr>
        </table>

      <!-- End Information -->
      </div>
      <div class="down"></div>
      <input id="tid" value="<?php echo $_GET['tid'] ?>" type="hidden" />
      <input id="State" value="<?php echo $_POST['State'] ?>" type="hidden" />
      <input id="ResNum" value="<?php echo $_POST['ResNum'] ?>" type="hidden" />
      <input id="MID" value="<?php echo $_POST['MID'] ?>" type="hidden" />
      <input id="RefNum" value="<?php echo $_POST['RefNum'] ?>" type="hidden" />
<script type="text/javascript">
function paymentProcess()
{
    var $tid = $("#tid").val();
    var $state = $("#State").val();
    var $resnum = $("#ResNum").val();
    var $mid = $("#MID").val();
    var $refnum = $("#RefNum").val();
    $.ajax({
            type: "POST",
            url: "ajax/payment.php",
            cache: false,
            data: {tid: $tid, state: $state, resnum: $resnum, mid: $mid, refnum: $refnum}
        }).done(function(Data){
            $("#finalTitle").hide();
            if(Data == 1)
            {
                $("#finalPM").html('<span style="color: red;">پارامترهای ارسالی و دریافتی از بانک صحیح نمی باشد.</span>');
            }
            else if(Data == 2)
            {
                $("#finalPM").html('<span style="color: red;">پرداخت شما به درستی انجام نشده است، لطفاً دوباره سعی نمائید.</span>');
            }
            else if(Data == 3)
            {
                $("#finalPM").html('<span style="color: red;">فاکتور شما یافت نشد، لطفاً فرم پرداخت را دوباره تکمیل نمائید.</span>');
            }
            else if(Data == 4)
            {
                $("#finalPM").html('<span style="color: red;">رسید دیجیتالی دریافت شده از بانک قبلاً استفاده شده است.</span>');
            }
            else if(Data == 5)
            {
                $("#finalPM").html('<span style="color: red;">در ثبت اطلاعات مشکلی به وجود آمده است. لطفاً با بخش پشتیبانی تماس حاصل فرمائید.</span>');
            }
            else if(Data == 6)
            {
                $("#finalPM").html('<span style="color: red;">مبلغ پرداختی با مبلغ وارد شده برابر نمی باشد.</span>');
            }
            else if(Data == 7)
            {
                $("#finalPM").html('<span style="color: red;">در ثبت نهایی اطلاعات مشکلی به وجود آمده است، لطفاً با بخش پشتیبانی تماس حاصل فرمائید.</span>');
            }
            else if(Data == 8)
            {
                $("#finalPM").html('<span style="color: green;">پرداخت شما با موفقیت انجام شد.</span>');
            }
            
            $("#finalRandomCode").html('کدپیگیری شما عبارتست از: ' + $tid);
            
        });
}
$(document).ready(function(){
        paymentProcess();
    });
</script>
      
<?php

include 'footer.php';

?>
