<?php
  
/////////////////////////////////// about
$aboutMsg = '';
$page = DatabaseHandler::GetRow("SELECT * FROM `pages` WHERE `id` = 3 AND `status` = 1");
if($page)
{
    $aboutMsg = 1;
    $page['text'] = htmlCoding($page['text'], 2);
}
/////////////////////////////////// about

  
?>

<?php if($aboutMsg == 1){ ?>
      <!-- Information -->
      <div class="left-up"></div>
       <div class="left-center1">
       <img src="images/line1.png" class="titr" />
       <div class="indexContent"><br /><br>
       <?php echo $page['text']; ?>

<a href="<?php echo $uri; ?>/about" style="float: left;">ادامه...</a>
       </div>
       </div>
      <div class="left-down"></div>
      <!-- End Information -->
      <?php } ?>
