<?php

require_once '../config/config.php';

$cm = DatabaseHandler::GetAll("SELECT * FROM `comments` WHERE `status` = 1 ;");
if($cm)
{
    $cm = count($cm);
}
else
{
    $cm = '';
}

?>

<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>صفحه مدیریت سایت سفیران زندگی</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">    
<link rel="stylesheet" type="text/css" href="css/my.css">    
<link rel="stylesheet" type="text/css" href="css/js-persian-cal.css">    
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/adpacks.js" type="text/javascript"></script>
<script src="js/js-persian-cal.js" type="text/javascript"></script>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>

</head>
<body>

<nav id="menu-wrap">    
    <ul id="menu">
        <li><a href="http://www.safirezendegi.com/" target="_blank">صفحه اصلی سایت</a></li>

        <li>
            <a href="#">اخبار</a>
            <ul>
                <li>
                    <a href="addNews">افزودن خبر</a>
                </li>
                <li>
                    <a href="newsList">ویرایش اخبار</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="#">طرح ها</a>
            <ul>
                <li>
                    <a href="addPlans">افزودن طرح</a>
                </li>
                <li>
                    <a href="planList">ویرایش طرح ها</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="#">گالری تصاویر</a>
            <ul>
                <li>
                    <a href="addGallery">افزودن آلبوم</a>
                </li>
                <li>
                    <a href="galleryList">ویرایش آلبوم ها</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="#">صفحات اصلی</a>
            <ul>
                <li>
                    <a href="editPages?id=1">درباره ما</a>
                </li>
                <li>
                    <a href="editPages?id=3">خلاصه درباره ما</a>
                </li>
                <li>
                    <a href="editPages?id=2">تماس باما</a>
                </li>
            </ul>
        </li>
        
        <li><a href="showContact">تماس های دریافتی <?php if($cm > 0){ ?><span style="color: red;">(<?php echo $cm; ?>) <?php } ?></span></a></li>
        
        <li><a href="<?php echo $uri; ?>/admin/logOut">خروج</a></li>
    </ul>
</nav>


<!--
<li>
            <a href="#">Categories</a>
            <ul>
                <li>
                    <a href="#">CSS</a>
                    <ul>
                        <li><a href="#">Item 11</a></li>

                        <li><a href="#">Item 12</a></li>
                        <li><a href="#">Item 13</a></li>
                        <li><a href="#">Item 14</a></li>
                    </ul>                
                </li>
                <li>
                    <a href="#">Graphic design</a>

                    <ul>
                        <li><a href="#">Item 21</a></li>
                        <li><a href="#">Item 22</a></li>
                        <li><a href="#">Item 23</a></li>
                        <li><a href="#">Item 24</a></li>
                    </ul>                
                </li>

                <li>
                    <a href="#">Development tools</a>
                    <ul>
                        <li><a href="#">Item 31</a></li>
                        <li><a href="#">Item 32</a></li>
                        <li><a href="#">Item 33</a></li>
                        <li><a href="#">Item 34</a></li>

                    </ul>                
                </li>
                <li>
                    <a href="#">Web design</a>                
                    <ul>
                        <li><a href="#">Item 41</a></li>
                        <li><a href="#">Item 42</a></li>
                        <li><a href="#">Item 43</a></li>

                        <li><a href="#">Item 44</a></li>
                    </ul>    
                </li>
            </ul>
        </li>
        
        <li>
            <a href="#">Work</a>
            <ul>

                <li>
                    <a href="#">Work 1</a>
                    <ul>
                        <li>
                            <a href="#">Work 11</a>        
                            <ul>
                                <li><a href="#">Work 111</a></li>
                                <li><a href="#">Work 112</a></li>

                                <li><a href="#">Work 113</a></li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#">Work 12</a>
                            <ul>
                                <li><a href="#">Work 121</a></li>
                                <li><a href="#">Work 122</a></li>

                                <li><a href="#">Work 123</a></li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#">Work 13</a>
                            <ul>
                                <li><a href="#">Work 131</a></li>
                                <li><a href="#">Work 132</a></li>

                                <li><a href="#">Work 133</a></li>
                            </ul>                            
                        </li>
                    </ul>                    
                </li>
                <li>
                    <a href="#">Work 2</a>
                    <ul>
                        <li>

                            <a href="#">Work 21</a>
                            <ul>
                                <li><a href="#">Work 211</a></li>
                                <li><a href="#">Work 212</a></li>
                                <li><a href="#">Work 213</a></li>
                            </ul>                            
                        </li>

                        <li>
                            <a href="#">Work 22</a>
                            <ul>
                                <li><a href="#">Work 221</a></li>
                                <li><a href="#">Work 222</a></li>
                                <li><a href="#">Work 223</a></li>
                            </ul>                            
                        </li>

                        <li>
                            <a href="#">Work 23</a>
                            <ul>
                                <li><a href="#">Work 231</a></li>
                                <li><a href="#">Work 232</a></li>
                                <li><a href="#">Work 233</a></li>
                            </ul>                            
                        </li>

                    </ul>                    
                </li>
                <li>
                    <a href="#">Work 3</a>
                    <ul>
                        <li>
                            <a href="#">Work 31</a>
                            <ul>

                                <li><a href="#">Work 311</a></li>
                                <li><a href="#">Work 312</a></li>
                                <li><a href="#">Work 313</a></li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#">Work 32</a>

                            <ul>
                                <li><a href="#">Work 321</a></li>
                                <li><a href="#">Work 322</a></li>
                                <li><a href="#">Work 323</a></li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#">Work 33</a>

                            <ul>
                                <li><a href="#">Work 331</a></li>
                                <li><a href="#">Work 332</a></li>
                                <li><a href="#">Work 333</a></li>
                            </ul>                            
                        </li>
                    </ul>                    
                </li>

            </ul>        
        </li>
-->