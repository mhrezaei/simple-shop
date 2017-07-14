<?php
//Header
$persianDate = pdate('l d F Y');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo getSetting('site_title'); ?></title>
<link href="<?php echo $uri; ?>/images/favicon.ico" rel="shortcut icon" type="images/favicon" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
<link href="<?php echo $uri; ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $uri; ?>/css/slide_style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $uri; ?>/css/orbit.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo $uri; ?>/script/jquery.js"></script>
<script type="text/javascript" src="<?php echo $uri; ?>/script/jquery.orbit.js"></script>
<script type="text/javascript" src="<?php echo $uri; ?>/script/frm.validate.js"></script>


</head>

<body class="body">

  <!-- Header -->



    <div class="container">
        <img src="images/header.png" alt="<?php echo getSetting('site_title'); ?>"/>

        <div class="menu">
            <ul>
                <li><a href="<?php echo $uri; ?>/index" class="subLink">صفحه اصلی</a></li>
                |
                <li><a href="<?php echo $uri; ?>/productsList" class="subLink">محصولات</a></li>
                |
                <li><a href="<?php echo $uri; ?>/galleries" class="subLink">گالری تصاویر</a></li>
                |
                <li><a href="<?php echo $uri; ?>/about" class="subLink">درباره فروشگاه</a></li>
                |
                <li><a href="<?php echo $uri; ?>/contact" class="subLink">تماس باما</a></li>
            </ul>
            <p style="float: left; font-size: 14px; color: grey; padding-left: 15px; padding-top: 18px;">امروز: <?php echo $persianDate; ?></p>
        </div>

    </div>

  <!-- End Header -->
