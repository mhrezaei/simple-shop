<?

FormHeader() ; 
FormBody() ; 

//==============================================================================================
function FormHeader()
{
	echo "<br /><br />" ; 
}


//==============================================================================================
function FormBody()
{
	$Data = '';
    //Preparetions...
	if($_SESSION['A']['FeedMode']=="Error") {
		$Data = $_SESSION['ClientForm'] ; 
	}
	else {
		$Data['AdProvienceID'] = 8 ; 
	}
	$DateApply = td_pdate("امروز l، d M Y") ; 
	
	//Showing the form...
	gFeedback() ; 
	fForm_Start( "MainForm" , "do.php" ) ;
	
	fFloatText("Command"  , "ClientForm" , 0) ; 
	fFloatText("AdminMode" , 0 , 0) ; 
	
	fFormText( "ثبت تقاضا" , NULL , $DateApply , "R") ; 

	fFormSep("اطلاعات اولیه") ;  
	fFormText( "نام شما" , "NameFirst" , $Data['NameFirst'] , "Q" ) ; 
	fFormText( "نام خانوادگی" , "NameLast" , $Data['NameLast'] , "Q" ) ; 
	fFormText( "نام پدر" , "NameFather" , $Data['NameFather'] , "Q" ) ; 
	fFormText( "کد ملی" , "NationalCode" , $Data['NationalCode'] , "Q" , "هر ده رقم را پشت سر هم بنویسید" ) ; 
	fFormDate( "تاریخ تولد" , "DateBirth" , $Data['DateBirth'] , "Q" , "مثل 29 / 6 / 1361" , false ) ;	
	FormBody_Gender($Data['GenderM']) ; 

	fFormSep("اطلاعات تماس") ;  
	fFormText( "تلفن ثابت" , "Tel1" , $Data['Tel1'] , "QE" , "با ذکر کد شهر" ) ; 
	fFormText( "تلفن همراه" , "Tel2" , $Data['Tel2'] , "QE" ) ; 
	fFormText( "نشانی ایمیل" , "Email" , $Data['Email'] , "LQ" , "فقط با الفبای انگلیسی" ) ; 

	fFormSep("نشانی دقیق محل اقامت") ;  
	fComboTable( "استان" , "AdProvienceID" , $Data['AdProvienceID'] , "proviences" ,true, "Caption" , "Caption" ,NULL,NULL,NULL,"Q"); 
	fFormText( "شهر" , "AdCity" , $Data['AdCity'] , "Q" ) ; 
	fFormText( "ادامه" , "AdRest" , $Data['AdRest'] , "Q" , "نشانی دقیق و کامل پستی") ; 
	fFormText( "کد پستی" , "AdCode" , $Data['AdCode'] , "Q" , "کد پستی ده رقمی") ; 

	fFormSep("اطلاعات تکمیلی") ;  
	fFormTArea( "نحوه|ی آشنایی شما با مقوله|ی اهدای عضو پس از مرگ مغزی چه بوده است؟" , "Q1" , $Data['Q1'] ) ;
	fFormTArea( "از چه طریقی با طرح سفیران زندگی آشنا شدید؟" , "Q2" , $Data['Q2'] ) ;
	fFormTArea( "انگیزه|ی شما از شرکت در طرح سفیران، به عنوان یک نیروی داوطلب، چیست؟" , "Q3" , $Data['Q3'] ) ;

	fFormSep("علاقه|مندی|ها و توانایی|های شما") ; 
	FormBody_Subjects($Data['SubjectIDs']) ;  
	fFormTArea( "اگر تخصص خاص دیگری دارید که فکر می|کنید می|تواند مؤثر باشد، مطرح نمایید." , "MiscExperties" , $Data['MiscExperties']) ;

	fFormFreebox_Start() ; 
		fFloatButton2("send1") ; 
	fFormFreebox_Finish() ; 
	fForm_Finish() ; 
	
}

//-----------------------------------------------
function FormBody_Subjects($Subjects) 
{
	$Table = aSelect("subjects" , true , "ID") ; 
	$Total = aCount($Table) ; 
	
	for($i=1 ; $i<=$Total ; $i++) {
		$Row = aRecNo($Table,$i) ; 
		if(strstr($Subjects,$Row[ID])) $Value = true ; else $Value = false ; 
		fFormCheck( $Row[Caption] , "Chk".$Row[ID] , $Value ) ; 
	}
}

//-----------------------------------------------
function FormBody_Gender($Value)
{
	$Title = gPureText("جنسیت") ; 
	
	
	if( strstr($Style,"Q") ) $Comment = "<font color='red'>٭</font> " ;
	$Comment .= gPureText($Com) ; 
	
	//Showing ....
	$Mode .= "'" ;  
	
	?>
	<tr valign="baseline">
		<td nowrap="nowrap"><?=$Title?></td>
		<td>
		 	<select name="GenderM" dir="rtl" size="1" id="GenderM" ><?
			fFloatCombo_InsertItem( "آقـــــا" , 1 , $Value) ;
			fFloatCombo_InsertItem( "خـــــانـــم" , 0 , $Value) ;
			?></select>
		</td>
		<td><font color="#999999" style="line-height:140%"><font color='red'>٭</font></font></td>
	</tr>
	<?
}


?>