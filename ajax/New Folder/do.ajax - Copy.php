<?
$Data = $_REQUEST ; 
include_once("aGlobals.php") ;
if(!gIsFromLocal()) gRedirect("http://www.seapurse.ir") ; 


header("Content-Type: text/html; charset=utf-8") ;


$PAGE = $Data[COMMAND] ;
 
$Function = "Do_$PAGE" ; 

if(!function_exists($Function)) { echo "<font color='red'>غیر قابل پردازش!</font>" ; die() ; }

$Function($Data) ; 

return ; 

//=====================================================================================
function Do_Approve($Data)
{
	//Preparetions...
	$Row = aRecID("members" , $Data[ID] , "A") ; 
	if(!$Row[ID]) {
		Sub_ShortFeedback("بروز خطا" , "red") ; 
		return ; 
	}
		
	//deciding what to do...
	if($Row[Approval]==2) {
		$NewValue = 0 ; 
		$FeedCap  = "حذف شد" ;
	}
	else {
		$NewValue = 2 ; 
		$FeedCap = "تأیید شد" ;
	}
		
	//doing the action...
	aFieldSet("members" , $Row[ID] , "Approval" , $NewValue) ; 
	
	//Checking the changes...
	$Row = aRecID("members" , $Data[ID] , "A") ; 
	if($Row[Approval]==$NewValue) {
		Sub_ShortFeedback($FeedCap , "green") ; 
		return ; 
	}
	else {
		Sub_ShortFeedback("بروز خطا" , "red") ; 
		return ; 
	}

			

}

//=====================================================================================
//=====================================================================================
function Sub_ShortFeedback($Message , $Color=NULL , $LineBreak=true)
{	
	$Message = gPureText($Message) ; 
	if($Color) {
		?><font color = "<?=$Color?>"><?
	}
	if($LineBreak) {
		?><br /><?
	}
	
	echo $Message ; 
	
	if($Color) {
		?></font><?
	}
	

}
?>