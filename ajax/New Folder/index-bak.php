<?
$_GET[Current] = $Current ;
if($_GET[Page]) $_GET[Page]-- ; 
include_once("aGlobals.php") ; 


//Service Active:
$Overall = gSettings("ServiceActive")  ;
if(!$Overall && !gIsAdmin()) {
	//include_once("pending.php") ; 
	die() ; 
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="aStyle.css" type="text/css" />



<meta name="title" content="<?=gSettings("ServiceTitle")?>" />

<script type="text/javascript" src="aJava.js"></script>
<!--<script type="text/javascript" src="aAjax.js"></script>-->

<!--<link rel="stylesheet" type="text/css" href="stickytooltip.css" />	-->


<title><?=gSettings("ServiceTitle")?></title>
</head>

<body style="background-color:#FFFFFF">
<script>var DHTML = (document.getElementById || document.all || document.layers); function ap_getObj(name) { if (document.getElementById) { return document.getElementById(name).style; } else if (document.all) { return document.all[name].style; } else if (document.layers) { return document.layers[name]; } } function ap_showWaitMessage(div,flag) { if (!DHTML) return; var x = ap_getObj(div); x.visibility = (flag) ? 'visible':'hidden' ;if(! document.getElementById) if(document.layers) x.left=280/2; return true; }</script>

<div id="waitDiv" style="POSITION:absolute;TOP: 90;RIGHT:100;TEXT-ALIGN:center; visibility:hidden;">
<img alt="لطفا چند لحظه صبر كنيد" src="Images/loading.gif" border="0"></div>
<SCRIPT>ap_showWaitMessage('waitDiv', 1)</SCRIPT>




<!-- form -->

<table width="750" align="center" dir="rtl" border="0"><tr><td>
	<? include_once("client.php") ; ?>
</td></tr></table>

<!-- /form -->

					





<SCRIPT>ap_showWaitMessage('waitDiv', 0) </SCRIPT>
</body></html>
