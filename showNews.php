<?php
include_once 'config/config.php';
if(isset($_GET['nid']) && ($_GET['nid'] + 0) > 0)
{
    $news = getOnePlanAndNews($_GET['nid']);
    if($news)
    {
        $news['date'] = pdate('d F Y', $news['date']);
        $news['text'] = htmlCoding($news['text'], 2);
        addViewNewsCounter($news['id']);
        $gallery = getGalleryWithCatIDAndGfromidWithStatusAndCount(1, $news['id'], 1, 0, 4);
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
                <span class="formHead" style="font-size: 18px;"><?php echo $news['title']; ?></span>
                <span style="color: black; font-family: Tahoma; font-size: 12px;">
                    <img src="<?php echo $uri; ?>/images/date.png" alt="date.png" style="margin-top: 3px;"> <?php echo $news['date']; ?>
                    <img src="<?php echo $uri; ?>/images/view.png" alt="date.png" style="margin-top: 3px;"> بازدید: <?php if($news['view'] > 0){$news['view'] = number_format($news['view']);}; echo $news['view']; ?>
                </span>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="justify" valign="middle" dir="rtl">
                    <div class="pageContent" style="min-height: 300px;">
                        <?php echo $news['text']; ?>
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
                        <a href="showGallery?gFromID=<?php echo $news['id']; ?>&catID=1"><img src="<?php echo $uri; ?>/images/gallery/thumb/<?php echo $gallery[$i]['image']; ?>" alt="<?php echo $news['title']; ?>" class="thumbGallery"></a>
                    <?php } ?>
                </span>
                </td>
            </tr>
        </table>
        <?php } ?>
        
      <!-- End Information -->
      </div>
      <div class="down">
        <div style="color: black; font-family: Tahoma; font-size: 11px; cursor: pointer; float: left; margin-left: 30px;" onclick="history.back(-1);">بازگشت...</div>
      </div>
      
<?php

include 'footer.php';

?>
