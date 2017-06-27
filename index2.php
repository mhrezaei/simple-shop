<?php
include_once 'config/config.php';

include 'header.php';

$slideshow = DatabaseHandler::GetAll("SELECT * FROM `slideshow` LIMIT 5; ");
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
<?php if (count($slideshow)){ ?>
  <div class="up"></div>
  <div class="center">
    <div class="home-slider home-left-slider home-full-slider">
      <div class="inner">
        <div class="slide">
          <div id="feature">
            <div id="panes">
                <?php for ($i = 0; $i < count($slideshow); $i++){ ?>
                    <div style="display: none;"> <img src="<?php echo $uri . '/' . $slideshow[$i]['picture']; ?>" title="<?php $slideshow[$i]['title'] ?>" /></div>
                <?php } ?>
            </div>
            <div id="navi">
              <ul>
                  <?php for ($i = 0; $i < count($slideshow); $i++){ ?>
                      <li><a href="#"><img src="<?php echo $uri; ?>/images/bullets.png" alt="" border="0" width="12" height="12" style="padding: 0px 1px 0px 1px;" /></a></li>
                  <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
      <?php } ?>
  <!-- End Slider -->
  <!-- Center -->

      <div style="margin: 0 auto; width: 810px;">
          <div style="width: 250px; border: 1px solid red; float: right;">
              <div style="width: 240px; margin: 0 auto; border: 1px solid #E1E2E3; height: auto;">
                  <div style="width: 100%; background: #F7F9FA; padding: 10px; direction: rtl; text-align: right;">جدیدترین محصولات</div>
                  <div style="width: 100%; background: #FFFFFF; padding: 10px; direction: rtl; text-align: right; height: 300px;">جدیدترین محصولات</div>
              </div>
          </div>
          <div style="width: 540px; border: 1px solid black; float: right; margin-right: 15px;"></div>
      </div>

  <!-- End Center -->
  </div>
  <div class="down"></div>

<?php

include 'footer.php';

?>

