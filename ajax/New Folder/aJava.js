//Starting AJAX...
var AJAX = false ; 

if(window.XMLHttpRequest) {
	AJAX = new XMLHttpRequest() ; 
} 
else if(window.ActiveXObject) {
	AJAX = new ActiveXObject("Microsoft.XMLHTTP") ;
}


//====================================================================================
function $$(ID)
{
	return document.getElementById(ID) ; 
}

//====================================================================================
function WinPop( vFileStream )
{
	window.open(vFileStream , "subWindow" , "dependent,height=600,width=850,left=50,top=50,scrollbars,status,") ;
}

//====================================================================================
function WinOpen( vFileStream )
{
	window.open(vFileStream) ;
}




//====================================================================================
function AdmTableMouseEvent( vID , vMode ) 
{
	vRow = $$("row"+vID) ; 
	vDet = $$("detail"+vID) ; 
	vApr = $$("Approval"+vID) ; 
	
	if(vMode=="move") {
		vRow.bgColor = '#EFF9CF' ; 
		vDet.style.visibility = "visible" ; 
		vApr.style.visibility = "visible" ; 
	}
	else if(vMode == "out") {
		vRow.bgColor='#FFFFFF' ; 
		vDet.style.visibility = "hidden" ; 
		vApr.style.visibility = "hidden" ; 
	}
}

//====================================================================================
function AdmTableAutoHide(First , Last)
{
	//Preparetions...
	if(Last<First) {
		Medium = First ; 
		First = Last ;
		Last  = Medium ; 
	}
		
	//Loop...
	for(i=First ; i<=Last ; i++) {
		Obj = $$('ApprovalFeed'+i) ;
		if(Obj.value=="1")
			setTimeout("AdmTableAutoHide_Remover("+i+")", 3000) ;
	}

	setTimeout("AdmTableAutoHide("+First+" , "+Last+")", 1000) ; 
}

//-----------------------------------------
function AdmTableAutoHide_Remover(ID)
{
	$$('row'+ID).style.display = "none" ; 
}

// ##############################################
//
//		 AJAX CONTROLLERS
//
// ##############################################


//====================================================================================
function AJ_Approve(vID , vNewValue)
{
	var Switch = "COMMAND=Approve&ID="+vID+"&NewValue="+vNewValue ; 
	var Target = $$("ApprovalAjax"+vID) ;
	var Handle = $$("Approval"+vID) ; 
	
	Target.style.visibility = "visible" ; 
	Handle.style.display="none" ; 

	AJ_DO( Switch , Target) ;

}





//==========================================================================================
//==========================================================================================
//==========================================================================================
//==========================================================================================
function AJ_DO(Variables , FeedBack , Waiting , BlankWhile)
{
	if(AJAX) {
	
		AJAX.open("GET" , "do.ajax.php?"+encodeURI(Variables)+"&t="+new Date().getTime()) ;

		AJAX.onreadystatechange = function() 
		{
			if(AJAX.readyState==4 && AJAX.status==200) {
				FeedBack.innerHTML = AJAX.responseText ;
				Waiting.style.visibility = 'hidden' ;
			}
			else {
				Waiting.style.visibility = 'visible' ;
				if(BlankWhile) Target.innerHTML = '' ;
			}
		}
	}
	
	AJAX.send(null) ;

}

//==========================================================================================	
function AJ_DO2(Variables , FeedBack , WaitWord)
{
	FeedBack.innerHTML = WaitWord ;
	
	if(AJAX) {
	
		AJAX.open("GET" , "do.ajax.php?"+encodeURI(Variables)+"&t="+new Date().getTime()) ;

		AJAX.onreadystatechange = function() 
		{
			if(AJAX.readyState==4 && AJAX.status==200) {
				FeedBack.innerHTML = AJAX.responseText ;
			}
			else {
				FeedBack.innerHTML = WaitWord ;
			}
		}
	}
	
	AJAX.send(null) ;

}
