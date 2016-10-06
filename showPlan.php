<?php
include_once 'config/config.php';
if(isset($_GET['pid']) && ($_GET['pid'] + 0) > 0)
{
    $plan = getOnePlanAndNews($_GET['pid'], 2, 2);
    if($plan)
    {
        if($plan['status'] == 1 || $plan['status'] == 2)
        {
            $st = pdate('d F Y', $plan['dateStart']);
            $stt = pdate('d F Y', $plan['dateEnd']);
            $sttt = pdate('d F Y', $plan['dateGift']);
            if(time() > $plan['dateEnd'])
            {
                $d = 100;
            }
            else
            {
                $t = ($plan['dateEnd'] - $plan['dateStart']) / 86400;
                $tt = ((time() - $plan['dateStart']) / 86400);
                $d = ceil((100 / $t) * $tt);
            }
            addViewPlanCounter($_GET['pid']);
            
            $gallery = getGalleryWithCatIDAndGfromidWithStatusAndCount(2, $plan['id'], 1, 0, 4);
            if($gallery)
            {
                $isGallery = 1;
            }
            else
            {
                $isGallery = 2;
            }
            
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
}
include 'header.php';
//register

?>

  <!-- Center -->
      <div class="up"></div>
      <div class="center registerPage">
      <!-- Information -->

      <table width="800" align="center" dir="rtl">
            <tr>
                <td colspan="3" width="100%" height="60" align="right" valign="middle" dir="rtl">
                <span class="formHead" style="font-size: 18px;"><?php echo $plan['title']; ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="justify" valign="middle" dir="rtl">
                    <div class="pageContent" style="min-height: 500px;">
                        <div style="width: 800px; height: 200px;">
                            <div style="height: 200px; width: 390px; float: right; color: black; font-family: Tahoma; font-size: 12px;">
                                <div style="width: 100%; height: 30px;"></div>
                                <img src="<?php echo $uri; ?>/images/date.png" alt="date" style="margin-top: 8px; margin-left: 5px;">شروع طرح از: <b><?php echo $st; ?></b>
                                <br>
                                <img src="<?php echo $uri; ?>/images/date.png" alt="date" style="margin-top: 8px; margin-left: 5px;">جمع آوری کمک های نقدی تا: <b><?php echo $sttt; ?></b>
                                <br>
                                <img src="<?php echo $uri; ?>/images/date.png" alt="date" style="margin-top: 8px; margin-left: 5px;">پایان طرح تا: <b><?php echo $stt; ?></b>
                                <br>
                                <img src="<?php echo $uri; ?>/images/do.png" alt="do" style="margin-top: 11px; margin-left: 5px;">مقدار پیشرفت طرح: <b>%<?php echo $d; ?></b>
                                <br>
                                <img src="<?php echo $uri; ?>/images/view.png" alt="date" style="margin-top: 11px; margin-left: 5px;">بازدید از این طرح: <b><?php if($plan['view'] > 0){$plan['view'] = number_format($plan['view']);}; echo $plan['view']; ?></b>            
                            </div>
                            
                            <div style="height: 200px; width: 390px; float: left; text-align: center;">
                                <div style="width: 100%; height: 30px;"></div>
                                <?php if($plan['status'] == 1){ ?>
                                    <a href="transactions?pid=<?php echo $plan['id']; ?>"><img src="<?php echo $uri; ?>/images/payonlines.png" alt="payonlines" style="cursor: pointer;" /></a>
                                <?php } ?>
                            </div>
                            
                        </div>
                        <?php echo htmlCoding($plan['text'], 2); ?>
                    </div>
                </td>
            </tr>
        </table>
        
        <?php if($isGallery == 1){ ?>
        <table width="800" align="center" dir="rtl">
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl"><hr /></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl" style="text-align:right;"><span class="formSub" style="font-size:16px; padding-right: 0px;" id="finalTitle">گالری تصاویر</span></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="right" valign="middle" dir="rtl" style="text-align:center">
                <span class="formSub" id="finalPM" style="font-size:18px;">
                    <?php for($i = 0; $i < count($gallery); $i++){ ?>
                        <a href="showGallery?gFromID=<?php echo $plan['id']; ?>&catID=2"><img src="<?php echo $uri; ?>/images/gallery/thumb/<?php echo $gallery[$i]['image']; ?>" alt="<?php echo $plan['title']; ?>" class="thumbGallery"></a>
                    <?php } ?>
                </span>
                </td>
            </tr>
        </table>
        <?php } ?>
       <br>
      <!-- End Information -->
      </div>
      <div class="down">
        <div style="color: black; font-family: Tahoma; font-size: 11px; cursor: pointer; float: left; margin-left: 30px;" onclick="history.back(-1);">بازگشت...</div>
      </div>
      
<?php

include 'footer.php';

?>
