<?
$Data = $_REQUEST ; 
include_once("aGlobals.php") ;
if(!gIsFromLocal()) { echo "<font color='red'>بروز خطا!</font>" ; die() ; }


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
		Sub_TextFeed("ApprovalFeed".$Data[ID]) ; 
		return ; 
	}
		
	//deciding what to do...
	if($Data[NewValue]==0) {
		$NewValue = 0 ; 
		$FeedCap  = "حذف شد" ;
	}
	elseif($Data[NewValue]==2) {
		$NewValue = 2 ; 
		$FeedCap = "تأیید شد" ;
	}
	else {
		Sub_ShortFeedback("بروز خطا" , "red") ; 
		Sub_TextFeed("ApprovalFeed".$Data[ID]) ; 
		return ; 
	}
		
	//doing the action...
	aFieldSet("members" , $Row[ID] , "Approval" , $NewValue) ; 
	
	//Checking the changes...
	$Row = aRecID("members" , $Data[ID] , "A") ; 
	if($Row[Approval]==$NewValue) {
		Sub_ShortFeedback($FeedCap , "green") ; 
		Sub_TextFeed("ApprovalFeed".$Data[ID] , "1") ; 
		return ; 
	}
	else {
		Sub_ShortFeedback("بروز خطا" , "red") ; 
		Sub_TextFeed("ApprovalFeed".$Data[ID]) ; 
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

//=====================================================================================
function Sub_TextFeed($ObjectID , $Value=0)
{
	?><input id="<?=$ObjectID?>" value="<?=$Value?>" type="hidden"/><?
}
?>