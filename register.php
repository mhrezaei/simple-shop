<?php
include_once 'config/config.php';
include 'header.php';
//register
$pDay = pdate('d');
$pMonth = pdate('n');
$pYear = pdate('Y');
$day = '';
$month = '';
$year = '';
for($i = 1; $i <= 31; $i++)
{
    if($i == $pDay)
    {
        $day .= '<option value="' . $i . '" selected="selected">' . $i . '</option>';
    }
    else
    {
        $day .= '<option value="' . $i . '">' . $i . '</option>';
    }
}

for($a = 1; $a <= 12; $a++)
{
    if($a == $pMonth)
    {
        $month .= '<option value="' . $a . '" selected="selected">' . $a . '</option>';
    }
    else
    {
        $month .= '<option value="' . $a . '">' . $a . '</option>';
    }
}

for($b = ($pYear - 42); $b <= $pYear; $b++)
{
    if($b == $pYear)
    {
        $year .= '<option value="' . $b . '" selected="selected">' . $b . '</option>';
    }
    else
    {
        $year .= '<option value="' . $b . '">' . $b . '</option>';
    }
}
?>

  <!-- Center -->
      <img src="images/loading5.gif" alt="loading.gif" style="display: none;" />
      <img src="images/ok.gif" alt="yes" style="display: none;" />
      <img src="images/no.gif" alt="no" style="display: none;" />
      <div class="up"></div>
      <div class="center registerPage">
      <!-- Information -->
      <br />
      <table width="800" align="center" dir="rtl">
            <tr>
                <td colspan="3" width="100%" height="60" align="center" valign="middle" dir="rtl"><span class="formHead">فرم ثبت نام مخصوص سفیران</span></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><hr /></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><span class="formSub">اطلاعات اولیه ...</span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">نام و نام خانوادگی:</td>
                <td width="300" align="center" valign="middle" dir="rtl"><input type="text" name="txtName" class="txtInput" id="txtName" onblur="txtName();" onfocus="Default(this);" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtName">*<span class="note">مثال: احمد مختاری</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">نام پدر:</td>
                <td width="300" align="center" valign="middle" dir="rtl"><input type="text" name="txtFatherName" class="txtInput" id="txtFatherName" onblur="txtFatherName();" onfocus="Default(this);" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtFatherName">*<span class="note">مثال: عبدالرضا</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">کد ملی:</td>
                <td width="300" align="center" valign="middle" dir="ltr"><input type="text" name="txtNationalCode" class="txtInput" id="txtNationalCode" maxlength="10" onblur="txtNationalCode();" onfocus="Default(this);" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtNationalCode">*<span class="note">مثال: 0056596741</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">جنسیت:</td>
                <td width="300" align="right" valign="middle" dir="rtl">
                    <select name="CbSe" dir="rtl" class="txtInput inputWidth" id="CbSe" onblur="CbSe();" onfocus="Default(this);">
                        <option value="1">مرد</option>
                        <option value="2">زن</option>
                    </select>
                </td>
                <td width="250" align="justify" valign="middle"><span class="star CbSe">*<span class="note">مثال: مذکر</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">تاریخ تولد:</td>
                <td width="300" align="right" valign="middle" dir="rtl">
                    روز:&nbsp;<select name="CbDay" dir="rtl" class="txtInput inputWidthMini" id="CbDay" onblur="bDate(this,0);" onfocus="Default(this);">
                        <?= $day ?>
                    </select>
                    &nbsp;
                    ماه:&nbsp;<select name="CbMonth" dir="rtl" class="txtInput inputWidthMini" id="CbMonth" onblur="bDate(this,0);" onfocus="Default(this);">
                        <?= $month ?>
                    </select>
                    &nbsp;
                    سال:&nbsp;<select name="CbYear" dir="rtl" class="txtInput inputWidthMini" id="CbYear" onblur="bDate(this,1);" onfocus="Default(this);">
                        <?= $year ?>
                    </select>
                </td>
                <td width="250" align="justify" valign="middle"><span class="star CbYear">*<span class="note">مثال: 1365/5/28</span></span></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><hr /></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><span class="formSub">اطلاعات تماس ...</span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">شماره تماس (ثابت با پیش شماره):</td>
                <td width="300" align="center" valign="middle" dir="ltr"><input type="text" name="txtPhone" class="txtInput" id="txtPhone" maxlength="11" onblur="txtPhone();" onfocus="Default(this);" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtPhone">*<span class="note">مثال: 02122505454</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">شماره تماس (موبایل):</td>
                <td width="300" align="center" valign="middle" dir="ltr"><input type="text" name="txtMobile" class="txtInput" id="txtMobile" maxlength="11" onblur="txtMobile();" onfocus="Default(this);" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtMobile">*<span class="note">مثال: 09351234567</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">استان:</td>
                <td width="300" align="center" valign="middle" dir="rtl">
                    <select name="CbState" dir="rtl" class="txtInput inputWidth" id="CbState" onblur="CbState();" onfocus="Default(this);">
                        <option value="1">آذربایجان شرقی</option>
                        <option value="2">آذربایجان غربی</option>
                        <option value="3">اردبیل</option>
                        <option value="4">اصفهان</option>
                        <option value="5">البرز</option>
                        <option value="6">ایلام</option>
                        <option value="7">بوشهر</option>
                        <option value="8" selected="selected" >تهران</option>
                        <option value="9">چهارمحال و بختیاری</option>
                        <option value="11">خراسان جنوبی</option>
                        <option value="10">خراسان رضوی</option>
                        <option value="12">خراسان شمالی</option>
                        <option value="13">خوزستان</option>
                        <option value="14">زنجان</option>
                        <option value="15">سمنان</option>
                        <option value="16">سیستان و بلوچستان</option>
                        <option value="17">فارس</option>
                        <option value="18">قزوین</option>
                        <option value="19">قم</option>
                        <option value="20">کردستان</option>
                        <option value="21">کرمان</option>
                        <option value="22">کرمانشاه</option>
                        <option value="23">کهگیلویه و بویراحمد</option>
                        <option value="24">گلستان</option>
                        <option value="25">گیلان</option>
                        <option value="26">لرستان</option>
                        <option value="27">مازندران</option>
                        <option value="28">مرکزی</option>
                        <option value="29">هرمزگان</option>
                        <option value="30">همدان</option>
                        <option value="31">یزد</option>
                    </select>
                </td>
                <td width="250" align="justify" valign="middle"><span class="star CbState">*<span class="note">مثال: تهران</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">شهر:</td>
                <td width="300" align="center" valign="middle" dir="rtl"><input type="text" name="txtCity" class="txtInput" id="txtCity" onblur="txtCity();" onfocus="Default(this);" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtCity">*<span class="note">مثال: ری</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">آدرس:</td>
                <td width="300" align="center" valign="middle" dir="rtl"><input type="text" name="txtAddress" class="txtInput" id="txtAddress" onblur="txtAddress();" onfocus="Default(this);" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtAddress">*<span class="note">مثال: میدان رسالت - خ هنگام - پ 110</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">کدپستی:</td>
                <td width="300" align="center" valign="middle" dir="ltr"><input type="text" name="txtPostalCode" class="txtInput" id="txtPostalCode" maxlength="10" onblur="txtPostalCode();" onfocus="Default(this);" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtPostalCode">*<span class="note">مثال: 16336859651</span></span></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><hr /></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><span class="formSub">سایر اطلاعات ...</span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">شغل:</td>
                <td width="300" align="center" valign="middle" dir="rtl"><input type="text" name="txtJob" class="txtInput" id="txtJob" /></td>
                <td width="250" align="justify" valign="middle"><span class="plus txtJob">+<span class="note">دلخواه (مثال: کامپیوتر)</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">میزان تحصیلات:</td>
                <td width="300" align="center" valign="middle" dir="rtl"><input type="text" name="txtEducation" class="txtInput" id="txtEducation" /></td>
                <td width="250" align="justify" valign="middle"><span class="plus txtEducation">+<span class="note">دلخواه: (مثال: دیپلم)</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">رشته تحصیلی:</td>
                <td width="300" align="center" valign="middle" dir="rtl"><input type="text" name="txtCourse" class="txtInput" id="txtCourse" /></td>
                <td width="250" align="justify" valign="middle"><span class="plus txtCourse">+<span class="note">دلخواه: (مثال: ریاضی)</span></span></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><hr /></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><span class="formSub">اطلاعات ثبت نام ...</span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">ایمیل:</td>
                <td width="300" align="center" valign="middle" dir="ltr"><input type="text" name="txtEmail" class="txtInput" id="txtEmail" onblur="txtEmail();" onfocus="Default(this);" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtEmail">*<span class="note">مثال: email@example.com</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">نام کاربری:</td>
                <td width="300" align="center" valign="middle" dir="ltr"><input type="text" name="txtUserName" class="txtInput" id="txtUserName" onblur="txtUserName();" onfocus="Default(this);" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtUserName">*<span class="note">مثال: ahmad.mokhtari</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">رمزعبور:</td>
                <td width="300" align="center" valign="middle" dir="ltr"><input type="password" name="txtPassWord" class="txtInput" id="txtPassWord" onfocus="Default(this);" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtPassWord">*<span class="note">مثال: ******</span></span></td>
            </tr>
            <tr>
                <td width="250" align="justify" valign="middle" dir="rtl">تکرار رمز عبور:</td>
                <td width="300" align="center" valign="middle" dir="ltr"><input type="password" name="txtVerifyPassword" class="txtInput" id="txtVerifyPassword" onblur="txtVerifyPassword();" onfocus="Default(this);" /></td>
                <td width="250" align="justify" valign="middle"><span class="star txtVerifyPassword">*</span></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="left" valign="middle" dir="rtl">
                    <div style="margin-left: 20px; margin-top: 40px;">
                        <div class="btnRegister" onclick="Final();">ثبت نام</div>
                        <div class="final"></div>
                    </div>
                </td>
            </tr>
        </table>

      <!-- End Information -->
      </div>
      <div class="down"></div>
      
<?php

include 'footer.php';

?>
