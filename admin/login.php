<?php

require_once '../config/config.php';
require_once SITE_ROOT . '/php/fn.questionSecurity.php';
if(setUserSession(1,1,2))
{
    $url = $uri . '/admin';
    header('location: ' . $url);
    exit;
}
$err = 0;
if(isset($_POST['username']) && isset($_POST['password']) && $_POST['question'])
{
    if(questionSecurity($_POST['question']))
    {
        $user = checkUserForLoginToAdmin($_POST['username'], $_POST['password']);
        if($user)
        {
            if(checkUserAccess('admin', $user['id']))
            {
                setUserSession($user['id'], $user['passWord']);
                $url = $uri . '/admin';
                header('location: ' . $url);
                exit;
            }
            else
            {
                $err = 1;
            }
        }
        else
        {
            $err = 2;
        }
    }
    else
    {
        $err = 3;
    }
}

?>


<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>ورود به بخش مدیریت</title>
		<meta name="viewport" content="width=device-width, initial-scale=0.78, max-scale=0.78">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->

		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

		<script src="js/ga.js" async="" type="text/javascript"></script>
        <script src="js/jquery-1.js"></script>
		<script src="js/main.js"></script>
	</head>

	<body>
		<img src="images/login-bg.jpg" class="bg" alt="background">
		<div style="opacity: 1; top: 0px;" id="login-view">
	<h1 class="center">
		<!--<img src="images/login-logo.png" alt="">-->
        <span style="font-size: 18px;">ورود به بخش مدیریت</span>
        <br>
	</h1>
	<form method="post" action="<?php echo $uri; ?>/admin/login">
		<div class="control-group">
			<div class="indicator"></div>
			<label class="control-label" for="username">نام کاربری شما :</label>
			<div class="controls">
				<input id="username" name="username" class="span3 icon ltr input-icon-username" placeholder="Username" type="text">
			</div>
		</div>
        
        
		<div class="control-group">
            <div class="indicator"></div>
            <label class="control-label" for="password">رمز عبور :</label>
            <div class="controls">
                <input id="password" class="span3 icon ltr input-icon-password" name="password" type="password" placeholder="Password">
            </div>
        </div>
        
        
        <div class="control-group">
			<div class="indicator"></div>
			<label class="control-label" for="password">حاصل عبارت <?php echo questionSecurity(); ?> می شود؟</label>
			<div class="controls">
				<input id="question" class="span3 icon ltr input-icon-password" name="question" type="text" placeholder="Security Question">
			</div>
		</div>
        
        
        <?php if($err == 1){ ?>
            <div class="alert alert-error">
                <i class="icon-ban-circle"></i> دسترسی ورود به این بخش برای شما صادر نشده است.
            </div>
        <?php }elseif($err == 2){ ?>
            <div class="alert alert-error">
                <i class="icon-ban-circle"></i> نام کاربری/رمزعبور صحیح نمی باشد.
            </div>
        <?php }elseif($err == 3){ ?>
            <div class="alert alert-error">
                <i class="icon-ban-circle"></i> پاسخ سوال امنیتی صحیح نمی باشد.
            </div>
        <?php } ?>
        
        
		<div class="form-actions">
			<!--<label class="checkbox pull-right right w150">
              مرا به خاطر بسپار
              <input name="remember" id="remember" value="true" type="checkbox">
            </label>-->
			<button class="btn btn-success sliced" type="submit"><a><i class="icon-off icon-white"></i></a>ورود به سیستم</button>
		</div>
	</form>
</div>
	
</body></html>