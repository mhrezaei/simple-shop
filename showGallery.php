<?php
include_once 'config/config.php';
if(isset($_GET['gFromID']) && isset($_GET['catID']) && ($_GET['gFromID'] + 0) > 0 && ($_GET['catID'] + 0) > 0)
{
    $gallery = getGalleryWithCatIDAndGfromidWithStatusAndCount($_GET['catID'], $_GET['gFromID'], 1, 0, 1000);
    if($gallery)
    {
        
    }
    else
    {
        header('location: index');
        exit;
    }
}
else
{
    header('location: index');
    exit;
}

include 'header.php';
//register

?>
<script type="text/javascript">
jQuery(window).load(function() {
    jQuery('#featured').orbit({
                             animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
                             animationSpeed: 1000,                // how fast animtions are
                             timer: true,              // true or false to have the timer
                             advanceSpeed: 8000,          // if timer is enabled, time between transitions 
                             pauseOnHover: true,          // if you hover pauses the slider
                             startClockOnMouseOut: true,      // if clock should start on MouseOut
                             startClockOnMouseOutAfter: 100,      // how long after MouseOut should the timer start again
                             directionalNav: true,          // manual advancing directional navs
                             captions: true,              // do you want captions?
                             captionAnimation: 'fade',          // fade, slideOpen, none
                             captionAnimationSpeed: 1000,      // if so how quickly should they animate in
                             bullets: true,             // true or false to activate the bullet navigation
                             bulletThumbs: false,         // thumbnails for the bullets
                             bulletThumbLocation: '',         // location from this file where thumbs will be
                             afterSlideChange: function(){}      // empty function 
                        });
});
</script>
  <!-- Center -->
      <div class="up"></div>
      <div class="center registerPage">
      <!-- Information -->

      <table width="800" align="center" dir="rtl">
            <tr>
                <td colspan="3" width="100%" height="60" align="right" valign="middle" dir="rtl">
                <span class="formHead" style="font-size: 18px;">گالری تصاویر <?php echo $gallery[0]['title']; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="justify" valign="middle" dir="rtl">
                    <div class="pageContent" style="margin-top: 20px; min-height: 600px;">
                        

                        <div class="slider">
        
        <div id="featured">
            <?php for($i = 0; $i < count($gallery); $i++){ ?>
                <img src="<?php echo $uri; ?>/images/gallery/orginal/<?php echo $gallery[$i]['image']; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" />
            <?php } ?>

        </div>
    
    
    
    </div>


                    </div>
                </td>
            </tr>
        </table>

      <!-- End Information -->
      </div>
      <div class="down">
        <div style="color: black; font-family: Tahoma; font-size: 11px; cursor: pointer; float: left; margin-left: 30px;" onclick="history.back(-1);">بازگشت...</div>
      </div>
      
<?php

include 'footer.php';

?>
