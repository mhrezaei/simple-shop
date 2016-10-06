<?php
require_once 'config/config.php';
if(!setUserSession(1,1,2))
{
    exit;
}
if(isset($_FILES['file']))
{
    $fileName = $_FILES['file']['name'];
    $fileTemp = $_FILES['file']['tmp_name'];
    $ext = explode('.', $fileName);
    $ext = $ext[count($ext) - 1];
    $newName = md5(time()) . ".$ext";
    if(move_uploaded_file($fileTemp, "images/upload/" . $newName))
    {
        echo '
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <center style="direction: rtl;">
        <span style="color: green; font-family: tahoma;">عکس مورد نظر با موفقیت آپلود شد.</span><br /><br /><br />
        <span style="font-family: Tahoma;">آدرس تصویر:</span> <input type="text" name="x" value="' . $uri .'/images/upload/' . $newName .'" size="50" /><br /><br /><br /><br /><br />
        <a href="' . $uri . '/upload.php" style="font-family: Tahoma;">آپلود تصویر جدید</a>
        </center>';
    }
}
else
{
    echo <<<_END_
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <div style="float: right;">
<form action="" method="post" enctype="multipart/form-data" name="sendPost">

<input type="file" name="file" /><br />
<br />
<br />
<input type="submit" value="Upload Picture!" />
</form>
</div>

_END_;

}



?>