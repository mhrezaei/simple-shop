<?
//	 ***  ALL FORM ELEMENTS ARE GATHERED HERE IN THIS FILE  ***


//==========================================================
function fForm_Start( $Name=NULL , $Action=NULL , $Notice = NULL , $ISPS = NULL , $Method = "post" )
{
	?>
	<form name="<?=$Name?>" action="<?=$Action?>" method="<?=$Method?>" >
	<table border="1" width="90%" align="center" bordercolor="#000066" bgcolor="#FFFFFF" ><tr><td>
	<table border="0" cellpadding="5">
	<?
	fForm_Feedback($Notice) ; 
}

//--------------
function fForm_Feedback( $Notice=NULL , $Colspan=3)
{
	if(!$Notice) {
		$Notice = $_SESSION['A']['EditNotice'] ; 
	}
	$_SESSION['A']['EditNotice'] = NULL ; 
	
	$Notice = gPureText($Notice) ; 
	//if(!$Notice) return ; 

	//Setting...
	if($Notice==1) {
		$Color = "green" ;
		$Notice = "عملیات با موفقیت انجام گرفت." ;
	} elseif($Notice==11) {
		$Color = "green" ;
		$Notice = "عملیات با موفقیت انجام گرفت و فایل RSS بازسازی شد." ;
	} else 
		$Color = "red" ; 


	//Showing ....
	if($Notice && !gIsAdmin()) { ?><script language="javascript">location.href = '#Feedback' ;</script> <? } 
	?>
	<tr valign="top">
		<a name="Feedback"><td nowrap="nowrap" colspan="<?=$Colspan?>" id="Feedback">
		<font color="<?=$Color?>"><b><?=$Notice?></b></font></td></a>
	</tr>
	<?

}


//--------------
function fForm_Finish($ButtonTitle = NULL , $CancelUrl=NULL , $CheckStay = true , $ISPS = NULL)
{
	$ButtonTitle = gPureText($ButtonTitle) ; 
	
	if($ButtonTitle) fFormButton2("save1" , $ButtonTitle , "save" ,$CancelUrl , $CheckStay , $ISPS) ; 

	?></table></td></tr></table></form><p><?
}

//==========================================================		** INTACT **
function fFormFreebox_Start( $Title = NULL , $Style=NULL ) 
{
	$Title = gPureText($Title) ; 
	
	if(strstr($Style,"L")) $Direction = "ltr" ; else $Direction = "rtl" ; 

	//Showing ....
	?>
	<tr valign="top">
		<td><?=$Title?></td>
		<td colspan="2" nowrap="nowrap" dir="<?=$Direction?>">
	<?

}

//-----------------------------------------
function fFormFreebox_Finish()
{
	
	?></td></tr><?
}

//==========================================================		** INTACT **
function fFormHint( $Caption , $Style=NULL , $Color="#666666")
{
	$Caption = gPureText($Caption) ; 
	if(strstr($Style,"~")) return ; 
	
	//Showing ....
	?>
	<tr valign="baseline" height="10" style="line-height:140%">
		<td colspan="3"><font color="<?=$Color?>"><?=$Caption?></font></td>
	</tr>
	<?
}

//==========================================================		** INTACT **
function fFormSep($TextD=NULL , $TextU=NULL , $Style = NULL)
{

	if( strstr($Style,"H") ||  strstr($Style,"~")) return ;

	
	?>
	<tr valign="baseline">
		<td colspan="3"><hr width="100%" color="#999999"  /></td>
	</tr>
	<?

	if($TextD){
		?>
		<tr valign="baseline">
			<td style="color:#006699;font-weight:bold" colspan="3">
			<? gInsertBlank(30);?>
			<?=gPureText($TextD)?>...
		</td></tr>
		<?
	}
	

}








//* * * * * * * * * * * * * * * * * * * * * * *
//
// 		Text Controllers 
//
//* * * * * * * * * * * * * * * * * * * * * * *

//==========================================================
function fFloatText( $Field , $Value = NULL , $Size = 20 , $Style = NULL , $Tip=NULL )
{
	$Mode = "style='text-align:center" ; 
    $Additional = '';
	
	//Setting Variables...
	if(strstr($Style,"~")) return ; 
	if( strstr($Style,"R") ) {
		$Additional = "readonly" ; 
		$Mode .= ";color:#999999" ; 
	}
	else 
		$Mode .= ";color:#333300" ; 
	if( strstr($Style,"P") ) $Additional .= ' type="password"' ; 
	if( strstr($Style,"L") ) $Additional .= ' dir="ltr"'  ; else $Additional .= ' dir="rtl"' ;
	if( strstr($Style,"H") || !$Size ) {
		?><input name="<?=$Field?>" value="<?=$Value?>" type="hidden" id="<?=$Field?>" /><?
		return ;
	}
	
	$Tip = gPureText($Tip) ; 
	if(!$Tip) $Tip = $Field ; 
	
	//Showing ....
	$Mode .= "'" ; 
	?><input name="<?=$Field?>" id="<?=$Field?>" value="<?=$Value?>" <?=$Mode?> size="<?=$Size?>" 
	 <?=$Additional?> title="<?=$Tip?>"><?
}

//==========================================================		** INTACT **
function fFormTArea( $Title , $Field , $Value , $Style = NULL , $Com = NULL , $Rows = 4 , $Cols=110 ) 
{
	$Title = gPureText($Title) ; 

	//Setting Variables...
	if(strstr($Style,"~")) return ; 
	if( strstr($Style,"H") ) {
		fFloatText($Field,$Value,$Size,$Style) ; 
		return ; 
	}
	if( strstr($Style,"Q") )
    {
        $Comment = "<font color='red'>٭</font> " ;
    }
    else
    {
        $Comment = '';
    }
	$Comment .= gPureText($Com) ; 

	$Mode = '';
    if( strstr($Style,"R") ) {
		$ReadOnly = true ; 
		$Mode .= ";color:#999999" ; 
	}
	else 
		$Mode .= ";color:#333300" ; 

	if( strstr($Style,"L") ) {
		$dir = "ltr" ; 
		$Align = "left" ; 
	} else {
		$dir = "rtl" ;
		$Align = "right" ; 
	}

	//Showing ....
	$Mode .= ";text-align:$Align'" ; 
	?>
	<tr valign="top">
		<td colspan="3">
			<b><?=$Title?></b><? gInsertBlank(50)?><font color="#999999"><?=$Comment?></font><br />
			<textarea name="<?=$Field?>" cols="<?=$Cols?>" rows="<?=$Rows?>" dir=<?=$dir?> style=" <?=$Mode?>" id="<?=$Field?>"
			 <? if($ReadOnly) echo "readonly" ?>><?=$Value?></textarea>
		 </td>
	</tr>
	<?

}

//==========================================================
function fFormText( $Title , $Field , $Value , $Style = NULL, $Com = NULL , $Size = 60 )
{
	$Title = gPureText($Title) ;
    $Comment = ''; 
    $Mode = '';
	
	//Setting Variables...
	if(strstr($Style,"~")) return ; 
	if( strstr($Style,"H") ) {
		fFloatText($Field,$Value,$Size,$Style) ; 
		return ; 
	}
	
	if( strstr($Style,"Q") ) $Comment = "<font color='red'>٭</font> " ;
	$Comment .= gPureText($Com) ; 
	
	if( strstr($Style,".category.")) $CatMenu = true ; 
	
	if( strstr($Style,"Y") ) { fFormYesNo($Title , $Field , $Value , $Style , $Com , $Size) ; return ; }
	
	if($Field=="ID")
		$Comment = "تنظیم خودکار ".$Comment ;
		
	//$Title = ereg_replace(" " , "&nbsp;" , $Title) ; 
	
	//Showing ....
	$Mode .= "'" ;  
	?>
	<tr valign="baseline">
		<td nowrap="nowrap" width="20"><?=$Title?></td>
		<td width="100" align="right">
		<? fFloatText( $Field , $Value , $Size , $Style) ?>
		</td>
		<td><font color="#999999" style="line-height:140%"><?=$Comment?></font></td>
	</tr>
	<?
}


//==========================================================		** INTACT **
function fSecCode($Alias=NULL , $AddSep=true)
{
	$Code = fSecCode_Generator() ;
	$Caption = "کد امنیتی" ; 

	if($AddSep) {
		fFormSep(); 
		$Blanks = 15 ; 
	} else {
		$Blanks = 5 ;
	}

	fFormFreebox_Start($Caption) ; 
		?><font color="#666666"><?=gPureText($Code[Q])?>؟&nbsp;</font><? ;
		
		gInsertBlank($Blanks) ;
		
		//fFloatText($Alias."CodeQ" , NULL , 20 , NULL , "حاصل را به صورت عددی وارد نمایید.") ;
		?><input name="<?=$Alias."CodeQ"?>" id="<?=$Alias."CodeQ"?>" value="" size="20" data-tooltip="sticky_SecCode" 
		 style="text-align:center"><?

		//fFloatText("CodeA" , $Code[A] , 10) ;
		fFloatText($Alias."CodeH" , $Code[H] , 0) ;
	fFormFreebox_Finish() ; 
}

//----------------------------
function fSecCode2($Alias=NULL)
{
	$Code = fSecCode_Generator() ;

	?><font color="#666666"><?=gPureText($Code[Q])?>؟&nbsp;</font><?
	gInsertBlank(5) ;
	//fFloatText($Alias."CodeQ" , NULL , 5 , NULL , "حاصل را به صورت عددی وارد نمایید.") ;
	?><input name="<?=$Alias."CodeQ"?>" id="<?=$Alias."CodeQ"?>" value="" size="5" data-tooltip="sticky_SecCode"  
		 style="text-align:center"><?
	//fFloatText("CodeA" , md5($Code[A]) , 0) ;
	fFloatText($Alias."CodeH" , $Code[H] , 0) ; 
}


//----------------------------
function fSecCode_Generator()
{
	//Generating a random session handle...
	$Handle = rand(1,1000) ; 

	//Generating an expression...
	$N1 = rand(1,10) ;
	$N2 = rand(1,10) ;
	$OP = rand(1,2)  ;
	
	switch($OP) {
		case 1 ; 
			$A = $N1 + $N2 ; 
			$Cap = "به|علاوه" ;
			break ;
		case 2:
			$A = $N1 * $N2 ;
			$Cap = "ضربدر" ;
			break ;
	}
	
	$S1 = fSecCode_String($N1) ;
	$S2 = fSecCode_String($N2) ;
	
	$Ans[Q] = "$S1 $Cap $S2" ;
	$Ans[A] = $A ;
	$Ans[H] = $Handle ; 


	$_SESSION["SecCode".$Handle] = md5($A) ;
	
	return $Ans ; 

}

//----------------------------
function fSecCode_String($N)
{
	switch($N) {
		case 0: return "صفر" ;
		case 1: return "یک" ;
		case 2: return "دو" ;
		case 3: return "سه" ;
		case 4: return "چهار" ;
		case 5: return "پنج" ;
		case 6: return "شش" ;
		case 7: return "هفت" ;
		case 8: return "هشت" ;
		case 9: return "نه" ;
		case 10: return "ده" ;
	}
}


//==========================================================
function fFormDate( $Title , $Field , $Value , $Style = NULL, $Com = NULL , $Time = true )
{
	$Title = gPureText($Title) ; 
	
	//Setting Variables...
	if(strstr($Style,"~")) return ; 
	if( strstr($Style,"H") ) {
		fFloatDate($Field,$Value,$Style,$Time) ; 
		return ; 
	}
	if(strstr($Style,"Y")) $SupCom = "در صورت کمبود اطلاعات، فقط بخش سال را وارد کنید." ;
	if(strstr($Style,"O")) $SupCom = "می|تواند خالی رها شود." ;
	
	if( strstr($Style,"Q") ) $Comment = "<font color='red'>٭</font> " ;
	$Comment .= gPureText($Com) ; 
	
	//Showing ....
	$Mode .= "'" ;  
	?>
	<tr valign="baseline">
		<td nowrap="nowrap"><?=$Title?></td>
		<td>
		<? fFloatDate( $Field , $Value , $Style , $Time) ?>
		<font color="#999999" style="line-height:140%"><?=gPureText($SupCom)?></font>
		</td>
		<td><font color="#999999" style="line-height:140%"><?=$Comment?></font></td>
	</tr>
	<?
}


//==========================================================
function fFloatDate( $Field , $Value = NULL , $Style = NULL , $Time = true  )
{
	$Mode = "style='text-align:center" ; 
	
	//Setting Variables...
	if(strstr($Style,"~")) return ; 
	if( strstr($Style,"R") ) {
		$Additional = "readonly" ; 
		$Mode .= ";color:#999999" ; 
	}
	else 
		$Mode .= ";color:#333300" ; 
		
	if($Value[H] < 10) $Value[H] = "0".$Value[H] ; 	
	if($Value[I] < 10) $Value[I] = "0".$Value[I] ; 	
		
	//Showing ....
	fFloatText( $Field."_D" , $Value[D] , 2 , $Style ) ;
	if(!strstr($Style,"H")) echo " / " ; 
	fFloatText( $Field."_M" , $Value[M] , 2 , $Style ) ;
	if(!strstr($Style,"H")) echo " / " ; 
	fFloatText( $Field."_Y" , $Value[Y] , 4 , $Style ) ;
	
	if($Time) {
		if(!strstr($Style,"H")) echo " ؛  ساعت " ; 
		fFloatText( $Field."_I" , $Value[I] , 2 , $Style ) ;
		if(!strstr($Style,"H")) echo " : " ; 
		fFloatText( $Field."_H" , $Value[H] , 2 , $Style ) ;
	}
	
}


//* * * * * * * * * * * * * * * * * * * * * * *
//
// 		Buttons 
//
//* * * * * * * * * * * * * * * * * * * * * * *

//==========================================================		** INTACT **
function fFloatButton2($Serial="save" , $Alt = "ذخیره و ارسال" , $Name=NULL , $OnClick=NULL) 
{
	$File1 = "Images/but_".$Serial."_1.png" ; 
	$File2 = "Images/but_".$Serial."_2.png" ; 
	$File3 = "Images/but_".$Serial."_3.png" ; 
	
	if(!file_exists($File2)) $File2 = $File1 ; 
	if(!file_exists($File3)) $File3 = $File2 ; 
	
	if(!file_exists($File1)) {
		fFloatButton($Alt , $Name) ; 
		return ; 
	}
	
	?>
	<input type="image" name="<?php echo $Name; ?>" alt="<?php echo gPureText($Alt); ?>" src="<?php echo $File1; ?>" onmouseout="this.src='<?php echo $File1; ?>'" 
	onmouseover="this.src='<?php echo $File2; ?>'" onmousedown="this.src='<?php echo $File3; ?>'" <?php //echo $Clicker; ?>  /> 
	<?

}

//==========================================================		** INTACT **
function fFloatButton($Caption = "تأیید و ارسال" , $Name = NULL) 
{
	?><input name="<?=$Name?>" type="submit" value="<?=gPureText($Caption)?>" style="border:outset"><?
}

//==========================================================		** INTACT **
function fFormButton2( $Serial="save" , $Alt = "ذخیره و ارسال" , $Name=NULL , $CancelUrl=NULL , $CheckStay = true , $ISPS = NULL) 
{
	$Stay  = $_SESSION[A][FormStay] ; 

	?>
	<tr valign="top">
		<td nowrap="nowrap">&nbsp;</td>
		<td align="left"><? 
			if($CancelUrl) gInsertGif("but_back1",$CancelUrl,"بازگشت",0) ; 
			if(!$ISPS || bAdmin_CheckPermits($ISPS.".act")) fFloatButton2($Serial,$Alt,$Name) ;
		?></td>
		<td><? if(gIsAdmin() && $CheckStay) fFloatCheck("پس از ذخیره، همین|جا بمان" , "FormStay" , $Stay) ?></td>
	</tr>
	<?

}

//==========================================================		** INTACT **
function fFormButton( $Title = "تأیید و ارسال" , $CancelUrl=NULL , $CheckStay = false) 
{
	$Title = gPureText($Title) ; 
	$Stay  = $_SESSION[A][FormStay] ; 

	?>
	<tr valign="top">
		<td nowrap="nowrap">&nbsp;</td>
		<td align="left"><? if($CancelUrl) gInsertLink("بازگشت" , $CancelUrl) ?>&nbsp;<? fFloatButton($Title) ?></td>
		<td><? if(gIsAdmin() && $CheckStay) fFloatCheck("همین|جا بمان" , "FormStay" , $Stay) ?></td>
	</tr>
	<?

}

//==========================================================		** INTACT **
function fFormButton3( $Serial="save" , $Alt = "ذخیره و ارسال" , $OnClick=NULL) 
{
	$Stay  = $_SESSION[A][FormStay] ; 

	?>
	<tr valign="top">
		<td nowrap="nowrap" id="Feedback2"></td>
		<td align="left"><? 
			fFloatButton3($Serial,$Alt,$OnClick) ;
		?></td>
		<td><? //if(gIsAdmin() && $CheckStay) fFloatCheck("همین|جا بمان" , "FormStay" , $Stay) ?></td>
	</tr>
	<?

}

//==========================================================		** INTACT **
function fFloatButton3($Serial="save" , $Alt = "ذخیره و ارسال" , $OnClick=NULL) 
{
	$File1 = "Images/but_".$Serial."_1.png" ; 
	$File2 = "Images/but_".$Serial."_2.png" ; 
	$File3 = "Images/but_".$Serial."_3.png" ; 
	
	if(!file_exists($File2)) $File2 = $File1 ; 
	if(!file_exists($File3)) $File3 = $File2 ; 
	
	if(!file_exists($File1)) {
		fFloatButton($Alt , $Name) ; 
		return ; 
	}
	
	?>
	<img name="<?=$Name?>" alt="<?=gPureText($Alt)?>" src="<?=$File1?>" onmouseout="this.src='<?=$File1?>'" 
	onmouseover="this.src='<?=$File2?>'" onmousedown="this.src='<?=$File3?>'" onclick="<?=$OnClick?>"
	 style="cursor:pointer"  /> 
	<?
	
	return ; 
	?>
	<input type="image" name="<?=$Name?>" alt="<?=gPureText($Alt)?>" src="<?=$File1?>" onmouseout="this.src='<?=$File1?>'" 
	onmouseover="this.src='<?=$File2?>'" onmousedown="this.src='<?=$File3?>'" <?=$Clicker?>  /> 
	<?

}


//==========================================================		** INTACT **
function fFormButton3a($FeedbackID , $OnClick=NULL , $Serial="save1" , $Alt = "ذخیره و ارسال") 
{
	?>
	<tr valign="top">
		<td>&nbsp;</td>
		<td id="<?=$FeedbackID?>" style="color:#666666"></td>
		<td align="left"><? fFloatButton3($Serial,$Alt,$OnClick) ; ?></td>
	</tr>
	<?

}








//* * * * * * * * * * * * * * * * * * * * * * *
//
// 		Checkboxes and Radios 
//
//* * * * * * * * * * * * * * * * * * * * * * *
//==========================================================		** INTACT **
function fFormCheck( $Title , $Field , $Value , $Style = NULL ) 
{
	if(strstr($Style,"~")) return ; 
	if(strstr($Style,"H")) {
		fFloatText( $Field , $Value , 20 , "H" ) ;
		return ; 
	}

	//Showing ....
	?>
	<tr valign="top">
		<td nowrap="nowrap">&nbsp;</td>
		<td colspan="2"><? fFloatCheck($Title , $Field , $Value , $Style) ?>
	</tr>
	<?

}

//==========================================================		** INTACT **
function fFloatCheckDelux($Title , $Field=NULL , $Value=NULL , $Size=130)
{
	//Openning and Closing the Table...
	if($Title==1) {
		?><table width="95%" border="0" cellpadding="0" cellspacing="0" align="center"><tr valign="top"><?
		return ;
	}
	elseif($Title===0) {
		?><td>&nbsp;</td></tr></table><?
		return ; 
	}

	//the real object (Hidden) ...
	fFloatText($Field , $Value , 0) ; 
	
	//the face Delux object...
	if($Value) {
		$BgColor = "FFFF77" ;
		$Icon    = "tick16" ; 
	}
	else {
		$BgColor = "EEEEEE" ;
		$Icon    = "box16"  ;
	}
	?>
	<td nowrap="nowrap" width="<?=$Size?>" >
		<table cellpadding="0 " cellspacing="0" border="1" width="<?=$Size?>" bgcolor="#<?=$BgColor?>" id="col_<?=$Field?>"
		 style="border-color:#CCCCCC;cursor:pointer" onmouseup="DeluxCheck('<?=$Field?>')"
		><tr>
			<td style="font-size:10px;line-height:1.0" align="center" nowrap="nowrap">
				<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr valign="middle">
					
					<td width="30" align="center">
						<img src="Images/<?=$Icon?>.gif" border="0" id="tick_<?=$Field?>" style="visibility:visible" />
					</td>
					<td align="right" style="font-size:11px">
						<?=gPureText($Title)?>
					</td>
					
				</tr></table>
			</td>
		</tr></table>
	</td>
	<td width="20">&nbsp;</td>
	<?
}

//==========================================================		** INTACT **
function fFloatCheck( $Title , $Field , $Value , $Style = NULL , $OnClick=NULL) 
{
	$Title = gPureText($Title) ; 
    $Mode = '';
	//Setting Variables...
	if(strstr($Style,"~")) return ; 
	if( strstr($Style,"R") ) {
		$ReadOnly = true ; 
		$Mode .= ";color:#999999" ; 
	}
	else 
		$Mode .= ";color:#333300" ; 

	if( strstr($Style,"L") ) {
		$dir = "ltr" ; 
		$Align = "left" ; 
	} else {
		$dir = "rtl" ;
		$Align = "right" ; 
	}
	
	if($Value)
		$Checked = 'checked="checked"' ; 
	else
		$Checked = NULL ; 
		
	if(strstr($Style,"D"))
		$Checked .= ' disabled="disabled" ' ; 

	//Showing ....
	?>
	<input name="<?=$Field?>" id="<?=$Field?>" dir="<?=$dir?>" align="<?=$Align?>" <?=$Checked?> 
	 type="checkbox" <?=$Value?> title="<?=$Field?>" style="border:none;cursor:pointer"
	 onclick="<?=$OnClick?>" />&nbsp;<?=$Title?>
	<?

}

//==========================================================		** INTACT **
function fFloatRadio( $Title , $Set , $Field , $Value , $Hint = NULL , $Style = NULL)
{
	//Setting Variables:
	if( $Value == $Set ) $Checkd = 'checked="checked"' ; else $Checkd = NULL;
	$Hint = gPureText($Hint) ;
	$Title = gPureText($Title) ; 
	
	?>
		<input name="<?=$Field?>" id="<?=$Field?>" type="radio" value="<?=$Set?>" <?=$Checkd?> title="<?=$Hint?>" /><?=$Title?>
	<?
}



//==========================================================		** INTACT **
function fFormMultiCat($Current , $CurrentValue , $Style=NULL , $Caption="دسته|بندی مطلب")
{
	//Preparetions...
	if(strstr($Style,"~")) return ; 

	$Table = aSelect("gen_categories" , "`Current` = '$Current'" , "`Priority`") ; 
	$Total = aCount($Table) ; 
	
	//Showing ....
	fFormSep($Caption) ; 
	?>
	<tr valign="top"><td colspan="3">
		<table width="95%" align="center" cellpadding="3" cellspacing="0"><?
			for($i=1 ; $i<=$Total ; $i+=5) {
				$Row1 = aRecNo($Table,$i+0) ; 
				$Row2 = aRecNo($Table,$i+1) ; 
				$Row3 = aRecNo($Table,$i+2) ; 
				$Row4 = aRecNo($Table,$i+3) ; 
				$Row5 = aRecNo($Table,$i+4) ; 
				?>
				<tr valign="top">
					<td><? fFormMultiCat_Item($Row1 , $CurrentValue) ?></td>
					<td><? fFormMultiCat_Item($Row2 , $CurrentValue) ?></td>
					<td><? fFormMultiCat_Item($Row3 , $CurrentValue) ?></td>
					<td><? fFormMultiCat_Item($Row4 , $CurrentValue) ?></td>
					<td><? fFormMultiCat_Item($Row5 , $CurrentValue) ?></td>
				</tr>
				<?
			}
		?></table>
	</td></tr>
	<?
	if(strstr($Style , "Q"))
		fFormHint("حداقل یکی از دسته|های فوق را برای این مطلب، انتخاب نمایید.") ; 
}


//-------------------------------------------------------
function fFormMultiCat_Item($Row , $CurrentValue)
{
	//Preparetions...
	if(!$Row[ID]) { echo "&nbsp;" ; return ; }
	$Title = $Row[Caption1] ; 
	$Field = "Cat_".$Row[Serial] ; 
	if(strstr($CurrentValue , $Row[Serial])) $Value = true ; else $Value = false ; 
	
	//Showing...
	fFloatCheckDelux($Title , $Field , $Value , 130) ;


}




//* * * * * * * * * * * * * * * * * * * * * * *
//
// 		Combo Controllers 
//
//* * * * * * * * * * * * * * * * * * * * * * *

//==========================================================		** INTACT **
function fFloatComboStatus( $Field , $Value=0 , $Style = NULL )
{
	if(strstr($Style,"~")) return ; 
	if( strstr($Style,"H") ) return ; 
	
	$Table = aSelect("gen_status" , "`Field` = '$Field'" , "Level") ;
	$Total = aCount($Table) ;
	if(!$Total) { echo "فهرست یافت نشد." ; return ; }
	
	//Showing ....
	?><select name="<?=$Field?>" dir="rtl" size="1" id="<?=$Field?>" ><?
		fFloatCombo_InsertItem( "از فهرست انتخاب کنید" , 0) ;
		for($i=1 ; $i<=$Total ; $i++ ) {
			$Row = aRecNo($Table , $i) ; 
	
			fFloatCombo_InsertItem( gPureText($Row[Caption]) , $Row[Level] , $Value) ;
		}
	?></select><?
}

//==========================================================		** INTACT **
function fComboStatus( $Title , $Field , $Value=0 , $Comment = NULL , $Style = NULL )
{
	$Title = gPureText($Title) ; 
	$Comment  = gPureText($Comment) ; 
	if(strstr($Style,"~")) return ; 
	if( strstr($Style,"H") ) return ; 
	if( strstr($Style,"Q") ) $Comment = "<font color='red'>٭</font> " ;
	if( strstr($Style,"R") ) $Readonly = 'disabled="disabled"' ; 
	
	$Table = aSelect("gen_status" , "`Field` = '$Field'" , "Level") ;
	$Total = aCount($Table) ;
	if(!$Total) { echo "فهرست یافت نشد." ; return ; }
	
	//Showing ....
	?>
	<tr valign="baseline">
		<td nowrap="nowrap"><?=$Title?></td>
		<td>
		 	<select name="<?=$Field?>" dir="rtl" size="1" <?=$Readonly?> id="<?=$Field?>" ><?
			fFloatCombo_InsertItem( "ـ ـ ـ ـ از فهرست انتخاب کنید ـ ـ ـ ـ" , 0) ;
			for($i=1 ; $i<=$Total ; $i++ ) {
				$Row = aRecNo($Table , $i) ; 
				
				fFloatCombo_InsertItem( gPureText($Row[Caption]) , $Row[Level] , $Value) ;
			}
			?></select>
		</td>
		<td><font color="#999999" style="line-height:140%"><?=$Comment?></font></td>
	</tr>
	<?
}

//==========================================================		** INTACT **
function fComboTable( $Title , $Field , $Value , $Table , $Condition , $Sort , $SrcField1 , $SrcField2=NULL
                       , $Default=NULL , $Comment=NULL , $Style=NULL , $OnChange=NULL)
{
	$Title = gPureText($Title) ; 
	$Comment  = gPureText($Comment) ; 
	if(strstr($Style,"~")) return ; 
	if( strstr($Style,"H") ) return ; 
	if( strstr($Style,"Q") ) $Comment = "<font color='red'>٭</font> " ;
	if( strstr($Style,"R") ) $Readonly = 'disabled="disabled"' ; 
	
	if(!$Default) $Default = "ـ ـ ـ ـ از فهرست انتخاب کنید ـ ـ ـ ـ" ;
	
	
	$Table = aSelect($Table , $Condition , $Sort , "A") ;
	$Total = aCount($Table) ;
	if(!$Total) { echo "فهرست یافت نشد." ; return ; }
	
	//Showing ....
	?>
	<tr valign="baseline">
		<td nowrap="nowrap" width="60"><?=$Title?></td>
		<td>
		 	<select name="<?=$Field?>" dir="rtl" size="1" <?=$Readonly?> id="<?=$Field?>" onchange="<?=$OnChange?>" ><?
			fFloatCombo_InsertItem( $Default , 0) ;
			for($i=1 ; $i<=$Total ; $i++ ) {
				$Row = aRecNo($Table , $i) ; 
	
				//Special SrcFields...
				if($SrcField1=="DATE") 
					$Caption = tdate_show($Row[$SrcField2] , "d M y") ;
				else {
					$Caption = $Row[$SrcField1] ; 
					if($SrcField2) $Caption .= " ".$Row[$SrcField2] ; 
				}
				
				fFloatCombo_InsertItem( $Caption , $Row[ID] , $Value) ;
			}
			?></select>
		</td>
		<td><font color="#999999" style="line-height:140%"><?=$Comment?></font></td>
	</tr>
	<?
}


//==========================================================		** INTACT **
function fFlaotComboTable( $Field , $Value , $Table , $Condition , $Sort , $SrcField1 , $SrcField2=NULL
                       , $Default=NULL , $Style=NULL , $OnChange=NULL)
{
	if(strstr($Style,"~")) return ; 
	if( strstr($Style,"H") ) return ; 
	if( strstr($Style,"Q") ) $Comment = "<font color='red'>٭</font> " ;
	if( strstr($Style,"R") ) $Readonly = 'disabled="disabled"' ; 
	
	if(!$Default) $Default = "ـ ـ ـ ـ از فهرست انتخاب کنید ـ ـ ـ ـ" ;
	
	
	$Table = aSelect($Table , $Condition , $Sort , "A") ;
	$Total = aCount($Table) ;
	if(!$Total) { echo "فهرست یافت نشد." ; return ; }
	
	//Showing ....
	?>
	<select name="<?=$Field?>" dir="rtl" size="1" <?=$Readonly?> id="<?=$Field?>" onchange="<?=$OnChange?>" ><?
	fFloatCombo_InsertItem( $Default , 0) ;
	for($i=1 ; $i<=$Total ; $i++ ) {
		$Row = aRecNo($Table , $i) ; 

		//Special SrcFields...
		if($SrcField1=="DATE") 
			$Caption = tdate_show($Row[$SrcField2] , "d M y") ;
		else {
			$Caption = $Row[$SrcField1] ; 
			if($SrcField2) $Caption .= " ".$Row[$SrcField2] ; 
		}
		
		fFloatCombo_InsertItem( $Caption , $Row[ID] , $Value) ;
	}
	?></select><?
}

//==========================================================		** INTACT **
function fFloatCombo($Field=0 , $Value=0 , $Action=NULL , $Default="... انتخاب کنید ..." , $Style=NULL) 
{
	$Default = gPureText($Default) ; 
	
	if($Field) {
		?><select name="<?=$Field?>" dir="rtl" <?= $Action? "onchange='javascript:$Action'" : NULL ?> style=" <?=$Style?>"><?
		
		if($Default != -1) { ?>
			<option selected="selected" value="0" style="color:#999999" id="<?=$Field?>" ><?=$Default?></option><?
		} 
	}
	else {
		?></select><?
	}

}

//==========================================================		** INTACT **
function fFloatCombo_InsertItem( $Title="---" , $Value = NULL , $Already = NULL )
{
	if($Already==$Value)
    {
        $Check = 'selected="selected"' ; 
    }
    else
    {
        $Check = '';
    }
	$Title = gPureText($Title) ; 

	?>
	<option value="<?=$Value?>" id="<?=$Field?>" <?=$Check?> ><?=$Title?></option>
	<?

}


//==========================================================		** INTACT **
function fFormYesNo( $Title , $Field , $Value , $Style = NULL, $Com = NULL , $Size = 60 )
{
	$Title = gPureText($Title) ; 
	
	//Setting Variables...
	if(strstr($Style,"~")) return ; 
	if( strstr($Style,"H") ) {
		fFloatText($Field,$Value,$Size,$Style) ; 
		return ; 
	}
	
	if( strstr($Style,"Q") ) $Comment = "<font color='red'>٭</font> " ;
	$Comment .= gPureText($Com) ; 
	
	//Showing ....
	$Mode .= "'" ;  
	
	?>
	<tr valign="baseline">
		<td nowrap="nowrap"><?=$Title?></td>
		<td>
		 	<select name="<?=$Field?>" dir="rtl" size="1" <?=$Readonly?> id="<?=$Field?>" ><?
			fFloatCombo_InsertItem( "بــــــلـــــه" , 1 , $Value) ;
			fFloatCombo_InsertItem( "خـــــیــــر" , 0 , $Value) ;
			?></select>
		</td>
		<td><font color="#999999" style="line-height:140%"><?=$Comment?></font></td>
	</tr>
	<?
}

//==========================================================		** INTACT **
function fFormCat($Title , $Field , $Current , $Value=NULL , $Exeptions=NULL , $PaperID=0)
{
	$Table = aSelect("gen_categories" , "`Current` = '$Current'" , "`Priority`") ;
	$Total = aCount($Table) ;
	if(!$Total) { echo "فهرست یافت نشد." ; return ; }
	
	//Showing ....
	?>
	<tr valign="top">
		<td nowrap="nowrap"><?=gPureText($Title)?></td>
		<td>
		 	<select name="<?=$Field?>" dir="rtl" size="1" id="<?=$Field?>" onchange="CatMenu()" ><?
			fFloatCombo_InsertItem( "ـ ـ ـ ـ از فهرست انتخاب کنید ـ ـ ـ ـ" , 0) ;
			for($i=1 ; $i<=$Total ; $i++ ) {
				$Row = aRecNo($Table , $i) ; 
				if(strstr($Exeptions , $Row[Serial])) continue ; 
				
				fFloatCombo_InsertItem( gPureText($Row[Caption1]) , $Row[Serial] , $Value) ;
			}
			?></select>
		</td>
		<td><font color="#FF0000" style="line-height:140%">٭</font></td>
	</tr>
	<?

}

//-----------------------------------------
function fFormCat_Papers($PaperID , $FacID)
{
	if($FacID) 
		$Conditon = "`FacID` = '$FacID'" ;
	else
		$Conditon = true ; 
		
	/* NOTE: there is a hidden future of filtering data of this combo, in relation to the Faculty setting. This future is switched off because of the compability problems with Google Chrome. 
	To turn on, put the following lines instead of the corresponding ones:
		fComboTable( "گروه آموزشی" , "FacID" , $Data[FacID] , "fac_core" , 
		true , "Title" , "Title" , NULL , ". . . مربوط به کل مجموعه . . ." , NULL , "Q" ) ; //, "AJ_CommentCats()") ;
		fFormCat("موضوع پیام" , "Category" , "comments" , $Data[Category] , NULL , $Data[PaperID] , 0 ) ;
	Pay attention to the last switches!
	*/

	$Table = aSelect("goo_papers" , $Conditon , "`Module` , `Title1` " , "A")  ; 
	$Total = aCount($Table) ; 
	if(!$Total) { echo "فهرست یافت نشد." ; return ; }
	
	//Showing ....
	?><select name="PaperID" dir="rtl" size="1" id="PaperID"><?
		fFloatCombo_InsertItem( ". . . مطلب مورد نظر را از فهرست انتخاب نمایید . . ." , 0) ;
		for($i=1 ; $i<=$Total ; $i++){
			$Row = aRecNo($Table , $i) ; 
			$Module = gModuleName($Row[Module]) ; 
			fFloatCombo_InsertItem( gPureText($Module." ـــــ ".$Row[Title1]) , $Row[ID] , $PaperID) ;
		}
	?></select><?
}


//==========================================================		** INTACT **
function fFormCat2($Title , $Field , $Current , $Value=NULL , $Exeptions=NULL , $PaperID=0 , $FacID=0)
{
	$Table = aSelect("gen_categories" , "`Current` = '$Current'" , "`Priority`") ;
	$Total = aCount($Table) ;
	if(!$Total) { echo "فهرست یافت نشد." ; return ; }
	
	//Showing ....
	?>
	<tr valign="top">
		<td nowrap="nowrap"><?=gPureText($Title)?></td>
		<td>
		 	<select name="<?=$Field?>" dir="rtl" size="1" id="<?=$Field?>" onchange="CatMenu()" id="Category" ><?
			fFloatCombo_InsertItem( "ـ ـ ـ ـ از فهرست انتخاب کنید ـ ـ ـ ـ" , 0) ;
			for($i=1 ; $i<=$Total ; $i++ ) {
				$Row = aRecNo($Table , $i) ; 
				if(strstr($Exeptions , $Row[Serial])) continue ; 
				
				fFloatCombo_InsertItem( gPureText($Row[Caption1]) , $Row[Serial] , $Value) ;
			}
			?></select>
		</td>
		<td><font color="#FF0000" style="line-height:140%">٭</font></td>
	</tr>
	<?
	fFormPaper("مربوط به" , "PaperID" , $PaperID) ; 

}


//* * * * * * * * * * * * * * * * * * * * * * *
//
// 		NON-FORM CONTROLLERS (buttons etc)
//
//* * * * * * * * * * * * * * * * * * * * * * *

//==========================================================		** INTACT **
function fCatButton($Caption , $Serial=NULL)
{
	//Preparetions....
	if(!$Caption) {
		echo "&nbsp;" ; 
		return ;
	}

	$Link  = gUrl_StripGet("Cat") ; 
	if($Serial) 
		$Link .= gUrl_Extender($Link)."Cat=".$Serial ;

	if($_GET[Cat]==$Serial) $Active = true ; 

	?>
	<table width="95%" border="1" cellpadding="2" cellspacing="0" bordercolor="#999999">
		<tr style="font-size:10px">
			<? if($Active) { ?>
				<td align="center" bgcolor="#FFFF66" style="font-weight:bold;cursor:default">
			<? } else { ?>
				<td align="center" onmouseup="location.href='<?=$Link?>'" bgcolor="#FFFFCC" style="cursor:pointer"
				 onmouseover="this.bgColor='#FFFF99'" onmouseout= "this.bgColor='#FFFFCC'">
			 <? } ?>
				<?=gPureText($Caption)?>
			</td>
		</tr>
	</table>
	<?

}

//==========================================================
function fDeluxButton($Caption , $Target , $Icon=NULL ,$Hint=NULL , $Size=250) 
{
	if(strstr($Target,"(")) 
		$Link = $Target ; 
	else 
		$Link = "location.href='$Target'" ; 

	?>
	<table width="<?=$Size?>" border="1" cellpadding="10" cellspacing="0" bordercolor="#999999" align="center">
		<tr>
			<td align="center" onmouseup="<?=$Link?>" bgcolor="#FFFFCC" 
			 style="cursor:pointer;line-height:1.3;font-size:12px;font-weight:bold"
			 onmouseover="this.bgColor='#FFFF99'" onmouseout= "this.bgColor='#FFFFCC'" title="<?=gPureText($Hint)?>">
				<? 
				if($Icon) { gInsertGif($Icon) ; echo "<br />" ; } 
				echo gPureText($Caption) ; 
				?>
			</td>
		</tr>
	</table>

	<?
}



?>