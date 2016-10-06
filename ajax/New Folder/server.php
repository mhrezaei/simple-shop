<?
$Report = '';
if($Report)
	Report() ; 
else
	Frame() ; 


//======================================================================================
function Frame() 
{
	//preparetions...
	if(isset($_GET['Show']))
		$Function = "Show" ; 
	else 
		$Function = "Browse" ; 

	//actions...
	?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr valign="top"><td style="line-height:1.0"><? Menu1() ?></td></tr>
		<tr valign="top"><td style="line-height:1.0"><? Menu2() ?></td></tr>
		<tr height="10"><td>&nbsp;</td></tr>
		<tr><td><? $Function() ?></td></tr>
	</table>
	<?

}

//======================================================================================
function Browse()
{
	//Preparetions...
	$Sort  = Browse_Sort() ;
	$Where = Browse_Where() ;  
	
	$Table = aSelect("members" , $Where , $Sort , "A") ; 
	$Total = aCount($Table) + 0 ; 
	$Max   = 100 ; 
	
	if(!$Total) {
		gInvalidPage("داده|ای برای نمایش وجود ندارد." , "STAY") ; 
		return ; 
	}
	
	//Showing the table....
	gToolbar($Total , $Max) ; 
	?>
	<table width="95%" border="1" cellpadding="5" cellspacing="0" align="center" bordercolor="#999999" bgcolor="#FFFFFF">
		<tr style="font-weight:bold" bgcolor="#FFFFF2">
			<td width="20">#</td>
			<td width="150">نام</td>
			<td width="150">تاریخ ثبت‌‏نام<? Browse_SortHandle() ?></td>
			<td>خلاصه مشخصات</td>
			<td width="100">وضعیت</td>
		</tr>
		<?
		if(isset($_GET['Page']))
        {
            $rr = $_GET['Page'];
        }
        else
        {
            $rr = '';
        }
        $First = $rr * $Max + 1 ; 
		if( $First > $Total ) $First = $Total - $Max ; 
		$Printed = 0;
        for( $i = $First  ; $i <= $Total && $i < $First+ $Max ; $i++ ) 	{
			$Row = aRecNo($Table , $i) ; 
			if($i==$First) $FirstID = $Row['ID'] ; 
			Browse_Item($Row , $i) ; 
			$Printed++ ; 
		}
		$LastID = $Row['ID'] ; 
		?>
	</table>
	<?
	gToolbar($Total , $Max , 2) ; 
	?><script language="javascript">AdmTableAutoHide(<?=$FirstID?> , <?=$LastID?>)</script><? 
}

//-----------------------------------------------------------
function Browse_Item($Row,$i) 
{
	?>
	<tr id="row<?=$Row[ID]?>" valign="top" onmousemove="AdmTableMouseEvent(<?=$Row[ID]?>,'move')" 
	 onmouseout="AdmTableMouseEvent(<?=$Row[ID]?>,'out')" style="line-height:1.3">
		<td><b><?=gPureText($i)?></b></td>
		<td><? Browse_Name($Row)?></td>
		<td><?=gPureText(pdate("d M Y",$Row['DateApply'])) ?></td>
		<td style="line-height:1.8"><? Browse_Summery($Row) ?></td>
		<td><? Browse_Approval($Row) ?></td>
	</tr>
	<?
}

//-----------------------------------------------------------
function Browse_Name($Row)
{
	echo gPureText($Row['NameFirst']." ".$Row['NameLast']) ; 
	
	?><div id="detail<?=$Row[ID]?>" align="center" style="visibility:hidden"><br /><?
		gInsertLink("« مشاهده جزئیات »" , "admin.php?Show=$Row[ID]") ;
	?></div><?
}

//-----------------------------------------------------------
function Browse_Approval($Row)
{
	//Showing the status...
	switch($Row['Approval']) {
		case 0 : 
			?><font color="#666666">حذف‏شده</font><?
			break ;
		case 1 :
			?><font color="#FF9933">معلق</font><?
			break ; 
		case 2 :
			?><font color="#009900">تأییدشده</font><?
			break ; 
	}
	
	//Showing the link...
	AJApproveBut($Row , "hidden") ; 
	return ; 
	if($Row['Approval']==0) {
		$Gif = "tiny_yes" ;
		$Tip = "تأیید عضویت این شخص" ;  
	}
	else {
		$Gif = "tiny_no" ; 
		$Tip = "حذف این شخص" ;
	}
	
	?><div id="Approval<?=$Row['ID']?>" style="visibility:hidden" align="center"><br /><?
	gInsertGif($Gif , "AJ_Approve('$Row[ID]')" , $Tip) ; 
	?></div><?
	
	?><div id="ApprovalAjax<?=$Row['ID']?>" style="visibility:hidden" align="center"><font color="#999999">
		<br />اندکی صبر...
	</font></div><?
}

//-----------------------------------------------------------
function Browse_Summery($Row)
{
	//Preparetions...
	$Provience = aRecID("proviences" , $Row['AdProvienceID']) ; 
	$Adress = "استان ".$Provience['Caption']."، ".$Row['AdCity']."، ".$Row['AdRest'] ; 
	
	//Showing...
	Browse_Summery_Item("تاریخ تولد" , tdate_show($Row['DateBirth'] , "d M Y")) ; 
	Browse_Summery_Item("تلفن تماس" , $Row['Tel1']."&nbsp;ـ&nbsp;".$Row['Tel2']) ; 
	Browse_Summery_Item("نشانی پستی" , $Adress) ; 
	Browse_Summery_Item("نشانی ایمیل" , $Row['Email'] , "E") ; 
	
}

//-----
function Browse_Summery_Item($Subject , $Text , $Style=NULL)
{
	$Text = gPureText($Text , "text" , $Style) ; 
	if(!$Text) return ; 
	
	?>
		<font color="#CC0000">×&nbsp;<?=gPureText($Subject)?>:&nbsp;</font><?=$Text?><br />
	<?
}

//-----------------------------------------------------------
function Browse_Where()
{
	$Where = NULL ; 
	if(isset($_GET['Word']))
    {
        $Word  = gPureText($_GET['Word']) ; 
    }
	
	//Filtering based on membership level & Search...
	switch($_GET['Act']) {
		case "Approved" : 
			$Where = " `Approval` = '2' " ; 
			break ;
		case "Suspend" :
			$Where = " `Approval` = '1' " ; 
			break ;
		case "Removed" :
			$Where = " `Approval` = '0' " ; 
			break ;
		case "Search" :
			$Where = "LOCATE('$Word' , CONCAT_WS(' ' , `NameFirst` , `NameLast` , `Tel1` , `Tel2` , `NationalCode`))" ; 
			break ; 
		default : 
			return " false " ; 
	}
	
	//Filtering based on provience
	$Provience = '';
    if(isset($_GET['Provience']))
    {
        $Provience = $_GET['Provience'] + 0 ; 
    }
    if($Provience)
		$Where .= " AND `AdProvienceID` = '$Provience' " ; 
	
	//Rreturnning...
	return $Where ; 
}

//-----------------------------------------------------------
function Browse_SortHandle()
{
	//generating the link...
	$URL = gUrl_StripGet("Sort") ; 
	$Link = $URL."&Sort=" ; 
	
	
	//deciding the icon...
	if(isset($_GET['Sort']) && $_GET['Sort']=="az")  {
		$Gif   = "sortaz" ; 
		$Link .= "za" ; 
	}
	else {
		$Gif = "sortza" ; 
		$Link .= "az" ; 
	}

	
	//showing the icon...
	gInsertBlank(20) ; 
	gInsertGif($Gif , $Link , "برای تغییر ترتیب، کلیک کنید") ; 
	
}

//-----------------------------------------------------------
function Browse_Sort()
{
	if(isset($_GET['Sort']) && $_GET['Sort']=="az")
		return "`DateApply`" ; 
	else
		return "`DateApply` DESC" ; 

}


//======================================================================================
function Show()
{
	gFeedBack() ; 

	//Reading data...
	if($_GET[Show]=="Next") {
		$Table = aSelect("members" , "`Approval` = '1'" , "`DateApply` DESC" , NULL , 1) ; 
		$Total = aCount($Table) ; 
		if(!$Total) {
			gInvalidPage("هیچ ثبت|نام معلقی باقی نمانده است." , "STAY") ; 
			return ; 
		}
		$Row = aRecNo($Table) ; 
	}
	else 
		$Row = aRecID("members" , $_GET[Show] , "A") ; 
		
	if(!$Row[ID]) {
		gInvalidPage("داده|ای برای نمایش وجود ندارد." , "STAY") ; 
		return ; 
	}

	$Provience = aRecID("proviences" , $Row[AdProvienceID]) ; 
	$Adress = "استان ".$Provience[Caption]."، ".$Row[AdCity]."، ".$Row[AdRest] ; 
	if($Row[AdCode]) $Adress .= ". کد پستی ".$Row[AdCode] ; 
	$Subjects = Show_Subjects($Row) ; 
	
	//Showing...
	?>
	<table width="85%" border="0" cellpadding="5" cellspacing="0" align="center"><tr valign="top">
		<td style="color:#000000;font-size:14px"><b><?= gPureText($Row[NameFirst]." ".$Row[NameLast]) ?></b></td>
		<td width="100" align="center"><? //Show_Approval($Row) ?></td>
	</tr></table>
	<?
	?><table width="85%" border="1" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF" align="center"><?
		Show_Item("تاریخ ثبت|نام" , pdate("d M Y" , $Row[DateApply])) ;
		Show_Item("نام پدر" , $Row[NameFather]) ;
		Show_Item("تاریخ تولد" , tdate_show($Row[DateBirth] , "d M Y")) ;
		Show_Item("کد ملی" , $Row[NationalCode]) ;
		Show_Item("تلفن تماس" , $Row[Tel1]."&nbsp;ـ&nbsp;".$Row[Tel2]) ;
		Show_Item("نشانی" , $Adress) ;
		Show_Item("ایمیل" , $Row[Email] , "E") ;
		Show_Item("نحوه|ی آشنایی با اهدای عضو" , $Row[Q1]) ;
		Show_Item("نحوه|ی آشنایی با طرح سفیران" , $Row[Q2]) ;
		Show_Item("انگیزه از شرکت" , $Row[Q3]) ;
		Show_Item("توانمدی|ها" , $Subjects) ; 
	?></table><?
	
	?><div align="center"><? 
		if($Row[Approval] != 1)
			Show_Approval($Row) ; 
		else
			Show_Approval_Suspends($Row) ; 
	?></div><?
		
}

//-----------------------------------------
function Show_Approval_Suspends($Row)
{
	//Preparetions...
	$Target = "do.php?Command=AutoApprove&ID=".$Row[ID]."&NewApproval=" ; 

	//Showing the button...
	?>
	<br />
	<table border="0" cellpadding="0" cellspacing="0"><tr valign="top">
		<td><? fDeluxButton("تأیید عضویت این شخص" , $Target."2" , "tiny_yes") ?></td>
		<td width="60">&nbsp;</td>
		<td><? fDeluxButton("رد عضویت این شخص" , $Target."0" , "tiny_no") ?></td>
	</tr></table>
	<?
}


//-----------------------------------------
function Show_Approval($Row)
{
	//Showing the status...
	switch($Row[Approval]) {
		case 0 : 
			?><font color="#666666">حذف‏شده</font><?
			break ;
		case 1 :
			?><font color="#FF9933">معلق</font><?
			break ; 
		case 2 :
			?><font color="#009900">تأییدشده</font><?
			break ; 
	}
	
	//Showing the link...
	if($Row[Approval]==2) {
		$Gif = "tiny_no" ; 
		$Tip = "حذف این شخص" ;
	}
	else {
		$Gif = "tiny_yes" ;
		$Tip = "تأیید عضویت این شخص" ;  
	}
	
	
	?><div id="Approval<?=$Row[ID]?>" align="center"><?
	gInsertGif($Gif , "AJ_Approve('$Row[ID]')" , $Tip) ; 
	?></div><?
	
	?><div id="ApprovalAjax<?=$Row[ID]?>" style="visibility:hidden" align="center"><font color="#999999">
		<br />اندکی صبر...
	</font></div><?
}


//-----------------------------------------
function Show_Subjects($Member)
{
	$Table = aSelect("subjects") ; 
	$Total = aCount($Table) ; 
	$First = true ; 

	for($i=1 ; $i<=$Total ; $i++) {
		$Row = aRecNo($Table,$i) ; 
			
		if(strstr($Member[SubjectIDs] , $Row[ID])) {
			if(!$First) $Text .= "<br />" ;
			$Text .= "× ".$Row[Caption] ; 
			$First = false ; 
		}
	}
	
	$Others = gPureText($Member[MiscExperties]) ; 
	if($Others)
		$Text .= "<br />+ <font color='black'>«".$Others."»</font> " ; 
	
	return $Text ; 
	//Show_Item("توانمدی|ها" , $Text) ; 
}

//-----------------------------------------
function Show_Item($Subject , $Text , $Style=NULL)
{
	if(!gPureText($Text)) return ; 

	?>
	<tr valign="top">
		<td width="150" bgcolor="#FFFFCC"><b><?=gPureText($Subject , "text" , $Style)?></b></td>
		<td align="justify"><?=gPureText($Text)?></td>
	</tr>
	<?
}


//======================================================================================
function Menu1()
{
	?><table width="100%" border="0" cellpadding="5" cellspacing="0"><tr valign="top"><?
	Menu1_Item("اعضای تأییدشده" , "Approved") ;
	Menu1_Item("ثبت|نام|های معلق" , "Suspend") ;
	Menu1_Item("ثبت|نام|های حذف|شده" , "Removed") ;
	//Menu1_Space() ; 
	Menu1_Search() ; 
	Menu1_Item("خروج از سامانه" , "Signout") ;
	?></tr></table><?
}

//--------------------------------------------------------------------
function Menu1_Search()
{
	//Preparetions...
	$DefaultWord = gPureText("جست|وجوی شخص...") ; 
	if($_GET['Act']=="Search") {
		$Color = "#FFFFBB" ;
		$Value = $_GET['Word'] ; 
	}
	else {
		$Color = "#FFFFEE" ;
		$Value = $DefaultWord;
	}
		
	
	//Showing....
	?>
	<form name="Search" action="admin.php" method="get">
	<td>
		<table width="90%" align="center" border="1" cellpadding="5" cellspacing="5">
			<tr><td align="center"  bgcolor="<?=$Color?>">
				<input name="Act" value="Search" type="hidden" />
				<input name="Word" type="text" size="30" style="color:#999999" value="<?=$Value?>"
				 onclick="if(this.value=='<?=$DefaultWord?>') this.value=''" 
				 onblur="if(this.value=='') this.value='<?=$DefaultWord?>'" />
			</td></tr>
		</table>
	</td>
	</form>
	<?
}

//--------------------------------------------------------------------
function Menu1_Space() 
{
	echo "<br /><br />" ; 
}

//--------------------------------------------------------------------
function Menu1_Item($Caption , $Act)
{
	//Preparetions...
	$Caption = gPureText($Caption) ; 
	$Link    = "admin.php?Act=".$Act ;
	
	if($_GET['Act']==$Act)
		$Color = "#FFFFBB" ;
	else 
		$Color = "#FFFFEE" ;
	
	//Showing....
	?>
	<td>
		<table width="90%" align="center" border="1" cellpadding="5" cellspacing="5">
			<tr><td align="center"  bgcolor="<?=$Color?>">
				<? gInsertLink($Caption , $Link) ; ?>
			</td></tr>
		</table>
	</td>
	<?
}

//======================================================================================
function Menu2() 
{
	//Preparetions...
	if(!strstr("Removed Suspend Approved" , $_GET['Act'])) return ; 

	//Showing...
	?><table width="75%" align="center" border="0"><tr valign="top" id="paperlinks"><?
	Menu2_Item("فیلتر بر اساس استان" , "$$('ProvienceTable').style.display=''") ; 
	Menu2_Item("فهرست نشانی|های ایمیل" , "$$('EmailsTable').style.display=''") ; 
	Menu2_Item("فهرست شماره|های موبایل" , "$$('MobileTable').style.display=''") ; 

	if($_GET['Act']=="Approved") 
		Menu2_Item("چاپ فهرست ثبت|نام|ها" , "reports.php?Act=Profiles" , "X") ; 
	?></tr></table><?
	
	
	//Provience Table...
	if(isset($_GET['Provience'])) {
		$Value = $_GET['Provience'] ; 
		$Display = "''" ; 
	}
	else {
		$Value = 0 ; 
		$Display = "none" ; 
	}
	?>
	<div id="ProvienceTable" style="display:<?=$Display?>">
		<br /><br />
		<table width="80%" border="1" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFEE" >
			<tr><td>
				<? gInsertGif("close16" , "$$('ProvienceTable').style.display='none'") ?>
				<? //gInsertTitle("فیلتر اطلاعات بر اساس استان" , 10) ; ?>
				<table width="90%" align="center" cellpadding="5" cellspacing="0" border="0"><tr valign="top">
					<? Menu2_Provience($Value) ; ?>
				</tr></table>
			</td></tr>
		</table>
		<br />
	</div>
	<?

	//Emails List...
	?>
	<div id="EmailsTable" style="display:none">
		<br /><br />
		<table width="80%" border="1" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFEE" >
			<tr><td>
				<? gInsertGif("close16" , "$$('EmailsTable').style.display='none'") ?>
				<table width="90%" align="center" cellpadding="5" cellspacing="0" border="0"><tr valign="top">
					<? Menu2_Emails() ; ?>
				</tr></table>
			</td></tr>
		</table>
		<br />
	</div>
	<?

	//Mobiles List...
	?>
	<div id="MobileTable" style="display:none">
		<br /><br />
		<table width="80%" border="1" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFEE" >
			<tr><td>
				<? gInsertGif("close16" , "$$('MobileTable').style.display='none'") ?>
				<table width="90%" align="center" cellpadding="5" cellspacing="0" border="0"><tr valign="top">
					<? Menu2_Mobiles() ; ?>
				</tr></table>
			</td></tr>
		</table>
		<br />
	</div>
	<?
	
}

//----------------------------------------------
function menu2_Mobiles()
{
	$Table = aSelect("members" , Browse_Where()) ; 
	$Total = aCount($Table) ; 
	
	$AllNumbers = '';
    for($i=1 ; $i<=$Total ; $i++) {
		$Row = aRecNo($Table,$i) ; 
		
		if($Row['Email'])
			$AllNumbers .= " $Row[Tel2] ; " ; 
	}
	
	fFormTArea( "همه|ی شماره|های موبایل موجود در این بخش" , NULL , $AllNumbers , "LR" ) ;
}


//----------------------------------------------
function menu2_Emails()
{
	$Table = aSelect("members" , Browse_Where()) ; 
	$Total = aCount($Table) ; 
	
	$AllEmails = '';
    for($i=1 ; $i<=$Total ; $i++) {
		$Row = aRecNo($Table,$i) ; 
        if($Row['Email'])
        {
            $AllEmails .= $Row['Email'] . ';'; 
        }
        
	}
	
	fFormTArea( "همه|ی نشانی|های ایمیل موجود در این بخش" , NULL , $AllEmails , "LR" ) ;
}

//----------------------------------------------
function Menu2_Provience($Value)
{
	//Preparetions...
	$Caption  = "فیلتر اطلاعات بر اساس نام استان" ;
	$OnChange = "alert($$('Provience').value)" ; 
	$Target   = "admin.php?Act=".$_GET['Act']."&Provience=" ; 
	$OnChange    = "location.href='$Target'+$$('Provience').value" ; 

	fFormHint( $Caption ) ; 
	fComboTable( NULL , "Provience" , $Value , "proviences" ,true, "Caption" , "Caption" ,NULL,NULL,NULL,NULL, $OnChange); 
}

//----------------------------------------------
function Menu2_Item($Title , $Link , $Style=NULL)
{
	$Title = "« ".$Title." »" ; 

	?><td align="center" style="font-style:underlined"><?
		gInsertLink($Title,$Link,NULL,$Style) ; 
	?></td><?

}




//======================================================================================
function Report()
{
	$Table = aSelect("members" , "`Approval` = '2'") ; 
	$Total = aCount($Table) ; 

	for($i=1 ; $i<=$Total ; $i++) {
		$Row = aRecNo($Table,$i) ; 
		Report_Page($Row) ;
	}	
}

//-------------------------------------------------------
function Report_Page($Row) 
{
	//Reading data...
	$Provience = aRecID("proviences" , $Row[AdProvienceID]) ; 
	$Adress = "استان ".$Provience[Caption]."، ".$Row[AdCity]."، ".$Row[AdRest] ; 
	if($Row[AdCode]) $Adress .= ". کد پستی ".$Row[AdCode] ; 
	$Subjects = Show_Subjects($Row) ; 
	
	//Showing...
	?>
	<table height="1370px" width="90%" border="0" align="center"><tr valign="top"><td><br /><br />
		
		<table width="100%" border="0" cellpadding="5" cellspacing="0" align="center"><tr valign="top">
			<td style="color:#000000;font-size:14px"><b><?= gPureText($Row[NameFirst]." ".$Row[NameLast]) ?></b></td>
			<td width="100" align="center"></td>
		</tr></table>
	
		<table width="100%" border="1" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF" align="center"><?
			Report_Item("تاریخ ثبت|نام" , pdate("d M Y" , $Row[DateApply])) ;
			Report_Item("نام پدر" , $Row[NameFather]) ;
			Report_Item("تاریخ تولد" , tdate_show($Row[DateBirth] , "d M Y")) ;
			Report_Item("کد ملی" , $Row[NationalCode]) ;
			Report_Item("تلفن تماس" , $Row[Tel1]."&nbsp;ـ&nbsp;".$Row[Tel2]) ;
			Report_Item("نشانی" , $Adress) ;
			Report_Item("ایمیل" , $Row[Email] , "E") ;
			Report_Item("نحوه|ی آشنایی با اهدای عضو" , $Row[Q1]) ;
			Report_Item("نحوه|ی آشنایی با طرح سفیران" , $Row[Q2]) ;
			Report_Item("انگیزه از شرکت" , $Row[Q3]) ;
			Report_Item("توانمندی|ها" , $Subjects) ;
			Show_Subjects($Row) ; 
		?></table>
	&nbsp;</td></td></td>
	<?
}
	
//-----------------------------------------
function Report_Item($Subject , $Text , $Style=NULL)
{
	if(!gPureText($Text)) return ; 

	?>
	<tr valign="top">
		<td width="150" style="color:#000000"><b><?=gPureText($Subject , "text" , $Style)?></b></td>
		<td align="justify" style="color:#000000"><?=gPureText($Text)?></td>
	</tr>
	<?
}
	
	
//======================================================================================
function AJApproveBut($Row , $Visibility="visible")
{
	//Showing the buttons...
	?><div id="Approval<?=$Row[ID]?>" style="visibility:<?=$Visibility?>" align="center" dir="rtl"><?
	switch($Row[Approval]) {
		case 0:
			AJApproveBut_Button($Row[ID] , "confirm") ; 
			break ;
		case 1:
			AJApproveBut_Button($Row[ID] , "confirm") ; 
			gInsertBlank(5) ; 
			AJApproveBut_Button($Row[ID] , "reject") ; 
			break ;
		case 2:
			AJApproveBut_Button($Row[ID] , "reject") ; 
			break ; 
		default:
			return ;	
	}
	?></div><?
	
	//Feedback Area...
	?><div id="ApprovalAjax<?=$Row[ID]?>" style="visibility:hidden" align="center">
		<font color="#999999"><br />اندکی صبر...</font>
		<input id="ApprovalFeed<?=$Row[ID]?>" value="0" size="2" type="hidden" />
	</div><?

}

//--------------------------------------------
function AJApproveBut_Button($ID , $Type)
{
	switch($Type) {
		case "confirm" : 
			$Icon = "tiny_yes" ; 
			$Tip  = "تأیید عضویت" ; 
			$NVal = 2 ; 
			break ;
		case "reject" :
			$Icon = "tiny_no" ;
			$Tip  = "حذف عضویت" ;
			$NVal = 0 ; 
			break ; 
		default:
			return ; 
	}

	gInsertGif($Icon , "AJ_Approve('$ID','$NVal')" , $Tip) ; 
}
?>