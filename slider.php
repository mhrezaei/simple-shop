<?php $slideshow = DatabaseHandler::GetAll("SELECT * FROM `slideshow` LIMIT 5; "); ?>

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

<div class="container" style="margin-top: 20px;">

    <!-- Slider -->
    <?php if (count($slideshow)){ ?>
        <style>
            #panes div, #panes img{
                width: 100% !important;
            }
        </style>
        <div class="home-slider home-left-slider home-full-slider" style="width: 100%;">
            <div class="inner">
                <div class="slide" style="width: 100% !important;">
                    <div id="feature" style="width: 100% !important;">
                        <div id="panes" style="width: 100% !important; border: 1px solid #480DB1;">
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

</div>