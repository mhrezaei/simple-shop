<?
session_start() ; 


include_once("aSQL.php") ; 
include_once("aPdate.php") ;
include_once("aDateT.php") ;
include_once("aForms.php") ;

gInitialize() ; 

//=================================================================
function gInitialize()  
{


}

//================================================================
function gIsAdmin() 
{
	if(isset($_SESSION['ADMIN']['Logged'])) return true ; 
}

//================================================================
function gIsFromLocal($URL=NULL)
{	
	//return true ; 
	if(!$URL) $URL = $_SERVER['HTTP_REFERER'] ; 
	$AllowedDomain = gSettings("AllowedDomain") ; 
	
	if(!strstr($URL , "http")) return true ; 
	
	if(strstr($URL , "435.ir") || strstr($URL , 'localhost')) 
		return true ; 
	else 
		return false ; 

}

//=================================================================
function gArryShower($Data) 
{
	?><pre dir="ltr"><?
	print_r($Data) ; 
	?></pre><?
}

//* * * * * * * * * * * * * * * * * * * * * * *
//
// 		General View Functions 
//
//* * * * * * * * * * * * * * * * * * * * * * *

//===========================================================						INTACT **************
function gUrl_Get()
{
	$Ans = $_SERVER['PHP_SELF'] ; 
	if(isset($_SERVER['argv'][0])) 
		$Ans .= "?".$_SERVER['argv'][0] ;

	return $Ans ; 
}

//===========================================================						INTACT **************
function gUrl_Extender($URL=NULL)
{
	if(!$URL) $URL = gUrl_Get() ;
	
	if(strstr($URL,"?")) 
		return "&" ;
	else
		return "?" ;

}

//===========================================================						INTACT **************
function gUrl_StripGet($Get="Page" , $URL=NULL)
{
	//Preparetions...
	if(!$URL) $URL = gUrl_Get() ; 
    if(isset($_GET['Page']))
    {
        $xx = $_GET['Page'];
    }
    else
    {
        $xx = '';
    }
	if($Get=="Page")
    {
        $Value = $xx + 1 ;
    }
    else
    {
        if(isset($_GET[$Get]))
        {
            $yy = $_GET[$Get];
        }
        else
        {
            $yy = '';
        }
        $Value   =  $yy; // Exceptions
    }
	$URL = urldecode($URL) ; 
	
	//Action...
	$Phrase = $Get."=".$Value ; 
    $URL = str_replace("\?".$Phrase."&" , "?" , $URL) ; 
	//$URL = ereg_replace("\?".$Phrase."&" , "?" , $URL) ; 
    $URL = str_replace("&".$Phrase."&" , "&" , $URL) ; 
	//$URL = ereg_replace("&".$Phrase."&" , "&" , $URL) ; 
    $URL = str_replace("&".$Phrase.""  , ""  , $URL) ; 
	//$URL = ereg_replace("&".$Phrase.""  , ""  , $URL) ; 
    $URL = str_replace("\?".$Phrase.""  , ""  , $URL) ; 
	//$URL = ereg_replace("\?".$Phrase.""  , ""  , $URL) ; 
    $URL = str_replace($Phrase , "" , $URL) ; 
	//$URL = ereg_replace($Phrase , "" , $URL) ; 

	return $URL ; 
}


//===========================================================						INTACT **************
function gLinkBox($Caption , $Link=NULL , $Icon="tiny_star" , $Style=NULL) 
{
	if($Caption==1) {
		?><table width="95%" align="center" border="0" cellpadding="3" cellspacing="0"><?
	}
	elseif(!$Caption) {
		?></table><?
	}
	else{
		?>
		<tr valign="top" style="line-height:1.6">
			<td width="20" align="center"><? gInsertGif($Icon , $Link , urldecode($Link) , $Style) ; ?></td>
			<td><? gInsertLink($Caption , $Link , urldecode($Link) , $Style) ; ?></td>
		</tr>
		<?
	}
}

//===========================================================						INTACT **************
function gFeedback($Caption=NULL , $Mode="Error") 
{

	//preparetions...
	$_GET['ERR'] = false ; 
	if(!$Caption) {
		$Caption = $_SESSION['A']['Feedback'] ; 
		$Mode    = $_SESSION['A']['FeedMode'] ;
		$_SESSION['A']['Feedback'] = $_SESSION['A']['FeedMode'] = NULL ; 
	}
	if(!$Caption) return ; //safety 
	
	switch($Mode) {
		case "Forbidden" : 
			$Logo  = "feed_forbidden" ; 
			$Color = "#FFB9B9" ; 
			$_GET['ERR'] = true ; 
			break ;
		case "Error" :
			$Logo = "feed_cross" ; 
			$Color = "#FFB9B9" ; 
			$_GET['ERR'] = true ; 
			break ; 
		case "ok" :
		case "OK" :
			$Logo = "feed_tick" ;
			$Color = "#C0FFB0" ; 
			break ; 
		default:
			return ; 
	}
	$RandomCode = time() ; 
	
	//Showing...

	?><div id="Feedback2_<?=$RandomCode?>"><br />
	<table width="500" border="0" cellpadding="5" cellspacing="0" bgcolor="<?=$Color?>" align="center" 
	style="cursor:pointer" onclick="$$('Feedback2_<?=$RandomCode?>').innerHTML=''">
		<tr style="font-weight:bold;font-size:12px" valign="top">
			<td width="50"><? gInsertGif($Logo) ?></td>
			<td align="right"><?=gPureText($Caption)?><? gFeedback_MultiErrors() ?></td>
		</tr>
		
	</table>
	<br /></div><?
			

}

//---------------------------------------
function gFeedback_MultiErrors()
{
	$Data = $_SESSION['A']['MultiError'] ; 
	$_SESSION['A']['MultiError'] = NULL ; 
	
	for($i=1 ; $i<=99 ; $i++) {
		if(trim($Data[$i])) {
			?><div align="justify" style="color:#000000;font-size:11px;font-weight:normal">
				× <?=gPureText($Data[$i])?>
			</div><?
		}
		else break ; 
	}
	
}

//===========================================================						INTACT **************
function gPageSelector( $TotalRec , $MaxPerPage=0 , $Title = "صفحه:" )
{	
	$PageURL = gUrl_StripGet() ; 

	if(!$MaxPerPage) $MaxPerPage = gSettings("View_MaxRecords") + 0 ; 
	if(!$TotalRec || !$MaxPerPage) return ; 

	$TotalPage = ceil($TotalRec / $MaxPerPage) ;
	if( $TotalPage <= 1 ) return ;
	
	if(strstr($PageURL,"?")) 
		$AddChar = "&" ;
	else
		$AddChar = "?" ;

	?><font style="font-size:10px"><?=gPureText($Title)?>&nbsp;</font><?
	for( $I = 1 ; $I <= $TotalPage ; $I++ ) {
		if( $_GET[Page] == $I-1 ) {
				?><font color="#FF0000" style="font-size:11px"><b><?=gPureText($I)?></b><?
		}
		else {
			?>
			<a href="<?=$PageURL.$AddChar."Page=".$I?>" style="text-decoration:none;font-size:11px"><?=gPureText($I)?></a>
			<?
		}
		echo "." ;
	}
	if( $_GET[Page]+1 > $TotalPage ) {
		?><font color="#FF0000" style="font-size:11px"><b>&nbsp;آخر&nbsp;</b><?
	}
	
	echo "<br/><br/>" ; 
	return $TotalPage ;

}



//============================================================								// INTACT **************
function gInsertTitle( $Title , $Size = 12 , $Color="black" , $Additional=NULL , $Style=NULL) 
{
	$Title = gPureText($Title) ; 
	
	if(!$Title) return ; 
	
	?>
	<p <?=strstr($Style,"C")?"align=center":"align:right" ?> >
		<font color="<?=$Color?>" style="font-size:<?=$Size?>px;<?=$Additional?>"><b><?=$Title?></b></font>
	</p>
	<?
}

//============================================================						INTACT **************
function gInsertLink($Caption , $Target=NULL , $Hint=NULL , $Opt=NULL) 
{
    $Exlink = '';
    if(strstr($Opt , "E")) $PureSwitch = "E" ; else $PureSwitch = NULL ; 
	
	$Caption = urldecode(gPureText($Caption , "Text" , $PureSwitch)) ; 
	$Hint    = urldecode(gPureText($Hint , "Text" , $PureSwitch))    ;  
	if(strstr($Target , "javascript:") || strstr($Target , "(") ) {
        $OnClick = str_replace("javascript:" , NULL , $Target ) ; 
		//$OnClick = ereg_replace("javascript:" , NULL , $Target ) ; 
		$Target = NULL ;
	}
	
	if(strstr($Target,"http")) $Opt .= "X" ; 
	
	if(strstr($Opt,"B")) $Style .= ";font-weight:bold" ; 
	if(strstr($Opt,"9")) $Style .= ";font-size:9px" ;
	if(strstr($Opt,"n")) echo "<br>" ;
	if(strstr($Opt,"X")) $Exlink = 'target="_blank"' ;
	if(strstr($Opt,"s")) $Style .= ";line-height:1.3" ;  
	if(!$Target && !$OnClick) $Style .= ";cursor:default" ;
	if(!$Target) $Target = "javascript:void(0)" ; 
	
	?><a href="<?php echo $Target; ?>" title="<?php echo $Hint; ?>" style=" <?php echo $Style; ?>" <?php echo $Exlink; ?> onclick="<?php echo $OnClick; ?>"><?php echo $Caption; ?></a><?
}

//=============================================================						INTACT **************
function gInsertGif($Filename="NOFILE" , $Target=NULL , $Hint=NULL , $vspace=0 , $Opt=NULL , $ObjID=NULL)
{
	$W = '';
    $H = '';
    if(strstr($Opt , "E")) $PureSwitch = "E" ; else $PureSwitch = NULL ; 

	$Hint = gPureText($Hint , "Text" , $PureSwitch) ; 
	if(!$Hint) $Hint = urldecode($Target) ; 
	if(strstr($Target , "javascript:") || strstr($Target , "(") ) {
        $OnClick = str_replace("javascript:" , NULL , $Target ) ; 
		//$OnClick = ereg_replace("javascript:" , NULL , $Target ) ; 
		$Target = "javascript:void(0)" ;
		$Hint = NULL ; 
	}
	
	$Filename = "Images/".$Filename ; $Ext = ".gif" ;
	$File = $Filename.$Ext ; 
	if(!file_exists($File)) 
		{$Ext = ".png" ; $File = $Filename.$Ext ; }
	if(!file_exists($File)) 
		{$Ext = ".jpg" ; $File = $Filename.$Ext ; }
	if(!file_exists($File)) 
		$File = "Images/default.gif" ;
		
	$File2 = $Filename."_2".$Ext ; 
	$File3 = $Filename."_3".$Ext ; 
	if(!file_exists($File2)) $File2 = $File ; 
	if(!file_exists($File3)) $File3 = $File2 ; 

	$Dim = '';
    if($W)
		$Dim = " width='$W' " ;
	if($H)
		$Dim .= " height='$H' " ;


	if(!gIsFromLocal($Target)) $Opt .= "X" ; 
	if(strstr($Opt,"X")) $Exlink = 'target="_blank"' ;
	if(strstr($Opt,"n")) { ?><br /><? } ;

	$Exlink = '';
    if(!$Target) {
		?><img src="<?=$File?>" alt="<?=$Hint?>" title="<?=$Hint?>" border="0" vspace="<?=$vspace?>" />&nbsp;<?
	} else {
		?><a href="<?=$Target?>" title="<?=$Hint?>" onclick="<?=$OnClick?>" <?=$Exlink?> id="<?=$ObjID?>"
		    ><img alt="<?=$Hint?>" border="0" alt="+"
			src="<?=$File?>"  onmouseout="this.src='<?=$File?>'" onmouseover="this.src='<?=$File2?>'" 
			onmousedown="this.src='<?=$File3?>'" vspace="<?=$vspace?>" <?=$Dim?> /></a><?
	}
	if($vspace) echo " " ; 
	
	if(strstr($Opt,"s")) gInsertBlank(5);  
;

}

//=============================================================						INTACT **************
function gInvalidPage( $Line1=NULL , $Location=NULL , $Secconds=10)					
{
	if(!$Line1) $Line1    = "مطلبی برای نمایش وجود ندارد." ;
	if(!$Location) $Location = "index.php" ;
	$Secconds = $Secconds * 1000 ; 
	
	if($Location == "CLOSE") 
		$Command = "window.close()" ; 
	elseif($Location=="STAY")
		$Command = NULL ; 
	else 
		$Command = "location.href='$Location';" ;
	
	$Line1 = gPureText($Line1) ; 
	

	//Showing...
	?>
	<br />
	<table width="80%" border="2" bgcolor="#fcf3e5" cellpadding="0" cellspacing="0" align="center" bordercolor="#000000"><tr><td>
		<table width="100%" border="0"  cellpadding="5" cellspacing="0" align="center">
			<tr style="line-height:0.5"><td colspan="2">&nbsp;</td></tr>
			<tr valign="top">
				<td width="50" align="center"><? gInsertGif("warn24") ?></td>
				<td style="color:#CC0033;font-size:12px"><b><?=$Line1?></b></td>
			</tr>
			<tr style="line-height:0.5"><td colspan="2">&nbsp;</td></tr>
		</table>
	</td></tr></table>
	<script language="javascript">setTimeout("<?php echo $Command; ?>", <?php echo $Secconds; ?>) ;</script>
	<?

}

//================================================================						INTACT **************
function gPureText( $Text , $Style = "Text" , $Switches=NULL  ) 
{
	$Style = strtolower($Style) ; 
	$Text = str_replace( "||"  , "AAA" , $Text ) ; 
	
	
	if(!strstr($Switches,"E")) {
		$Text=str_replace("1","۱",$Text);
		$Text=str_replace("2","۲",$Text);
		$Text=str_replace("3","۳",$Text);
		$Text=str_replace("4","۴",$Text);
		$Text=str_replace("5","۵",$Text);
		$Text=str_replace("6","۶",$Text);
		$Text=str_replace("7","۷",$Text);
		$Text=str_replace("8","۸",$Text);
		$Text=str_replace("9","۹",$Text);
		$Text=str_replace("0","۰",$Text);	
	}
	
	
	switch( $Style ) {
		case "number" :
			$Text=str_replace("۱","1",$Text);
			$Text=str_replace("۲","2",$Text);
			$Text=str_replace("۳","3",$Text);
			$Text=str_replace("۴","4",$Text);
			$Text=str_replace("۵","5",$Text);
			$Text=str_replace("۶","6",$Text);
			$Text=str_replace("۷","7",$Text);
			$Text=str_replace("۸","8",$Text);
			$Text=str_replace("۹","9",$Text);
			$Text=str_replace("۰","0",$Text);	
			$Text+=0 ; 
			break ; 
						
		case "convert" : 
            $Text = str_replace( "'" , NULL , $Text) ; 
			//$Text = ereg_replace( "'" , NULL , $Text) ; 
            $Text = str_replace( "==" , NULL , $Text) ; 
			//$Text = ereg_replace( "==" , NULL , $Text) ; 
			$Text = str_replace(" 
" , ".." , $Text ) ; //Contains somthing. it is not empty

		case "users" :
			$Text = strip_tags($Text) ;  
			$Text = trim($Text) ; 
						
		case "special" :
            $Text = str_replace( "[\x5c\]" , NULL , $Text) ; 
			//$Text = ereg_replace( "[\x5c\]" , NULL , $Text) ; 
			$Text = str_replace( "|"  , "‌‌"       , $Text ) ; // contains something. it is not empty
			$Text = str_replace( "ي" , "ی" , $Text ) ; 
			$Text = str_replace( "ك"  , "ک" , $Text ) ;
			$Text = str_replace( "¬"  , "‏" , $Text ) ;
			break ;
			
		case "comment" :
		case "comments":
			$Text = str_replace( "==" , " " , $Text ) ; 
			$Text = str_replace( "|"  , "‌‌"       , $Text ) ; // contains something. it is not empty
			break ;
				
		case "rss"      :
			$Text = str_replace( "|"  , "‌‏"       , $Text ) ; // contains something. it is not empty
			$Text = str_replace( "{{" , "<p>"    , $Text ) ; 
			$Text = str_replace( "}}" , "</p>"   , $Text ) ; 
			$Text = str_replace( "{!" , "<p>",$Text) ; 
			$Text = str_replace( "!}" , "</p>" , $Text ) ; 
			$Text = str_replace( "{#" , "<p>"    , $Text ) ; 
			$Text = str_replace( "#}" , "</p>"   , $Text ) ; 
			$Text = str_replace( "{L" , "<div align='left' dir='ltr'>"    , $Text ) ; 
			$Text = str_replace( "L}" , "</div>"   , $Text ) ; 
			$Text = str_replace( "{_" , "<i>"    , $Text ) ; 
			$Text = str_replace( "_}" , "</i>"   , $Text ) ; 
			$Text = str_replace( "{+" , "<b>"    , $Text ) ; 
			$Text = str_replace( "+}" , "</b>"   , $Text ) ; 
			$Text = str_replace( "{" , "<div><b>"    , $Text ) ; 
			$Text = str_replace( "}" , "</b></div>"   , $Text ) ; 
			$Text = str_replace( "\n" , "<br />"   , $Text ) ;  
			$Text = str_replace(" 
" , "<br />" , $Text ) ; //Contains somthing. it is not empty
			break ; 
		
		case "body"      :
			$Text = str_replace( "*"  , "٭"   , $Text ) ; 
			$Text = str_replace( "-"  , "ـ"   , $Text ) ; 
			$Text = str_replace( "|"  , "‏‌"       , $Text ) ; // contains something. it is not empty
			$Text = str_replace( "{{" , "<br><font color='red' style='font-size:11px;line-height:1.6'><b>"    , $Text ) ; 
			$Text = str_replace( "}}" , "</b></font>"   , $Text ) ; 
			$Text = str_replace( "{!" , "<table width='90%' border='0' cellpadding='0' cellspacing='0' ><tr><td style='text-align:justify;font-size:12px;line-height:1.7'>",$Text) ; 
			$Text = str_replace( "!}" , "</td></tr></table>" , $Text ) ; 
			$Text = str_replace( "{#" , "<div align='center'>"    , $Text ) ; 
			$Text = str_replace( "#}" , "</div>"   , $Text ) ; 
			$Text = str_replace( "{L" , "<div align='left' dir='ltr'>"    , $Text ) ; 
			$Text = str_replace( "L}" , "</div>"   , $Text ) ; 
			$Text = str_replace( "{_" , "<i>"    , $Text ) ; 
			$Text = str_replace( "_}" , "</i>"   , $Text ) ; 
			$Text = str_replace( "{+" , "<b><font style='font-size:11px'>"    , $Text ) ; 
			$Text = str_replace( "+}" , "</font></b>"   , $Text ) ; 
			$Text = str_replace( "{" , "<font color='CC3300' style='font-size:11px'><b>"    , $Text ) ; 
			$Text = str_replace( "}" , "</b></font>"   , $Text ) ; 
			$Text = str_replace( "\n\n" , "<p>"   , $Text ) ; 
			$Text = str_replace( "\n" , "<div style='line-height:0.8'>&nbsp;</div>"   , $Text ) ;  
			$Text = str_replace(" 
" , "<p>" , $Text ) ; //Contains somthing. it is not empty
			break ; 
				
				
		case "text"      :
			$Text = str_replace( "*"  , "٭"   , $Text ) ; 
			$Text = str_replace( "-"  , "ـ"   , $Text ) ; 
			$Text = str_replace( "|"  , "‌‏"       , $Text ) ; // contains something. it is not empty
			$Text = str_replace( "{L" , "<div align='left' dir='ltr'>"    , $Text ) ; 
			$Text = str_replace( "L}" , "</div>"   , $Text ) ; 
			$Text = str_replace( "{_" , "<i>"    , $Text ) ; 
			$Text = str_replace( "_}" , "</i>"   , $Text ) ; 
			$Text = str_replace( "{+" , "<b><font style='font-size:11px'>"    , $Text ) ; 
			$Text = str_replace( "+}" , "</font></b>"   , $Text ) ; 
			$Text = str_replace( "\n\n" , "<p>"   , $Text ) ; 
			$Text = str_replace( "\n" , "<br />"   , $Text ) ;  
			$Text = str_replace(" 
" , "<p>" , $Text ) ; //Contains somthing. it is not empty
			break ; 
		
		case "notice"    : 
			$Text = str_replace( "|" , "‏‌" , $Text ) ; 
			$Text = str_replace( "*" , "<br><font color='#990066'>٭</font> " , $Text ) ; 
//			        , "<p></p><img src='Images/Check.gif' border='0' />" , $Text ) ;
			break ;
	}

	$Text = str_replace( "AAA"  , "|"       , $Text ) ; 
	return trim($Text) ; 
}

//================================================================						INTACT **************
function gCharLimit($String , $Length)
{
	if(strlen($String) > $Length ) {
		$String = substr(trim($String),0,$Length); 
		$String = substr($String,0,strlen($String)-strpos(strrev($String)," "));
		$String = $String.'...';
	}
	return $String ; 
}


//================================================================						INTACT **************
function gInsertBlank($Size=15)
{
	?><img src="Images/blank.png" width="<?=$Size?>" height="1" border="0" /><?
}


//=================================================================								// INTACT **************
function gBack($Notice=NULL , $Page=NULL , $Mode="Error")
{
	if(!$Page) $Page = $_SERVER['HTTP_REFERER'] ;
	//if(!stristr($LastPage , "nivand")) $LastPage = "index.php"  ;   //safety
	
	$_SESSION[A][Feedback] = $Notice ;
	$_SESSION[A][FeedMode] = $Mode ; 
	gRedirect($Page) ; 
	
}


//=================================================================						INTACT **************
function gRedirect( $URL="index.php" )
{
	if($URL=="BACK")
		$URL = $_SERVER['HTTP_REFERER'] ; 

	header("location: $URL");
	die() ; 
}


//=================================================================						INTACT **************
function gEmailCheck($Email , $Required=true) 
{
	$Answer = true ; 
	$Email = trim($Email) ; 

	//Check Presence...
	if( !$Email ) return !$Required ; 

	//Check @ .
	$PosAt  =strpos($Email,"@");
	$PosDot =strpos($Email,".");
	if( $PosAt === false || $PosDot === false ) return false ;
	
	//forbiden characters ...
	if(stristr($Email , " ") || stristr($Email,"www.") || stristr($Email , "!") || stristr($Email,";") ) return false ; 
	
	//Return true
	return $Answer ; 

}

//====================================================================						INTACT **************
function gGreyHint($Caption=NULL , $Link=NULL , $LinkStyle = NULL)				
{
	$Caption = gPureText($Caption) ; 
	
	if($AddContact) {
		$Adress = trim(gSettings("co_Adress")) ;
		$Tel = trim(gSettings("co_Tel")) ;
		if($Adress) $Caption .= "<br>نشانی ما: ".$Adress ;
		if($Tel)    $Caption .= "<br>شماره تماس: ".$Tel ;
	}

	
	if($Caption=="START" || $Caption=="1") {
		?><table width="90%" align="center" border="0" cellpadding="3" 
		cellspacing="0" style="text-align:justify;color:#333333;line-height:1.7;font-size:12px"><?
	}
	elseif($Caption=="FINISH" || $Caption=="0") {
		?></table><?
	}
	elseif($Caption) {
		?>
		<tr valign="top">
			<td width="10">×</td>
			<td align="justify"><? 
				echo $Caption ;
				if($Link) gInsertLink(" (این|جا) " , $Link , "این|جا کلیک کنید" , "9".$LinkStyle) ;
			?></td>
		</tr>
		<?
	}
	
}


//* * * * * * * * * * * * * * * * * * * * * * *
//
// 		General Content Controllers 
//
//* * * * * * * * * * * * * * * * * * * * * * *



//=================================================================						INTACT **************
function gSettings($Serial=NULL) 
{
	$Row = aRecSerial("settings" , $Serial) ; 
	
	if(!$Row['ID']) return -1 ; 
	
	//Style...
	if(strstr($Row['AutoStyle'],"Y") || strstr($Row['AutoStyle'],"N") || strstr($Row['AutoStyle'],"E"))
		$Style = "E" ; 
	else 
		$Style = NULL ; 
	
	//process...
	if($Row['Value2']) 
		$Return = gPureText($Row['Value2'] , "Text" , $Style) ;
	else
		$Return = gPureText($Row['Value'] , "Text" , $Style) ; 
		
	if(strstr($Row['AutoStyle'],"N")) $Return += 0 ; 
		
	//return...
	return $Return ; 
	
}


//=================================================================
function gAdmLogin() 
{
	$Notice = $_SESSION['A']['signin']['Notice'] ; 
	$_SESSION['A']['signin']['Notice'] = NULL ; 
	
	//if(!$_SESSION[A][signin][Nextpage]) $_SESSION[A][signin][Nextpage] = $_SERVER['HTTP_REFERER'] ; 

	gInsertTitle(gSettings("ServiceTitle")." ـ بخش نظارت و مدیریت");
	gFeedback() ; 
	?>
	<form action="do.php" method="post">
	<input name="Command" value="AdminLogin" type="hidden" />
	<table width="617" height="215" cellpadding="20" border="0" background="Images/Signin.jpg" align="center"><tr>
	<td width="80">&nbsp;</td>
	<td valign="top">
	
	<table border="0" cellpadding="5" style="font-size:9px;color:#339933">
	<tr height="30"><td>&nbsp;</td></tr>
	<tr>
		<td><b>نام کاربری</b></td>
		<td><input name="Username" size="40" dir="ltr" /></td>
	</tr>
	<tr>
		<td><b>گذرواژه</b></td>
		<td><input name="Password" size="40" type="password" dir="ltr"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="left"><? fFloatButton2("signin" , "ورود به شبکه") ?></td>
	</tr>
	</table>
	
	</td>
	<td width="30">&nbsp;</td>
	</tr></table>
	</form>
	<?

}

//================================================================
function gToolbar($Total , $Max , $Pos=1 , $Style=NULL) 
{
	if($Pos==1) {
		$valign = "bottom" ; 
	}
	else {
		$valign = "top" ; 
	}
	
	?><table width="95%" align="center" border="0"><tr valign="<?=$valign?>"><?
	if($Pos==1) {
		?>
		<td><? gMultiPages($Total , $Max) ; ?></td>
		<td align="left"><? if(function_exists("LocalToolbar")) LocalToolbar() ?></td>
		<?
	}
	else {
		?>
		<td><? gMultiPages($Total , $Max) ; ?></td>
		<td>&nbsp;</td>
		<?
	}
	?></tr></table><?
	
} 

//================================================================					^^^^^^^^^^ INTACT ^^^^^^^^^^
function gMultiPages($Total , $Max=100) 
{
	$URL = gUrl_StripGet("Page") ; 
	$Caption = "جمعاً $Total رکورد" ; 
	$AddChar = gUrl_Extender($URL)."Page=" ;

	$Pages = ceil($Total / $Max) ;
	
	if(isset($_GET['Page']) && $_GET['Page']>=$Pages) $_GET['Page'] = $Pages - 1 ; 
	if(isset($_GET['Page']))
        {
            $tt = $_GET['Page'];
        }
        else
        {
            $tt = '';
        }
    if($Total>$Max) {
        $First = $tt * $Max + 1 ; 
		$Last  = $First + $Max - 1 ; 
		if($Last>=$Total) $Last = "انتها" ;
		if($First==1) $First = "ابتدا" ;
		$Caption .= " (از $First تا $Last) " ;
	}

		
	$NextPage = $tt + 2 ; 
	$PrevPage = $tt - 0 ; 
	if($NextPage>$Pages) $NextPage = $Pages ; 
	if($PrevPage<1) $PrevPage = 1 ; 

	//Showing...
	?>
	<table border="0" cellpadding="0" cellspacing="0" style="line-height:1.0;font-size:12px;color:#0000CC">
	<tr valign="top"><td><?
	
	if( $Total>$Max) {
		gInsertGif("arrow_first" , $URL , "اولین صفحه") ; 
		gInsertGif("arrow_prev"  , $URL.$AddChar.$PrevPage , "صفحه قبل") ;
	}

	echo gPureText($Caption) ; 
	
	if( $Total>$Max) {
		gInsertGif("arrow_next"  , $URL.$AddChar.$NextPage , "صفحه بعد") ;
		gInsertGif("arrow_end"   , $URL.$AddChar.$Pages , "آخرین صفحه") ; 
	}
	
	?></td></tr></table>
	<?

}


?>
