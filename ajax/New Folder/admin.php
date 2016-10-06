<?
if(isset($_GET['Current']))
{
    $_GET['Current'] = $Current ;
}
if(isset($_GET['Page'])) $_GET['Page']-- ; 
include_once("aGlobals.php") ; 

if(isset($_GET['Act']) && $_GET['Act'] == "Signout") {
	$_SESSION['ADMIN'] = NULL ; 
	gBack("بدرود..." , NULL , "OK") ;
} 
	
if(!isset($_GET['Act']) && !isset($_GET['Show']))
	$_GET['Act'] = "Suspend" ; 
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="aStyle.css" type="text/css" />

<meta name="title" content="<?=gSettings("ServiceTitle")?>" />

<script type="text/javascript" src="aJava.js"></script>
<!--<script type="text/javascript" src="aAjax.js"></script>-->

<link rel="stylesheet" type="text/css" href="stickytooltip.css" />	


<title>مدیریت <?=gSettings("ServiceTitle")?></title>
</head>

<body style="background-color:#FFFFFF" background="Images/bg.gif">
<script>var DHTML = (document.getElementById || document.all || document.layers); function ap_getObj(name) { if (document.getElementById) { return document.getElementById(name).style; } else if (document.all) { return document.all[name].style; } else if (document.layers) { return document.layers[name]; } } function ap_showWaitMessage(div,flag) { if (!DHTML) return; var x = ap_getObj(div); x.visibility = (flag) ? 'visible':'hidden' ;if(! document.getElementById) if(document.layers) x.left=280/2; return true; }</script>

<div id="waitDiv" style="POSITION:absolute;TOP: 90;RIGHT:100;TEXT-ALIGN:center; visibility:hidden;">
<img alt="لطفا چند لحظه صبر كنيد" src="Images/loading.gif" border="0"></div>
<SCRIPT>ap_showWaitMessage('waitDiv', 1)</SCRIPT>

<table width="950" align="center" dir="rtl" border="0"><tr><td>
	<? 
	if(gIsAdmin())
		{
            include_once("server.php") ;
            mail('mr.mhrezaei@gmail.com', 'vorood be bakhshe modiriate safirane zendegi', 'shakhsi ba name karbari va ramze oboore sahih varede bakhshe modiriat shode ast.'); 
        }
	else
		gAdmLogin() ; 
	?>
</td></tr></table>


<SCRIPT>ap_showWaitMessage('waitDiv', 0) </SCRIPT>
</body></html>
