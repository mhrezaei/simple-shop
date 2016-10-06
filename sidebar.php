<?php

$plan = DatabaseHandler::GetRow("SELECT * FROM `plans` WHERE `status` = 1 ORDER BY `id` DESC ;");
if($plan)
{
    if(time() > $plan['dateEnd'])
    {
        $d = 100;
    }
    else
    {
        $t = ($plan['dateEnd'] - $plan['dateStart']) / 86400;
        $tt = ((time() - $plan['dateStart']) / 86400);
        $d = (100 / $t) * $tt;
    }


?>

<div id="block1">
       <p class="supportTitle">
        <a href="showPlan?pid=<?php echo $plan['id']; ?>" title="<?php echo $plan['title']; ?>"><?php echo $plan['title']; ?></a>
       </p>
       <a href="showPlan?pid=<?php echo $plan['id']; ?>" title="<?php echo $plan['title']; ?>">
        <img src="images/upload/<?php echo $plan['miniPic']; ?>" border="0" class="icon" style="margin-right: 10px;" alt="<?php echo $plan['title']; ?>" />
       </a>
       <div style="font-family: Tahoma; font-size: 12px; margin-right: 15px; margin-top: 10px;">مقدار پیشرفت طرح:</div>
       <!-- Progress bar -->
    <div id="progress_bar" class="ui-progress-bar ui-container" style="width: 230px; margin-right: 10px; margin-top: 15px;">
    <span class="ui-label">
        <b class="value" style="font-size: 16px; line-height: 20px; float: right;">0%</b>
    </span>
      <div class="ui-progress" style="width: 0%; margin-right: -2px;">
        
      </div>
    </div>
    <!-- /Progress bar -->
      </div>
      
<script type="text/javascript" src="<?php echo $uri; ?>/script/progress.js"></script>
<script type="text/javascript">
$(function() {
  // Hide the label at start
  $('#progress_bar .ui-progress .ui-label').hide();
  // Set initial value
  $('#progress_bar .ui-progress').css('width', '0%');

  // Simulate some progress
  $('#progress_bar .ui-progress').animateProgress(<?php echo $d; ?>, function(){});
  
});
</script>

<?php

}

?>

<!-- Support -->
      <div id="block2">
        <div class="block2Content">
            <form action="login.php?action=Login" method="post" name="frmLogin">
                <table width="235" align="center">
                    <tr>
                        <td width="55" height="25" valign="middle" align="right"><span style="font-family: Tahoma; font-size: 12px;">نام کاربری: </span></td>
                        <td width="180" height="25" valign="middle" align="center"><input type="text" name="txtUserName" class="txtInputLogin" /></td>
                    </tr>
                    <tr>
                        <td width="55" height="25" valign="middle" align="right"><span style="font-family: Tahoma; font-size: 12px;">رمز عبور: </span></td>
                        <td width="180" height="25" valign="middle" align="center"><input type="password" name="txtPassWord" class="txtInputLogin" /></td>
                    </tr>
                    <tr>
                        <td width="235" height="35" valign="middle" align="left" colspan="2">
                            <a class="btn" onclick="document.frmLogin.submit();">ورود</a>
                            <? if(isset($x)){ ?>
                            <div style="color: red; font-size: 11px; padding-top: 5px;">نام کاربری/رمز عبور صحیح نمی باشد.</div>
                            <? } ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="235" height="20" valign="middle" align="right" colspan="2"><a href="login.php?action=Fpassword">رمز را فراموش کردید؟</a></td>
                    </tr>
                </table>
            </form>
        </div>
      </div>
      
      <!-- End Support -->
      <!-- Design -->