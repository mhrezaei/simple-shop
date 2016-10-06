<?
include_once("aSQLConnection.php") ; 

//====================================================================
function aSelect( $Table , $Where = true , $Order = NULL , $Style = NULL , $Max = 30000 ) 
{

	if( !$Order ) $Order = "ID DESC" ; 
	if( !strstr($Style,"A")) $Where = "`Active` AND (".$Where.")" ; 
	
	$SQL = "SELECT * FROM `".$Table."` WHERE ".$Where." ORDER BY ".$Order." LIMIT $Max" ; 
	
	$Result = @mysql_query( $SQL ) or die( mysql_error() ) ;
	return $Result ; 
}

//====================================================================
function aRecentRecord( $Table , $Where = true ,  $Style = NULL ) 
{

	$Table = aSelect($Table , $Where , "ID DESC" , $Style , 1) ; 
	$Row   = aRecNo($Table) ; 
	
	return $Row ; 
	
}

//====================================================================
function aDeleteID( $Table , $ID ) 
{
	
	$SQL = "DELETE FROM `$Table` WHERE `ID` = '$ID'" ; 
	aSQL($SQL) ; 

}

//====================================================================
function aCount( $Result ) 
{
	return @mysql_num_rows( $Result ) ;
}

//====================================================================
function aRecNo( $Result , $RowNo = 1 )
{
	@mysql_data_seek( $Result , $RowNo - 1 ) ;
	return @mysql_fetch_assoc( $Result ) ; 
}

//====================================================================
function aRecID( $TableName , $ID , $Style = NULL) 
{
	$ID += 0 ; //safety
	if(!$ID) return NULL ;  //safety

	$Table = aSelect( $TableName , "`ID` = '$ID'" , NULL , $Style ) ; 
	
	if( !aCount($Table) ) return NULL ; 
	return aRecNo($Table) ; 
}


//====================================================================
function aRecSerial( $TableName , $Serial , $Style = NULL ) 
{
	$Table = aSelect( $TableName , "Serial = '$Serial'" , NULL , $Style ) ; 
	
	if( !aCount($Table) ) return NULL ; 
	return aRecNo($Table) ; 
}

//====================================================================
function aFieldSet( $TableName , $ID , $Field , $NewValue ) 
{
	$ID += 0 ; //safety

	$SQL = "UPDATE `".$TableName."` SET `".$Field."` = '".$NewValue."' WHERE ID = ".$ID ; 
	
	aSQL($SQL , false ) ; 
	return $SQL ;
}


//====================================================================
function aNewFinder( $TableName , $FieldName = "ID" , $Where = true , $Style = NULL )
{
	$Order = $FieldName." DESC " ;
	$Table = aSelect( $TableName , $Where , $Order , $Style , 1) ;
	return aRecNo( $Table ) ; 
}


//====================================================================
function aSQL( $SQL , $Log = true ) 
{
	if($Log) aSQL_Log($SQL) ; 
	
	return @mysql_query( $SQL ) ;
}

//---------------------------
function aSQL_Log( $SQL ) 
{
	$_SESSION[LastSQL] = $SQL ; 
	$_SESSION[SQL][Pending] = true ; 
}

//====================================================================
function aFieldName( $Table , $Index = 1 ) 
{
	return @mysql_field_name( $Table , $Index ) ;
}


//====================================================================
function aSQLError() 
{
	$Error = $_SESSION[Panel][SQL][Error] = @mysql_error() ; 
	return $Error ; 
}

//====================================================================
function aSQLAffected()
{
	return @mysql_affected_rows() ; 
}


//====================================================================
function aFieldCount( $Table )
{
	return mysql_num_fields( $Table ) ;
}

//====================================================================
function aAffectedRows() 
{
	return mysql_affected_rows() ; 
}




?>