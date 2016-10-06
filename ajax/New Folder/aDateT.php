<?
//include_once("aDate.php") ; 


//========================================================================
function tdate_now()
{
	return tdate_s2t() ; 
}


//========================================================================
function tdate_s2t($Stamp=NULL)  //to change standard timestamp to Taha stamp
{
	if(!$Stamp) $Time = time() ; // - (60*80*3600) ; 
	
	return TDate("Ymd.His",$Time) ;

}


//========================================================================
function tdate_t2o($TStamp=NULL)  //to change Taha stamp to Date Object
{
	if(!$TStamp) $TStamp = tdate_s2t() ; 

	$Answer[Y] = tdate_show($TStamp,"Y") + 0 ;
	$Answer[M] = tdate_show($TStamp,"m") + 0 ;
	$Answer[D] = tdate_show($TStamp,"d") + 0 ;
	$Answer[H] = tdate_show($TStamp,"H") + 0 ;
	$Answer[I] = tdate_show($TStamp,"i") + 0 ;
	$Answer[S] = tdate_show($TStamp,"s") + 0 ;
	
	return $Answer ; 
}

//========================================================================
function tdate_o2t($Obj) //to change Date Object to  Taha stamp
{
	$Y = $Obj[Y] ; 
	$M = $Obj[M] ;
	$D = $Obj[D] ;
	$H = $Obj[H] ;
	$I = $Obj[I] ;
	$S = $Obj[S] ;
	
	if($Y==0) $M = $D = $H = $I = $S = 0 ; 

	if($M<10) $M = "0".$M ; 
	if($D<10) $D = "0".$D ; 
	if($H<10) $H = "0".$H ; 
	if($I<10) $I = "0".$I ; 
	if($S<10) $S = "0".$S ; 

	$Answer = $Y.$M.$D.".".$H.$I.$S ; 
	return $Answer + 0 ; 
	
}


//========================================================================
function tdate_show($TStamp=NULL , $Type=NULL) // to show a time, based on Taha stamp 
{
	if(!$TStamp) $TStamp = tdate_s2t() ; 
		
	switch($Type) {
		case NULL :
			$Type   = "d/m/Y"  ; break ;
		case "Pk1" :
			$Type = "d M Y ـ ساعت H:i" ; break ; 
		case "Pk2" :
			$Type = "d/m/Y<br>H:i" ; break ; 
		case "RL1" :
			gInsertLink( tdate_relative($TStamp) , NULL, tdate_show($TStamp,"Y/m/d ـ ساعت H:i") ) ;
			return;
		case "RL2" :
			if($TStamp<1) { echo " ـ " ; return ; } //safety
			echo gPureText(tdate_relative($TStamp).": ".tdate_show($TStamp,"d M Y T")) ;
			return ; 
		case "RL2n" :
			if($TStamp<1) { echo " ـ " ; return ; } //safety
			echo gPureText(tdate_relative($TStamp)."<br />".tdate_show($TStamp,"d M Y T")) ;
			return ; 
	}
	

	if($TStamp<1)  return " ـ " ; //safety

	$Y = substr($TStamp, 0,4) ; 
	$y = substr($TStamp, 2,2) ; 
	$m = substr($TStamp, 4,2) ; 
	$d = substr($TStamp, 6,2) ; 
	$H = substr($TStamp, 9,2) ; 
	$i = substr($TStamp,11,2) ; 
	$s = substr($TStamp,13,2) ; 
	
	if($H>12) $h=$H-12 ; else $h=$H ; 
	if($h<10) $h="0".$h ; else $h="".$h ; 	
	$M = tdate_show_MonthName($m) ; 
	if($d<10) $d = substr($d,1) ; 
	if($m<10) $m = substr($m,1) ; 
	
	if(!$i) $i = "00" ; 
	if(!$s) $s = "00" ; 
	
	//Processing the requested Type...
	if($H==0 && $i==0) 
		$T = NULL ;
	elseif($H==0 && $i>0) 
		$T = "ـ نیمه‏شب" ;
	else
		$T = "ـ ساعت H:i" ;
	
	$Answer = $Type ; 
    $Answer = str_replace("T", $T, $Answer);
    $Answer = str_replace("Y", $Y, $Answer);
    $Answer = str_replace("y", $y, $Answer);
    $Answer = str_replace("m", $m, $Answer);
    $Answer = str_replace("M", $M, $Answer);
    $Answer = str_replace("d", $d, $Answer);
    $Answer = str_replace("H", $H, $Answer);
    $Answer = str_replace("h", $h, $Answer);
    $Answer = str_replace("i", $i, $Answer);
	$Answer = str_replace("s", $s, $Answer);
    //$Answer = ereg_replace("T",$T,$Answer) ; 
	//$Answer = ereg_replace("Y",$Y,$Answer) ; 
	//$Answer = ereg_replace("y",$y,$Answer) ; 
	//$Answer = ereg_replace("m",$m,$Answer) ; 
	//$Answer = ereg_replace("M",$M,$Answer) ; 
	//$Answer = ereg_replace("d",$d,$Answer) ; 
	//$Answer = ereg_replace("H",$H,$Answer) ; 
	//$Answer = ereg_replace("h",$h,$Answer) ; 
	//$Answer = ereg_replace("i",$i,$Answer) ; 
	//$Answer = ereg_replace("s",$s,$Answer) ; 
	
	//return gPureText($Answer); 
	return $Answer ; 
	


}

//--------------------------------------------
function tdate_show_MonthName($m)
{
	switch($m) {
		case  1: return "فروردین" ;
		case  2: return "اردیبهشت" ;
		case  3: return "خرداد" ;
		case  4: return "تیر" ;
		case  5: return "مرداد" ;
		case  6: return "شهریور" ;
		case  7: return "مهر" ;
		case  8: return "آبان" ;
		case  9: return "آذر" ;
		case 10: return "دی" ;
		case 11: return "بهمن" ;
		case 12: return "اسفند" ;
		default: return NULL ; 
	}
}

//========================================================================
function tdate_t2h($Date=NULL)  //to Convert Date Object to a HomeMade Stamp
{
	if(!$Date) $Date = tdate_now() ; 
	$Obj = tdate_t2o($Date) ; 


	$Ans = $Obj[S] ; 
	$Ans += $Obj[I] * 60 ;
	$Ans += $Obj[H] * 60 * 60 ;
	$Ans += $Obj[D] * 60 * 60 * 24 ;
	$Ans += $Obj[M] * 60 * 60 * 24 * 30.5 ;
	$Ans += ($Obj[Y]-1300) * 60 * 60 * 24 * 30.5 * 12 ; 
	
	return $Ans ; 
}


//========================================================================
function tdate_h2t($HStamp)  //to Convert Date Object FROM a HomeMade Stamp
{

	$Ans[Y] = floor($HStamp/(60 * 60 * 24 * 30.5 * 12)) + 1300 ; 
	$HStamp = $HStamp - (($Ans[Y]-1300) * 60 * 60 * 24 * 30.5 * 12) ;
	
	$Ans[M] = floor($HStamp/(60 * 60 * 24 * 30.5)) ;
	$HStamp = $HStamp - ($Ans[M] * 60 * 60 * 24 * 30.5) ;
	if($Ans[M]==0) {$Ans[M]=12 ; $Ans[Y]-- ; }
	
	$Ans[D] = floor($HStamp/(60 * 60 * 24)) ;
	$HStamp = $HStamp - ($Ans[D] * 60 * 60 * 24) ;
	if($Ans[D]==0) {$Ans[D]=30 ; $Ans[M]-- ; }
	if($Ans[M]==0) {$Ans[M]=12 ; $Ans[Y]-- ; }

	$Ans[H] = floor($HStamp/(60 * 60)) ;
	$HStamp = $HStamp - ($Ans[H] * 60 * 60) ;
	if($Ans[H]==0) {$Ans[H]=23 ; $Ans[D]-- ; }
	if($Ans[D]==0) {$Ans[D]=30 ; $Ans[M]-- ; }
	if($Ans[M]==0) {$Ans[M]=12 ; $Ans[Y]-- ; }

	$Ans[I] = floor($HStamp/(60)) ;
	$Ans[S] = $HStamp - ($Ans[I] * 60) ;
	if($Ans[I]==0) {$Ans[I]=59 ; $Ans[H]-- ; }
	if($Ans[H]==0) {$Ans[H]=23 ; $Ans[D]-- ; }
	if($Ans[D]==0) {$Ans[D]=30 ; $Ans[M]-- ; }
	if($Ans[M]==0) {$Ans[M]=12 ; $Ans[Y]-- ; }
	
	

	return tdate_o2t($Ans) ;
	
}

//========================================================================
function tdate_sub($Secs , $Date=NULL)
{
	if(!$Date) $Date = tdate_now() ; 
	$S1 = tdate_t2h($Date) ; 
	$S2 = $S1 - $Secs ;
	
	return tdate_h2t($S2) ;

}

//========================================================================
function tdate_evaluate($Obj , $Style=NULL) // to check the date syntax
{
	if($Obj[Y]<0 || $Obj[M]<0 || $Obj[D]<0 || $Obj[H]<0 || $Obj[I]<0 || $Obj[S]<0) return false ; 
	
	if(strstr($Style,"N") && $Obj[Y]+$Obj[M]+$Obj[D]+$Obj[H]+$Obj[I]+$Obj[S]==0) return true ; 
	if($Obj[Y] < 1310 || $Obj[Y] > 1450) return false ; 
	if(strstr($Style,"Y") && $Obj[M]+$Obj[D]+$Obj[H]+$Obj[I]+$Obj[S]==0) return true ; 

	if($Obj[M] > 6 && $Obj[D] > 30) return false ; 
	if(strstr($Style,"M") && $Obj[D]+$Obj[H]+$Obj[I]+$Obj[S]==0) return true ; 

	if($Obj[D] > 31 || $Obj[D] < 1) return false ; 
	if($Obj[M] > 12 || $Obj[M] < 1) return false ; 
	if($Obj[M] > 6 && $Obj[D] > 30) return false ;  //repeated
	if($Obj[H] > 24) return false ; 
	if($Obj[I] > 59) return false ; 
	if($Obj[S] > 59) return false ; 

	return true ; 
}

//========================================================================
function tdate_norm($Y , $M , $D , $H=0 , $I=0 , $S=0)
{
	$Answer[Y] = $Y + 0 ; 
	$Answer[M] = $M + 0 ; 
	$Answer[D] = $D + 0 ; 
	$Answer[H] = $H + 0 ; 
	$Answer[I] = $I + 0 ; 
	$Answer[S] = $S + 0 ; 
	
	if($Answer[Y]<100 && $Answer[Y] > 60) $Answer[Y] = "13".$Answer[Y] ; 
	
	return $Answer ; 
}

//========================================================================
function tdate_subtract( $Date1 , $Date2=NULL)
{
	if(!$Date2) $Date2 = tdate_now() ; 
	
	$Y1 = tdate_show($Date1,"Y") ; 
	$Y2 = tdate_show($Date2,"Y") ; 
	
	
	
	return abs($Y1 - $Y2) ; 
}

//========================================================================
function tdate_relative( $Date , $Now = NULL) 
{

	//preparetions....
	if(!$Now) $Now = tdate_now() ; 
	$DateS = tdate_t2h($Date) ;
	$NowS = tdate_t2h($Now) ;
	
	$Gap = $NowS - $DateS ;
	if($Gap < 0) return tdate_show($Date) ; //safety
	if($Gap== 0) return "حالا" ; 
	
	if($Date<1350) return " ـ " ; 
	
	//Less than One Day...
	$Gap = round($Gap / 60) ;
	
	if(!$Gap)
		$Answer = "لحظاتی پیش" ; 
	elseif($Gap<25)
		$Answer = "$Gap دقیقه پیش" ; 
	elseif($Gap<35)
		$Answer = "نیم ساعت پیش" ;
	elseif($Gap<50)
		$Answer = "$Gap دقیقه پیش" ; 
	elseif($Gap<1380) {
		$Gap = round($Gap / 60) ; 
		$Answer = "$Gap ساعت پیش" ; 		
	}

	if($Answer) return $Answer ; 


	//Day or mutch...
	$Gap = $NowS - $DateS ;
	$Gap = round($Gap / 86400) ; 
	
	if(!$Gap) 
		$Answer = "امروز" ; 
	elseif($Gap==1)
		$Answer = "دیروز" ; 
	elseif($Gap < 7) 
		$Answer = "$Gap روز پیش" ; 
	elseif($Gap < 23) {
		$Gap = round($Gap/7) ; 
		$Answer = "$Gap هفته پیش" ; 
	}
	elseif($Gap < 330) {
		$Gap = round($Gap/30) ;
		$Answer = "$Gap ماه پیش" ;
	}
	else{
		$Gap = round($Gap/365) ; 
		if($Gap==1) $Answer = "پارسال" ; 
		else $Answer = "$Gap سال پیش" ; 
	}
		
	if($HrsTag) $Answer .= $HrsTag.TDate("H:i" , $Stamp) ; 
	
	return $Answer ; 

	

}


//========================================================================
function tdate_duration( $Date1 , $Date2=NULL , $Raw=false ) 
{
	if(!$Date2) $Date2 = tdate_now() ;
	$Date1 = tdate_t2h($Date1) ; 
	$Date2 = tdate_t2h($Date2) ; 
	$Stamp = abs($Date1 - $Date2) ; 
	
	if($Raw) return $Stamp ; 

	$Gap = round((abs($Stamp))/60) ; 
	$H = floor($Gap/60) ; 
	$M = $Gap - ($H*60) ; 
	
	if(!$H) {
		if(!$M) return "ناچیز" ; 
		if($M < 60) return "$M دقیقه" ;
	}
	elseif($Fix)
		return "$H ساعت و $M دقیقه" ; 
	else
		return round($Gap/60)." ساعت" ;  
}






function TDate( $type , $maket="now" )
{

	if( !$maket ) 
		$Answer = "ـ" ;
	else
		$Answer = pdate( $type , $maket ) ;
		
	return $Answer ; 

}

//------------------------
function TDate_Easy( $maket="now" )
{
	return TDate( "d M Y" , $maket ) ;
}

?>