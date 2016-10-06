<?php
include_once 'config/config.php';

$plan1 = getAllPlanWithstatus(1);
if($plan1)
{
    $isPlan1 = 1;
}
else
{
    $isPlan1 = 2;
}

$plan2 = getAllPlanWithstatus(2);
if($plan2)
{
    $isPlan2 = 1;
}
else
{
    $isPlan2 = 2;
}

if($isPlan1 == 2 && $isPlan2 == 2)
{
    header("location: index;");
    exit;
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
                <span class="formHead" style="font-size: 18px;">طرح ها</span>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="justify" valign="middle" dir="rtl">
                    <div class="pageContent" style=" margin-top: 20px; min-height: 500px;">
                        
                        
                        <?php if($isPlan1 == 1){ ?>
                        <?php for($i = 0; $i < count($plan1); $i++){ ?>
                        <div style="width: 100%; height: 100px; margin-bottom: 10px;">
                            <div style="float: right; width: 150; height: 98px; margin-right: 1px; margin-top: 1px;">
                                <img src="<?php echo $uri; ?>/images/upload/<?php echo $plan1[$i]['miniPic']; ?>" alt="<?php echo $plan1[$i]['title']; ?>" width="150" height="98">
                            </div>
                            <div style="width: 635px; height: 90px; float: right; margin-top: 5px; margin-right: 10px;">
                                <span>
                                    <a href="showPlan?pid=<?php echo $plan1[$i]['id']; ?>" style="font-size: 14px;"><?php echo $plan1[$i]['title']; ?></a>
                                </span>
                                <div style="margin-right: 10px; font-size: 11px; height: 20px;">وضعیت طرح: <b>درحال اجرا</b></div>
                                <div style="margin-right: 10px; font-size: 11px; height: 20px;">شروع طرح: <b><?php echo pdate('d F Y', $plan1[$i]['dateStart']); ?></b> - پایان طرح: <b><?php echo pdate('d F Y', $plan1[$i]['dateEnd']); ?></b></div>
                                <div style="margin-right: 10px; font-size: 11px; height: 20px;">تعداد بازدید: <b><?php echo $plan1[$i]['view']; ?></b></div>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <hr />
                        <?php } ?>
                        <?php } ?>
                        
                        <?php if($isPlan2 == 1){ ?>
                        <?php for($i = 0; $i < count($plan2); $i++){ ?>
                        <div style="width: 100%; height: 100px; margin-bottom: 10px;">
                            <div style="float: right; width: 150; height: 98px; margin-right: 1px; margin-top: 1px;">
                                <img src="<?php echo $uri; ?>/images/upload/<?php echo $plan2[$i]['miniPic']; ?>" alt="<?php echo $plan2[$i]['title']; ?>" width="150" height="98">
                            </div>
                            <div style="width: 635px; height: 90px; float: right; margin-top: 5px; margin-right: 10px;">
                                <span>
                                    <a href="showPlan?pid=<?php echo $plan2[$i]['id']; ?>" style="font-size: 14px;"><?php echo $plan2[$i]['title']; ?></a>
                                </span>
                                <div style="margin-right: 10px; font-size: 11px; height: 20px;">وضعیت طرح: <b>تمام شده است.</b></div>
                                <div style="margin-right: 10px; font-size: 11px; height: 20px;">شروع طرح: <b><?php echo pdate('d F Y', $plan2[$i]['dateStart']); ?></b> - پایان طرح: <b><?php echo pdate('d F Y', $plan2[$i]['dateEnd']); ?></b></div>
                                <div style="margin-right: 10px; font-size: 11px; height: 20px;">تعداد بازدید: <b><?php echo $plan2[$i]['view']; ?></b></div>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <hr />
                        <?php } ?>
                        <?php } ?>
                        
                        
                    </div>
                </td>
            </tr>
        </table>

      <!-- End Information -->
      </div>
      <div class="down"></div>
      
<?php

include 'footer.php';

?>
