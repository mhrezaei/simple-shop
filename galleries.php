<?php
include_once 'config/config.php';

//////// news gallery ////////
$gaNews = DatabaseHandler::GetAll("SELECT *
FROM `gallery`
WHERE `catID` =1
AND `status` =1
GROUP BY `gForID`
ORDER BY `id` DESC");

if($gaNews)
{
    $gan = 1;
}
else
{
    $gan = 2;
}
//////// news gallery ////////

//////// plan gallery ////////
$gaPlan = DatabaseHandler::GetAll("SELECT *
FROM `gallery`
WHERE `catID` =2
AND `status` =1
GROUP BY `gForID`
ORDER BY `id` DESC");

if($gaPlan)
{
    $gap = 1;
}
else
{
    $gap = 2;
}
//////// plan gallery ////////

//////// other gallery ////////
$gaOther = DatabaseHandler::GetAll("SELECT *
FROM `gallery`
WHERE `catID` =3
AND `status` =1
GROUP BY `gForID`
ORDER BY `id` DESC");

if($gaOther)
{
    $gao = 1;
}
else
{
    $gao = 2;
}
//////// other gallery ////////

if($gan == 1 || $gap == 1 || $gao == 1)
{
    $msg = 1;
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
    $(document).ready(function(){
        $(".galleryObject").mouseenter(function(){
            $(this).fadeOut(200).fadeIn(100);
            $(".showShadow", this).fadeToggle(500);
        })
        .mouseleave(function(){
            $(".showShadow", this).fadeToggle(500);
        })
    });
function changeLocation(gfor, cat)
{
    window.location = "showGallery?gFromID=" + gfor + "&catID=" + cat;
}    
</script>
  <!-- Center -->
      <div class="up"></div>
      <div class="center registerPage">
      <!-- Information -->

      <table width="800" align="center" dir="rtl">
            <tr>
                <td colspan="3" width="100%" height="60" align="right" valign="middle" dir="rtl">
                <span class="formHead" style="font-size: 18px;">گالری تصاویر</span>
                </td>
            </tr>
            
            <?php if($gap == 1){ ?>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><hr /></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><span class="formSub">آلبوم تصاویر طرح ها...</span></td>
            </tr>
            
            
            <tr>
                <td colspan="3" width="100%" align="justify" valign="middle" dir="rtl">
                    <div class="pageContent">
            <?php for($i = 0; $i < count($gaPlan); $i++){ ?>        
                    <div class="galleryObject" onclick="changeLocation('<?php echo $gaPlan[$i]['gForID']; ?>', '<?php echo $gaPlan[$i]['catID']; ?>');">
                        <div style="margin: 0 auto; width: 190px; position: absolute; font-family: 'Yekan';"><?php echo $gaPlan[$i]['title']; ?></div>
                        <div style="width: 150px; height: 100px; margin: 0 auto; margin-top: 40px; margin-right: 20px; position: absolute; border: 1px solid black; background: url('<?php echo $uri; ?>/images/gallery/thumb/<?php echo $gaPlan[$i]['image']; ?>');" id="sss">
                            <div style="width: 150px; height: 65px; background: black; opacity: 0.50; filter: alpha(opacity = 50); display: none; color: yellow; margin: 0 auto; text-align: center; font-family: 'Yekan'; padding-top: 35px; font-size: 12px;" class="showShadow">برای نمایش تصاویر کلیک نمائید</div>
                        </div>
                    </div>

            <?php } ?>
                    </div>
                </td>
            </tr>
            
            <?php } ?>
            
            
            <?php if($gan == 1){ ?>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><hr /></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><span class="formSub">آلبوم تصاویر اخبار...</span></td>
            </tr>
            
            <tr>
                <td colspan="3" width="100%" align="justify" valign="middle" dir="rtl">
                    <div class="pageContent">
            <?php for($i = 0; $i < count($gaNews); $i++){ ?>        
                    <div class="galleryObject" onclick="changeLocation('<?php echo $gaNews[$i]['gForID']; ?>', '<?php echo $gaNews[$i]['catID']; ?>');">
                        <div style="margin: 0 auto; width: 190px; position: absolute; font-family: 'Yekan';"><?php echo $gaNews[$i]['title']; ?></div>
                        <div style="width: 150px; height: 100px; margin: 0 auto; margin-top: 40px; margin-right: 20px; position: absolute; border: 1px solid black; background: url('<?php echo $uri; ?>/images/gallery/thumb/<?php echo $gaNews[$i]['image']; ?>');" id="sss">
                            <div style="width: 150px; height: 65px; background: black; opacity: 0.50; filter: alpha(opacity = 50); display: none; color: yellow; margin: 0 auto; text-align: center; font-family: 'Yekan'; padding-top: 35px; font-size: 12px;" class="showShadow">برای نمایش تصاویر کلیک نمائید</div>
                        </div>
                    </div>

            <?php } ?>
                    </div>
                </td>
            </tr>
            
            <?php } ?>
            
            
            
            <?php if($gao == 1){ ?>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><hr /></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><span class="formSub">سایر آلبوم تصاویر ...</span></td>
            </tr>
            
            
            
            <tr>
                <td colspan="3" width="100%" align="justify" valign="middle" dir="rtl">
                    <div class="pageContent">
            <?php for($i = 0; $i < count($gaOther); $i++){ ?>        
                    <div class="galleryObject" onclick="changeLocation('<?php echo $gaOther[$i]['gForID']; ?>', '<?php echo $gaOther[$i]['catID']; ?>');">
                        <div style="margin: 0 auto; width: 190px; position: absolute; font-family: 'Yekan';"><?php echo $gaOther[$i]['title']; ?></div>
                        <div style="width: 150px; height: 100px; margin: 0 auto; margin-top: 40px; margin-right: 20px; position: absolute; border: 1px solid black; background: url('<?php echo $uri; ?>/images/gallery/thumb/<?php echo $gaOther[$i]['image']; ?>');" id="sss">
                            <div style="width: 150px; height: 65px; background: black; opacity: 0.50; filter: alpha(opacity = 50); display: none; color: yellow; margin: 0 auto; text-align: center; font-family: 'Yekan'; padding-top: 35px; font-size: 12px;" class="showShadow">برای نمایش تصاویر کلیک نمائید</div>
                        </div>
                    </div>

           <?php } ?>
                    </div>
                </td>
            </tr>
            <?php } ?>
            
        </table>

      <!-- End Information -->
      </div>
      <div class="down"></div>
      
<?php

include 'footer.php';

?>
