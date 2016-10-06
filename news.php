<?php
     $news = DatabaseHandler::GetAll("SELECT * FROM `news` WHERE `status` = 1 ORDER BY `id` DESC LIMIT 0 , 5");
     if($news)
     {
         
?>
<div class="left-up"></div>
<div class="left-center2">
    <img src="images/line2.png" class="titr" />
    <p class="indexContent">
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
      <div class="left-down">
        <div style="color: black; font-family: Tahoma; font-size: 11px; float: left; margin-left: 20px;"><a href="newsArchive">آرشیو اخبار...</a></div>
      </div>
      <!-- End News -->
<?php
         
     }
 ?>