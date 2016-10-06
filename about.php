<?php
include_once 'config/config.php';

$page = DatabaseHandler::GetRow("SELECT * FROM `pages` WHERE `id` = 1 AND `status` = 1");
if($page)
{
    $page['title'] = htmlCoding($page['title'], 2);
    $page['text'] = htmlCoding($page['text'], 2);
}
else
{
    header('location: index');
}

include 'header.php';
//register

?>

  <!-- Center -->
      <div class="up"></div>
      <div class="center registerPage">
      <!-- Information -->
      <br />
      <table width="800" align="center" dir="rtl">
            <tr>
                <td colspan="3" width="100%" height="60" align="right" valign="middle" dir="rtl"><span class="formHead"><?php echo $page['title']; ?></span></td>
            </tr>
            <tr>
                <td colspan="3" width="100%" align="justify" valign="middle" dir="rtl">
                    <div class="pageContent">
                        <?php echo $page['text']; ?>
</p><br><br>


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
