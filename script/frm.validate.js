var $txtNameErr;
var $txtFatherNameErr;
var $txtNationalCodeErr;
var $txtPhoneErr;
var $txtMobileErr;
var $txtCityErr;
var $txtAddressErr;
var $txtPostalCodeErr;
var $txtEmailErr;
var $txtUserNameErr;
var $txtVerifyPasswordErr;
function txtName()
{
    $(".txtName").html('<img src="images/loading5.gif" alt="loading.gif" />');
    var $txtName = $("#txtName").val();
    $.ajax({
            type: "POST",
            url: "ajax/engine.php",
            cache: false,
            data: {checkTxtName: $txtName}
        }).done(function(Data){
            if(Data == '1')
            {
                $("#txtName").addClass('txtInputOk');
                $(".txtName").html('<img src="images/ok.gif" class="nImgDisplay" />');
                $txtNameErr = 1;
            }
            else
            {
                $("#txtName").addClass('txtInputErr');
                $(".txtName").html('نام را به صورت فارسی وارد نمائید.');
                $txtNameErr = 2;
            }
        });
}
function txtFatherName()
{
    $(".txtFatherName").html('<img src="images/loading5.gif" alt="loading.gif" />');
    var $txtFatherName = $("#txtFatherName").val();
    $.ajax({
            type: "POST",
            url: "ajax/engine.php",
            cache: false,
            data: {checkTxtFatherName: $txtFatherName}
        }).done(function(Data){
            if(Data == '1')
            {
                $("#txtFatherName").addClass('txtInputOk');
                $(".txtFatherName").html('<img src="images/ok.gif" class="nImgDisplay" />');
                $txtFatherNameErr = 1;
            }
            else
            {
                $("#txtFatherName").addClass('txtInputErr');
                $(".txtFatherName").html('نام پدر را به صورت فارسی وارد نمائید.');
                $txtFatherNameErr = 2;
            }
        });
}
function txtNationalCode()
{
    $(".txtNationalCode").html('<img src="images/loading5.gif" alt="loading.gif" />');
    var $txtNationalCode = $("#txtNationalCode").val();
    $.ajax({
            type: "POST",
            url: "ajax/engine.php",
            cache: false,
            data: {checktxtNationalCode: $txtNationalCode}
        }).done(function(Data){
            if(Data == '1')
            {
                $("#txtNationalCode").addClass('txtInputOk');
                $(".txtNationalCode").html('<img src="images/ok.gif" class="nImgDisplay" />');
                $txtNationalCodeErr = 1;
            }
            else
            {
                $("#txtNationalCode").addClass('txtInputErr');
                $(".txtNationalCode").html('10رقم، فقط عدد به صورت صحیح وارد نمائید.');
                $txtNationalCodeErr = 2;
            }
        });
}
function CbSe()
{
    $(".CbSe").html('<img src="images/loading5.gif" alt="loading.gif" />');
    $("#CbSe").addClass('txtInputOk');
    $(".CbSe").html('<img src="images/ok.gif" class="nImgDisplay" />');
}
function bDate(input, change)
{
    $(".CbYear").html('<img src="images/loading5.gif" alt="loading.gif" />');
    $(input).removeClass('txtInput');
    $(input).addClass('txtInputOk');
    if(change == '1')
    {
        $(".CbYear").html('<img src="images/ok.gif" class="nImgDisplay" />');
    }
}
function txtPhone()
{
    $(".txtPhone").html('<img src="images/loading5.gif" alt="loading.gif" />');
    var $txtPhone = $("#txtPhone").val();
    $.ajax({
            type: "POST",
            url: "ajax/engine.php",
            cache: false,
            data: {checktxtPhone: $txtPhone}
        }).done(function(Data){
            if(Data == '1')
            {
                $("#txtPhone").addClass('txtInputOk');
                $(".txtPhone").html('<img src="images/ok.gif" class="nImgDisplay" />');
                $txtPhoneErr = 1;
            }
            else
            {
                $("#txtPhone").addClass('txtInputErr');
                $(".txtPhone").html('شماره تماس ثابت را با پیش شماره وارد نمایید.');
                $txtPhoneErr = 2;
            }
        });
}
function txtMobile()
{
    $(".txtMobile").html('<img src="images/loading5.gif" alt="loading.gif" />');
    var $txtMobile = $("#txtMobile").val();
    $.ajax({
            type: "POST",
            url: "ajax/engine.php",
            cache: false,
            data: {checktxtMobile: $txtMobile}
        }).done(function(Data){
            if(Data == '1')
            {
                $("#txtMobile").addClass('txtInputOk');
                $(".txtMobile").html('<img src="images/ok.gif" class="nImgDisplay" />');
                $txtMobileErr = 1;
            }
            else
            {
                $("#txtMobile").addClass('txtInputErr');
                $(".txtMobile").html('11 رقم و بدون خط تیره وارد نمائید.');
                $txtMobileErr = 2;
            }
        });
}
function CbState()
{
    $(".CbState").html('<img src="images/loading5.gif" alt="loading.gif" />');
    $("#CbState").addClass('txtInputOk');
    $(".CbState").html('<img src="images/ok.gif" class="nImgDisplay" />');
}
function txtCity()
{
    $(".txtCity").html('<img src="images/loading5.gif" alt="loading.gif" />');
    var $txtCity = $("#txtCity").val();
    $.ajax({
            type: "POST",
            url: "ajax/engine.php",
            cache: false,
            data: {checktxtCity: $txtCity}
        }).done(function(Data){
            if(Data == '1')
            {
                $("#txtCity").addClass('txtInputOk');
                $(".txtCity").html('<img src="images/ok.gif" class="nImgDisplay" />');
                $txtCityErr = 1;
            }
            else
            {
                $("#txtCity").addClass('txtInputErr');
                $(".txtCity").html('شهر را به صورت فارسی وارد نمائید.');
                $txtCityErr = 2;
            }
        });
}
function txtAddress()
{
    $(".txtAddress").html('<img src="images/loading5.gif" alt="loading.gif" />');
    var $txtAddress = $("#txtAddress").val();
    $.ajax({
            type: "POST",
            url: "ajax/engine.php",
            cache: false,
            data: {checktxtAddress: $txtAddress}
        }).done(function(Data){
            if(Data == '1')
            {
                $("#txtAddress").addClass('txtInputOk');
                $(".txtAddress").html('<img src="images/ok.gif" class="nImgDisplay" />');
                $txtAddressErr = 1;
            }
            else
            {
                $("#txtAddress").addClass('txtInputErr');
                $(".txtAddress").html('آدرس را به صورت فارسی وارد نمائید.');
                $txtAddressErr = 2;
            }
        });
}
function txtPostalCode()
{
    $(".txtPostalCode").html('<img src="images/loading5.gif" alt="loading.gif" />');
    var $txtPostalCode = $("#txtPostalCode").val();
    $.ajax({
            type: "POST",
            url: "ajax/engine.php",
            cache: false,
            data: {checktxtPostalCode: $txtPostalCode}
        }).done(function(Data){
            if(Data == '1')
            {
                $("#txtPostalCode").addClass('txtInputOk');
                $(".txtPostalCode").html('<img src="images/ok.gif" class="nImgDisplay" />');
                $txtPostalCodeErr = 1;
            }
            else
            {
                $("#txtPostalCode").addClass('txtInputErr');
                $(".txtPostalCode").html('کد پستی ده رقمی را بدون خط تیره وارد نمائید.');
                $txtPostalCodeErr = 2;
            }
        });
}
function txtEmail()
{
    $(".txtEmail").html('<img src="images/loading5.gif" alt="loading.gif" />');
    var $txtEmail = $("#txtEmail").val();
    $.ajax({
            type: "POST",
            url: "ajax/engine.php",
            cache: false,
            data: {checktxtEmail: $txtEmail}
        }).done(function(Data){
            if(Data == '1')
            {
                $("#txtEmail").addClass('txtInputOk');
                $(".txtEmail").html('<img src="images/ok.gif" class="nImgDisplay" />');
                $txtEmailErr = 1;
            }
            else if(Data == '3')
            {
                $("#txtEmail").addClass('txtInputErr');
                $(".txtEmail").html('ایمیل وارد شده قبلاً ثبت شده است.');
                $txtEmailErr = 2;
            }
            else
            {
                $("#txtEmail").addClass('txtInputErr');
                $(".txtEmail").html('ایمیل وارد شده معتبر نمی باشد.');
                $txtEmailErr = 2;
            }
        });
}
function txtUserName()
{
    $(".txtUserName").html('<img src="images/loading5.gif" alt="loading.gif" />');
    var $txtUserName = $("#txtUserName").val();
    $.ajax({
            type: "POST",
            url: "ajax/engine.php",
            cache: false,
            data: {checktxtUserName: $txtUserName}
        }).done(function(Data){
            if(Data == '1')
            {
                $("#txtUserName").addClass('txtInputOk');
                $(".txtUserName").html('<img src="images/ok.gif" class="nImgDisplay" />');
                $txtUserNameErr = 1;
            }
            else if(Data == '3')
            {
                $("#txtUserName").addClass('txtInputErr');
                $(".txtUserName").html('این نام کاربری قبلاً ثبت شده است.');
                $txtUserNameErr = 2;
            }
            else
            {
                $("#txtUserName").addClass('txtInputErr');
                $(".txtUserName").html('حداقل 5کاراکتر و با حروف انگلیسی');
                $txtUserNameErr = 2;
            }
        });
}
function txtVerifyPassword()
{
    $(".txtPassWord").html('<img src="images/loading5.gif" alt="loading.gif" />');
    var $txtVerifyPassword = $("#txtVerifyPassword").val();
    var $txtPassWord = $("#txtPassWord").val();
    if($txtPassWord.length > 5)
    {
        if($txtPassWord == $txtVerifyPassword)
        {
            $("#txtVerifyPassword").addClass('txtInputOk');
            $("#txtPassWord").addClass('txtInputOk');
            $(".txtVerifyPassword").html('<img src="images/ok.gif" class="nImgDisplay" />');
            $(".txtPassWord").html('<img src="images/ok.gif" class="nImgDisplay" />');
            $txtVerifyPasswordErr = 1;
        }
        else
        {
            $("#txtVerifyPassword").addClass('txtInputErr');
            $("#txtPassWord").addClass('txtInputErr');
            $(".txtVerifyPassword").html('رمز و تکرار رمز برابر نمی باشند.');
            $(".txtPassWord").html('');
            $txtVerifyPasswordErr = 2;
        }
    }
    else
    {
        $("#txtVerifyPassword").addClass('txtInputErr');
        $("#txtPassWord").addClass('txtInputErr');
        $(".txtVerifyPassword").html('');
        $(".txtPassWord").html('حداقل 6کاراکتر وارد نمائید.');
        $txtVerifyPasswordErr = 2;
    }
}
function Final()
{
    $(".final").html('<img src="images/loading5.gif" alt="loading.gif" />');
    txtName();
    txtFatherName();
    txtNationalCode();
    CbSe();
    txtPhone();
    txtMobile();
    CbState();
    txtCity();
    txtAddress();
    txtPostalCode();
    txtEmail();
    txtUserName();
    txtVerifyPassword();
    if($txtNameErr == '1' && $txtFatherNameErr == '1' && $txtNationalCodeErr == '1' && $txtPhoneErr == '1' && $txtMobileErr == '1' && $txtCityErr == '1' && $txtAddressErr == '1' && $txtPostalCodeErr == '1' && $txtEmailErr == '1' && $txtUserNameErr == '1' && $txtVerifyPasswordErr == '1')
    {
        var $txtName = $("#txtName").val();
        var $txtFatherName = $("#txtFatherName").val();
        var $txtNationalCode = $("#txtNationalCode").val();
        var $CbSe = $("#CbSe").val();
        var $CbDay = $("#CbDay").val();
        var $CbMonth = $("#CbMonth").val();
        var $CbYear = $("#CbYear").val();
        var $txtPhone = $("#txtPhone").val();
        var $txtMobile = $("#txtMobile").val();
        var $CbState = $("#CbState").val();
        var $txtCity = $("#txtCity").val();
        var $txtAddress = $("#txtAddress").val();
        var $txtPostalCode = $("#txtPostalCode").val();
        var $txtJob = $("#txtJob").val();
        var $txtEducation = $("#txtEducation").val();
        var $txtCourse = $("#txtCourse").val();
        var $txtEmail = $("#txtEmail").val();
        var $txtUserName = $("#txtUserName").val();
        var $txtPassWord = $("#txtPassWord").val();
        var $txtVerifyPassword = $("#txtVerifyPassword").val();
        
        $.ajax({
            type: "POST",
            url: "ajax/register.php",
            cache: false,
            data:  {txtName: $txtName,
                    txtFatherName: $txtFatherName,
                    txtNationalCode: $txtNationalCode,
                    CbSe: $CbSe,
                    CbDay: $CbDay,
                    CbMonth: $CbMonth,
                    CbYear: $CbYear,
                    txtPhone: $txtPhone,
                    txtMobile: $txtMobile,
                    CbState: $CbState,
                    txtCity: $txtCity,
                    txtAddress: $txtAddress,
                    txtPostalCode: $txtPostalCode,
                    txtJob: $txtJob,
                    txtEducation: $txtEducation,
                    txtCourse: $txtCourse,
                    txtEmail: $txtEmail,
                    txtUserName: $txtUserName,
                    txtPassWord: $txtPassWord,
                    txtVerifyPassword: $txtVerifyPassword}
        }).done(function(Data){
            if(Data == '1')
            {
                $(".final").html('<img src="images/ok.gif" />&nbsp;<span style="color: green; font-size: 15px;">ثبت نام شما با موفقیت انجام شد، پس از تایید اطلاعات شما می توانید از قسمت ورود در سیستم لاگین کنید.</span>');
                $("input").val('');
                $("input").removeClass('txtInputOk');
                $("input").removeClass('txtInputErr');
                $("input").addClass('txtInput');
                $("select").removeClass('txtInputOk');
                $("select").removeClass('txtInputErr');
                $("select").addClass('txtInput');
                $(".nImgDisplay").addClass('imgDisplay');
            }
            else if(Date == '2')
            {
                $(".final").html('<img src="images/no.gif" />&nbsp;<span style="color: red; font-size: 15px;">خطایی در ثبت اطلاعات شما رخ داده است، در صورت تکرار به بخش پشتیبانی اطلاع دهید.</span>');
            }
            else if(Data == '3')
            {
                $(".final").html('<img src="images/no.gif" />&nbsp;<span style="color: red; font-size: 15px;">ایمیل وارد شده قبلاً در سیستم ثبت گردیده است.</span>');
            }
            else if(Data == '4')
            {
                $(".final").html('<img src="images/no.gif" />&nbsp;<span style="color: red; font-size: 15px;">موارد مشخص شده در فرم به درستی تکمیل نشده است.</span>');
            }
            else
            {
                $(".final").html('<img src="images/no.gif" />&nbsp;<span style="color: red; font-size: 15px;">خطای سیستمی به وجود آمده است، لطفاً به بخش پشتیبانی اطلاع دهید.</span>');
            }
        });
    }
    else
    {
        $(".final").html('<span style="color: red; font-size: 15px;">موارد مشخص شده فرم را به درستی تکمیل نمائید.</span>');
    }
}

function Default(input)
{
    $(input).removeClass('txtInputOk');
    $(input).removeClass('txtInputErr');
    $(input).addClass('txtInput');
}

function contactUs()
{
    $(".contactFinal").html('<img src="images/loading5.gif" alt="loading.gif" style="padding-top: 10px;" />');
    $txtName = $("#txtName").val();
    $txtEmail = $("#txtEmail").val();
    $txtTitle = $("#txtTitle").val();
    $txtComment = $("#taComment").val();
    $.ajax({
            type: "POST",
            url: "ajax/register.php",
            cache: false,
            data: {txtNames: $txtName, txtEmails: $txtEmail, txtTitles: $txtTitle, txtComments: $txtComment}
        }).done(function(Data){
            if(Data == '1')
            {
                $txtName = $("#txtName").val('');
                $txtEmail = $("#txtEmail").val('');
                $txtTitle = $("#txtTitle").val('');
                $txtComment = $("#taComment").val('');
                $(".contactFinal").html('<img src="images/ok.gif" style="padding-top: 9px;" />&nbsp;<span style="color: green; font-size: 13px;">فرم شما با موفقیت ارسال گردید، در صورت نیاز به آن پاسخ داده خواهد شد.</span>');
            }
            else if(Data == '2')
            {
                $(".contactFinal").html('<img src="images/no.gif" style="padding-top: 9px;" />&nbsp;<span style="color: red; font-size: 13px;">خطایی در ثبت فرم شما رخ داده است، در صورت تکرار به بخش پشتیبانی اطلاع دهید.</span>');
            }
            else
            {
                $(".contactFinal").html('<img src="images/no.gif" style="padding-top: 9px;" />&nbsp;<span style="color: red; font-size: 13px;">موارد مشخص شده در فرم به درستی تکمیل نشده است.</span>');
            }
        });
}
