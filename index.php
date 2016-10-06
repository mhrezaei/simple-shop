<?php
include_once 'config/config.php';

include 'header.php';
//index
if(isset($_GET['login']))
{
    if($_GET['login'] == 'false')
    {
        $x = 1;
    }
}
?>
<script type="text/javascript" src="<?php echo $uri; ?>/script/slider.js"></script>
<script type="text/javascript" charset="utf-8">
    $(function() {
        $("#navi ul").tabs("#panes > div", {
        effect: 'fade', 
        fadeOutSpeed: 300, 
        rotate: true
        }).slideshow({ 
            autoplay: true, 
            interval: 6000 
        }); 
    });
 </script>
  <!-- Slider -->
  <div class="up"></div>
  <div class="center">
    <div class="home-slider home-left-slider home-full-slider">
      <div class="inner">
        <div class="slide">
          <div id="feature">
            <div id="panes">
              <div style="display: none;"> <img src="<?php echo $uri; ?>/images/banner1.png" /></div>
              <div style="display: none;"> <img src="<?php echo $uri; ?>/images/banner2.png" /></div>
              <div style="display: none;"> <img src="<?php echo $uri; ?>/images/banner3.png" /></div>
            </div>
            <div id="navi">
              <ul>
                <li><a href="#"><img src="<?php echo $uri; ?>/images/bullets.png" alt="" border="0" width="12" height="12" style="padding: 0px 1px 0px 1px;" /></a></li>
                <li><a href="#"><img src="<?php echo $uri; ?>/images/bullets.png" alt="" border="0" width="12" height="12" style="padding: 0px 1px 0px 1px;" /></a></li>
                <li><a href="#"><img src="<?php echo $uri; ?>/images/bullets.png" alt="" border="0" width="12" height="12" style="padding: 0px 1px 0px 1px;" /></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- End Slider -->
  <!-- Center -->
      <div id="text-up"></div>
      <div id="text-center">
      
<?php
     include 'miniAbout.php';
     include 'news.php';
 ?>
      
      <!-- Client -->
  <div align="right">

      <!-- End Client --> 
      
<?php

include 'sidebar.php';

 ?>
      
  </div>
      <!-- End Design -->
    </div>
    <div id="text-down"></div>
  <!-- End Center -->
  </div>
  <div class="down"></div>

<?php

include 'footer.php';

?>

