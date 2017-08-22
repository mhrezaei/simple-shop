<?php

require_once '../config/config.php';
if(!setUserSession(1,1,2))
{
    $url = $uri . '/admin/login';
    header('location: ' . $url);
    exit;
}                                                                                                                                   

include 'header.php';

?>


<div id="menu" style="min-height: 50px; background: #ECF4FC;">
    <div style="font-family: 'Yekan'; margin-right: 10px; margin-top: 15px; font-size: 13px;">به بخش مدیریت <?php echo getSetting('site_title'); ?> خوش آمدید :)</div>
</div>


<?php include 'footer.php'; ?>