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
              <div style="display: none;"> <img src="<?php echo $uri; ?>/images/slide01.jpg" /></div>
              <div style="display: none;"> <img src="<?php echo $uri; ?>/images/slide02.jpg" /></div>
              <div style="display: none;"> <img src="<?php echo $uri; ?>/images/slide03.jpg" /></div>
              <div style="display: none;"> <img src="<?php echo $uri; ?>/images/slide04.jpg" /></div>
            </div>
            <div id="navi">
              <ul>
                <li><a href="#"><img src="<?php echo $uri; ?>/images/bullets.png" alt="" border="0" width="12" height="12" style="padding: 0px 1px 0px 1px;" /></a></li>
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
     $news = DatabaseHandler::GetAll("SELECT * FROM `news` WHERE `status` = 1 ORDER BY `id` DESC LIMIT 0 , 15");
     if($news)
     {
         
?>
<div class="left-up"></div>
<div class="left-center2" style="height: 420px;">
    <img src="images/line3.png" class="titr" />
    <p class="indexContent" style="height: 420px;">
        <br />
        <br />
<?php
         
         for($i = 0; $i < count($news); $i++)
         {
             $news[$i]['date'] = pdate('d F Y', $news[$i]['date']);
?>

<!-- News -->

        <b>
            <a href="showNews?nid=<?php echo $news[$i]['id']; ?>" style="font-size: 11px;">» <?php echo $news[$i]['title']; ?></a></b>
            <span style="color: black; font-size: 10px;">(<?php echo $news[$i]['date']; ?>)</span>
            <br>

<?php      
         }
         
?>
</p>
              </div>
      <div class="left-down"></div>
      <!-- End News -->
<?php
         
     }
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

