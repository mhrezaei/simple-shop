<?php
include_once 'config/config.php';
if(isset($_GET['pid']) && ($_GET['pid'] + 0) > 0)
{
    $plan = DatabaseHandler::GetRow("SELECT * FROM `plans` WHERE `id` = " . $_GET['pid']);
    if($plan)
    {
        if($plan['status'] == 1 || $plan['status'] == 2)
        {
            $st = pdate('d F Y', $plan['dateStart']);
            $stt = pdate('d F Y', $plan['dateEnd']);
            $t = ($plan['dateEnd'] - $plan['dateStart']) / 86400;
            $tt = ((time() - $plan['dateStart']) / 86400);
            $d = ceil((100 / $t) * $tt);
            if($d == 100)
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
      <div class="center registerPage">
      <!-- Information -->

      <table width="800" align="center" dir="rtl">
            <tr>
                <td colspan="3" width="100%" height="60" align="right" valign="middle" dir="rtl">
                <span class="formHead" style="font-size: 18px;">پرداخت کمک های نقدی برای <?php echo $plan['title']; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><hr /></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><span class="formSub">فرم ثبت اطلاعات ...</span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">نام و نام خانوادگی:</td>
                <td width="300" align="center" valign="middle" dir="rtl"><input type="text" name="txtName" class="txtInput" id="txtName" /></td>
                <td width="250" align="justify" valign="middle"><span class="plus txtName">+<span class="note">مثال: احمد مختاری - دلخواه</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">شماره تماس (موبایل):</td>
                <td width="300" align="center" valign="middle" dir="ltr"><input type="text" name="txtMobile" class="txtInput" id="txtMobile" maxlength="11" /></td>
                <td width="250" align="justify" valign="middle"><span class="plus txtMobile">+<span class="note">مثال: 09351234567 - دلخواه</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">ایمیل:</td>
                <td width="300" align="center" valign="middle" dir="ltr"><input type="text" name="txtEmail" class="txtInput" id="txtEmail" /></td>
                <td width="250" align="justify" valign="middle"><span class="plus txtEmail">+<span class="note">مثال: email@example.com - دلخواه</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">مبلغ:</td>
                <td width="300" align="center" valign="middle" dir="ltr"><input type="text" name="txtPrice" class="txtInput" id="txtPrice" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtEmail">*<span class="note">تومان</span></span></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><hr /></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="left" valign="middle" dir="rtl">
                    <div style="margin-left: 20px; margin-top: 20px;">
                        <div class="btnRegister2" onclick="formProcess();">پرداخت</div>
                        <div class="btnRegister" style="margin-left: 10px;" onclick="window.location='index'">انصراف</div>
                        <img src="<?php echo $uri; ?>/images/loading5.gif" alt="loading5.gif" style="margin-left: 10px; margin-top: 11px; display: none;" id="loadingImg">
                        <div class="final" style="color: red; font-size: 14px; margin-left: 80px;"></div>
                    </div>
                </td>
            </tr>
        </table>

      <!-- End Information -->
      </div>
      <div class="down"></div>
      <input id="pid" value="<?php echo $plan['id'] ?>" type="hidden" />
      <input id="uri" value="<?php echo $uri ?>" type="hidden" />
      <form action="https://acquirer.samanepay.com/Payment.aspx" method="post" name="Saman">
            <input type="hidden" name="Amount" id="Amount" />
            <input type="hidden" name="MID" id="MID" />
            <input type="hidden" name="ResNum" id="ResNum" />
            <input type="hidden" name="RedirectURL" id="RedirectURL" />
        </form>
<script type="text/javascript">
function formProcess()
{
    $(".final").text('');
    var $name = $("#txtName").val();
    var $mobile = $("#txtMobile").val();
    var $email = $("#txtEmail").val();
    var $price = $("#txtPrice").val();
    var $pid = $("#pid").val();
    if($price > 100)
    {
        $("#loadingImg").show();
        $.ajax({
            type: "POST",
            url: "ajax/payment.php",
            cache: false,
            data: {name: $name, mobile: $mobile, email: $email, price: $price, pid: $pid}
        }).done(function(Data){
             if(Data == -1)
             {
                 $("#loadingImg").hide();
                 $(".final").text('مبلغ را به درستی وارد نکرده اید.') ;
             }
             else if(Data == -2)
             {
                 $("#loadingImg").hide();
                 $(".final").text('مشکلی در ثبت فرم به وجود آمده است، لطفاً دوباره سعی نمائید.') ;
             }
             else if(Data > 1000)
             {
                 $price = $price + '0';
                 var url = $("#uri").val();
                 url = url + '/transaction?tid=' + Data;
                 $("#Amount").val($price);
                 $("#MID").val('10002890');
                 $("#ResNum").val(Data);
                 $("#RedirectURL").val(url);
                 document.Saman.submit();
             }
        });
    }
    else
    {
        $(".final").text('گزینه مبلغ را تکمیل نمائید.') ;
    }
}
</script>
      
<?php

include 'footer.php';

?>
